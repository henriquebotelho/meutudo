<?php
$vantagens_pre_titulo = get_field('vantagens_pre_titulo', 'option');
$vantagens_titulo = get_field('vantagens_titulo', 'option');
$vantagens_descricao = get_field('vantagens_descricao', 'option');
?>

<section class="benefits">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 text-center">
        <?php
        echo $vantagens_pre_titulo ? '<span class="pre-title">' . $vantagens_pre_titulo . '</span>' : '';
        echo $vantagens_pre_titulo ? '<h3 class="title small black">' . $vantagens_pre_titulo . '</h3>' : '';
        echo $vantagens_descricao;
        ?>
      </div>
    </div>
    <?php
    if (have_rows('vantagens_lista', 'option')) { ?>

      <div class="grid">
        <?php
        while (have_rows('vantagens_lista', 'option')) {
          the_row();

          $icone = get_sub_field('icone');
          $titulo = get_sub_field('titulo');
          $descricao = get_sub_field('descricao');
        ?>
          <div class="box">
            <?php
            echo $icone ? '<img src="' . $icone['url'] . '" alt="' . $icone['alt'] . '" width="' . $icone['width'] . '" height="' . $icone['height'] . '" />' : '';
            echo $titulo ? '<span>' . $titulo . '</span>' : '';
            echo $descricao;
            ?>
          </div>
        <?php } ?>
      </div>
    <?php
      wp_reset_query();
      wp_reset_postdata();
    }
    ?>
  </div>
</section>