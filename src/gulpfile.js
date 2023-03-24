'use strict'

const dir = {
        src: 'theme',
        build: '../dist/app/public/wp-content/themes/meutudo/',
        plugins: '../dist/app/public/wp-content/plugins/'
    },
    images = {
        src: dir.src + '/images/**/*',
        build: dir.build + '/images/'
    },
    cssDist = {
        src: dir.src + '/css/**/*',
        build: dir.build + '/css/'
    },
    fontsDist = {
        src: dir.src + '/fonts/**/*',
        build: dir.build + '/fonts/'
    },
    css = {
        src: dir.src + '/scss/style.scss',
        watch: dir.src + '/scss/**/*',
        build: dir.build,
        sassOpts: {
            outputStyle: 'compressed',
            imagePath: images.build,
            precision: 3,
            errLogToConsole: false
        },
        processors: [
            require('postcss-assets')({
                loadPaths: ['images/'],
                basePath: dir.build,
                baseUrl: '../dist/wp-content/themes/meutudo/'
            }),
            require('autoprefixer')({
                overrideBrowserslist: ['last 2 versions', '> 2%']
            }),
            require('css-mqpacker'),
            require('cssnano')
        ]
    },
    js = {
        src: dir.src + '/js/**/*',
        build: dir.build + '/js/',
        filename: 'bundle.js'
    },
    gulp = require('gulp'),
    gutil = require('gulp-util'),
    newer = require('gulp-newer'),
    sass = require('gulp-sass')(require('sass')),
    postcss = require('gulp-postcss'),
    deporder = require('gulp-deporder'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify'),
    del = require('del'),
    pxtorem = require('gulp-px2rem-converter')

// Browser-sync
let browsersync = false;


gulp.task('clean', () => {
    return del(
        [dir.build],
        {
            force: true
        }
    )
})


// PHP settings
const php = {
    src: dir.src + '/template/**/*.php',
    build: dir.build
}

// copy PHP files
gulp.task('php', () => {
    return gulp.src(php.src)
        .pipe(newer(php.build))
        .pipe(gulp.dest(php.build))
        .pipe(browsersync ? browsersync.reload({stream: true}) : gutil.noop())
})

// PHP settings
const plugins = {
    src: 'plugins/**/*.*',
    build: dir.plugins
}

// copy PLugins files
gulp.task('plugins', () => {
    return gulp.src(plugins.src)
        .pipe(newer(plugins.build))
        .pipe(gulp.dest(plugins.build))
        .pipe(browsersync ? browsersync.reload({stream: true}) : gutil.noop())
})

// image processing
gulp.task('images', () => {
    return gulp.src(images.src)
        .pipe(newer(images.build))
        .pipe(gulp.dest(images.build))
})
// css processing
gulp.task('css-dist', () => {
    return gulp.src(cssDist.src)
        .pipe(newer(cssDist.build))
        .pipe(gulp.dest(cssDist.build))
})
// fonts processing
gulp.task('fonts-dist', () => {
    return gulp.src(fontsDist.src)
        .pipe(newer(fontsDist.build))
        .pipe(gulp.dest(fontsDist.build))
})

// CSS processing
gulp.task('css', gulp.series('images', 'css-dist', () => {
    return gulp.src(css.src)
        .pipe(sass(css.sassOpts))
        //.pipe(pxtorem())
        .pipe(postcss(css.processors))
        .pipe(gulp.dest(css.build))
        .pipe(browsersync ? browsersync.reload({stream: true}) : gutil.noop())
}))

// JavaScript processing
gulp.task('js', () => {
    return gulp.src(js.src)
        .pipe(deporder())
        .pipe(stripdebug())
        .pipe(uglify())
        .pipe(gulp.dest(js.build))
        .pipe(browsersync ? browsersync.reload({stream: true}) : gutil.noop())

})

// Browsersync options
const syncOpts = {
    proxy: 'localhost/www/meutudo/dist',
    files: dir.build + '**/*',
    open: true,
    notify: true,
    ghostMode: true,
    ui: {
        port: 8001
    }
}

// browser-sync
gulp.task('browsersync', () => {
    if (browsersync === false) {
        browsersync = require('browser-sync').create();
        browsersync.init(syncOpts)
    }
})

// watch for file changes
gulp.task('watch', gulp.parallel('browsersync', () => {
    gulp.watch(php.src, gulp.series('php'))
    gulp.watch(plugins.src, gulp.series('plugins'))
    gulp.watch(images.src, gulp.series('images'))
    gulp.watch(css.watch, gulp.series('css'))
    gulp.watch(js.src, gulp.series('js'))
}))

// run all tasks
gulp.task('build', gulp.series('clean', 'php', 'plugins', 'css', 'fonts-dist', 'js'));
gulp.task('default', gulp.series('build', 'watch'));