<section class="services">
  <?php if (have_rows('services_cards', 'option')) { ?>
    <div class="container">
      <div class="row">
        <?php
        while (have_rows('services_cards', 'option')) {
          the_row();

          $icone = get_sub_field('icone');
          $titulo = get_sub_field('titulo');
          $descricao = get_sub_field('descricao');
          $link_do_botao = get_sub_field('link_do_botao');
        ?>
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <?php
                echo $icone ? '<img src="' . $icone['url'] . '" alt="' . $icone['alt'] . '" width="' . $icone['width'] . '" height="' . $icone['height'] . '" />' : '';
                echo $titulo ? '<h2>' . $titulo . '</h2>' : '';
                echo $descricao;
                ?>
              </div>
              <?php echo $link_do_botao ? '<a href="' . $link_do_botao['url'] . '" ' . ($link_do_botao['target'] ? 'target="' . $link_do_botao['target'] . '"' : '') . ' class="button rounded">' . $link_do_botao['title'] . '</a>' : ''; ?>
            </div>
          </div>
        <?php
        }
        wp_reset_query();
        wp_reset_postdata();
        ?>
      </div>
    </div>
  <?php
  }
  include('benefits.php') ?>
  <?php include('platform.php') ?>
</section>