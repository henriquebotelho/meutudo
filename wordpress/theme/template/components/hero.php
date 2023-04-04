<?php
$hero_texto = get_field('hero_texto', 'option');
$hero_background = get_field('hero_background', 'option');
?>


<section class="hero" <?php echo $hero_background ? 'style="background-image: url(' . $hero_background . ')"' : '' ?>>
  <div class="container vh-100">
    <div class="row vh-100 align-items-center">
      <?php if ($hero_texto) { ?>
        <div class="col-lg-5">
          <h1 class="title"><?php echo $hero_texto; ?></h1>
        </div>
      <?php } ?>
    </div>
  </div>
</section>