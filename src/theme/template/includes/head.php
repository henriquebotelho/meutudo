<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="<?php echo HB_THEME_URL; ?>img/favicon.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo HB_THEME_URL; ?>img/apple_icons_72x72.png" />
<link rel="apple-touch-icon" href="<?php echo HB_THEME_URL; ?>img/apple_icons_114x114.png" />
<link rel="apple-touch-icon" href="<?php echo HB_THEME_URL; ?>img/apple_icons_180x180.png" />
<title><?php
        if (is_home()) {
            bloginfo('name');
        } elseif (is_category()) {
            single_cat_title();
            if (get_bloginfo('name') != "")
                echo ' - ';
            bloginfo('name');
        } elseif (is_single()) {
            single_post_title();
        } elseif (is_page()) {
            bloginfo('name');
            if (get_bloginfo('name') != "")
                echo ': ';
            single_post_title();
        } else {
            wp_title('', true);
        }
        ?></title>

<?php if (is_home()) { ?>
    <meta property="og:url" content="<?php echo HB_URL; ?>" />
<?php } else { ?>
    <meta property="og:url" content="<?php the_permalink(); ?>" />
<?php } ?>
<?php if (is_home()) { ?>
    <meta property="og:image" content="<?php echo HB_THEME_URL; ?>/images/rb.jpg" />
<?php } else { ?>
    <meta property="og:image" content="<?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                                        echo $image_url[0];
                                        ?>" />
<?php } ?>
<meta property="og:title" content="<?php
                                    if (is_home()) {
                                        bloginfo('name');
                                    } elseif (is_category()) {
                                        single_cat_title();
                                        if (get_bloginfo('name') != "")
                                            echo ' - ';
                                        bloginfo('name');
                                    } elseif (is_single()) {
                                        single_post_title();
                                    } elseif (is_page()) {
                                        bloginfo('name');
                                        if (get_bloginfo('name') != "")
                                            echo ': ';
                                        single_post_title();
                                    } else {
                                        wp_title('', true);
                                    }
                                    ?>" />
<meta property="og:site_name" content="RiqueBotelho.com" />
<?php if (is_home()) { ?>
    <meta property="og:description" content="<?php
                                                if (is_single()) {
                                                    single_post_title('', true);
                                                } else {
                                                    bloginfo('name');
                                                    echo " - ";
                                                    bloginfo('description');
                                                }
                                                ?>" />
<?php } else { ?>
    <meta property="og:description" content="" />
<?php } ?>


<meta property="og:type" content="website" />
<meta name="robots" content="index, follow" />
<meta name="author" content="Henrique Botelho">
<meta name="description" content="<?php bloginfo('description'); ?>" />


<?php if (is_home()) { ?>
    <link rel="canonical" href="<?php echo HB_URL; ?>" />
<?php } else { ?>
    <link rel="canonical" href="<?php the_permalink(); ?>" />
<?php } ?>

<title><?php wp_title('', true, ''); ?></title>

<?php if (is_home()) { ?>
    <meta property="og:url" content="<?php echo HB_URL; ?>" />
<?php } else { ?>
    <meta property="og:url" content="<?php the_permalink(); ?>" />
<?php } ?>
<?php if (is_home()) { ?>
    <meta property="og:image" content="<?php echo HB_THEME_URL; ?>/images/rb.jpg" />
<?php } else { ?>
    <meta property="og:image" content="<?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, 'full', true);
                                        echo $image_url[0];
                                        ?>" />
<?php } ?>
<meta property="og:title" content="<?php
                                    if (is_home()) {
                                        bloginfo('name');
                                    } elseif (is_category()) {
                                        single_cat_title();
                                        if (get_bloginfo('name') != "")
                                            echo ' - ';
                                        bloginfo('name');
                                    } elseif (is_single()) {
                                        single_post_title();
                                    } elseif (is_page()) {
                                        bloginfo('name');
                                        if (get_bloginfo('name') != "")
                                            echo ': ';
                                        single_post_title();
                                    } else {
                                        wp_title('', true);
                                    }
                                    ?>" />
<meta property="og:site_name" content="Henrique Botelho Desenvolvedor" />
<?php if (is_home()) { ?>
    <meta property="og:description" content="<?php
                                                if (is_single()) {
                                                    single_post_title('', true);
                                                } else {
                                                    bloginfo('name');
                                                    echo " - ";
                                                    bloginfo('description');
                                                }
                                                ?>" />
<?php } else { ?>
    <meta property="og:description" content="" />
<?php } ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo HB_THEME_URL; ?>style.css?<?php echo rand() ?>">

<?php wp_head(); ?>