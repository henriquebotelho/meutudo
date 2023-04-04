<?php
$banner_imagem = get_field('banner_imagem', 'option');
$banner_texto = get_field('banner_texto', 'option');

if ($banner_imagem || $banner_texto) {
?>
  <section class="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <div class="wrapper">
            <?php
            echo $banner_imagem ? '<img src="' . $banner_imagem['url'] . '" alt="' . $banner_imagem['alt'] . '" width="' . $banner_imagem['width'] . '" height="' . $banner_imagem['height'] . '" />' : '';
            echo $banner_texto ? '<div class="text"><p>' . $banner_texto . '</p></div>' : '';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>