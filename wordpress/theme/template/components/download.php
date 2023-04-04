<?php
$download_imagem = get_field('download_imagem', 'option');
$download_texto = get_field('download_texto', 'option');
$download_url_play_store = get_field('download_url_play_store', 'option');
$download_url_app_store = get_field('download_url_app_store', 'option');
?>
<section class="download">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <div class="wrapper">
          <?php echo $download_imagem ? '<img src="' . $download_imagem['url'] . '" alt="' . $download_imagem['alt'] . '" width="' . $download_imagem['width'] . '" height="' . $download_imagem['height'] . '" />' : ''; ?>
          <div class="text">
            <?php echo $download_texto ? '<h2>' . $download_texto . '</h2>' : ''; ?>
            <div class="store">
              <?php if ($plataforma_url_play_store) { ?>
                <a href="<?php echo $plataforma_url_play_store ?>" target="_blank">
                  <img src="<?php echo HB_THEME_URL ?>images/google_play.png" alt="Baixar aplicativo na Play Store" width="156" height="47" />
                </a>
              <?php
              }
              if ($plataforma_url_app_store) {
              ?>
                <a href="<?php echo $plataforma_url_app_store ?>" target="_blank">
                  <img src="<?php echo HB_THEME_URL ?>images/app_store.png" alt="Baixar aplicativo na App Store" width="155" height="46" />
                </a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>