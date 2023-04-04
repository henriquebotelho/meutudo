<?php
$plataforma_imagem = get_field('plataforma_imagem', 'option');
$plataforma_pre_titulo = get_field('plataforma_pre_titulo', 'option');
$plataforma_titulo = get_field('plataforma_titulo', 'option');
$plataforma_lista = get_field('plataforma_lista', 'option');
$plataforma_url_play_store = get_field('plataforma_url_play_store', 'option');
$plataforma_url_app_store = get_field('plataforma_url_app_store', 'option');
?>


<section class="platform">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <?php echo $plataforma_imagem ? '<img src="' . $plataforma_imagem['url'] . '" alt="' . $plataforma_imagem['alt'] . '" width="' . $plataforma_imagem['width'] . '" height="' . $plataforma_imagem['height'] . '" />' : ''; ?>
      </div>
      <div class="col-lg-6 offset-lg-1">
        <?php
        echo $plataforma_pre_titulo ? '<span class="pre-title">' . $plataforma_pre_titulo . '</span>' : '';
        echo $plataforma_titulo ? '<h3 class="title small black">' . $plataforma_titulo . '</h3>' : '';
        if ($plataforma_lista) {
        ?>
          <ul class="list-check">
            <?php
            $replaceTag = str_replace(array("<p>", "</p>"), array("<li>", "</li>"), $plataforma_lista);
            echo $replaceTag;
            ?>
          </ul>
        <?php } ?>
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
</section>