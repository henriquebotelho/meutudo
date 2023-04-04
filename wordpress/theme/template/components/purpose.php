<?php
$proposito_pre_titulo = get_field('proposito_pre_titulo', 'option');
$proposito_titulo = get_field('proposito_titulo', 'option');
$proposito_descricao = get_field('proposito_descricao', 'option');
$proposito_botao = get_field('proposito_botao', 'option');
$proposito_imagem = get_field('proposito_imagem', 'option');
?>
<section class="purpose">
  <div class="container">
    <div class="row justify-content-around align-items-center">
      <div class="col-lg-5">
        <?php
        echo $proposito_pre_titulo ? '<span class="pre-title">' . $proposito_pre_titulo . '</span>' : '';
        echo $proposito_titulo ? '<h3 class="title small black">' . $proposito_titulo . '</h3>' : '';
        echo $proposito_descricao ? '<p class="pt-4 mb-0">' . $proposito_descricao . '</p>' : '';
        ?>
        <?php echo $proposito_botao ? '<a href="' . $proposito_botao['url'] . '" ' . ($proposito_botao['target'] ? 'target="' . $proposito_botao['target'] . '"' : '') . ' class="button rounded">' . $proposito_botao['title'] . '</a>' : ''; ?>
      </div>
      <?php echo $proposito_imagem ? '<div class="col-lg-6"><img src="' . $proposito_imagem['url'] . '" alt="' . $proposito_imagem['alt'] . '" width="' . $proposito_imagem['width'] . '" height="' . $proposito_imagem['height'] . '" /></div>' : ''; ?>
    </div>
  </div>
</section>