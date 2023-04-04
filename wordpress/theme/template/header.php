<?php
$info_url_youtube = get_field('info_url_youtube', 'option');
$info_url_spotify = get_field('info_url_spotify', 'option');
$info_url_linkedin = get_field('info_url_linkedin', 'option');

?>
<header class="header fixed-top">
  <div class="container-xl">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <?php function_exists('the_custom_logo') ? the_custom_logo() : '' ?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z" class=""></path>
            </svg>
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="ms-auto menuContainer">
              <ul class="navbar-nav menu">
                <?php
                wp_nav_menu([
                  'menu' => 'Menu Principal',
                  'items_wrap' => '%3$s',
                  'container' => false,
                  'depth' => 2,
                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                  'walker' => new WP_Bootstrap_Navwalker(),
                ]);
                ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>