<?php

/*******************************************/
// INICIA AÇÕES
/*******************************************/
add_action('after_setup_theme', 'custom_setup');

define('HB_URL', get_home_url()); /* <?php echo PW_URL; ?> */
define('HB_THEME_URL', get_bloginfo('template_url') . '/'); /* <?php echo PW_THEME_URL; ?> */
define('HB_SITE_NAME', get_bloginfo('name')); /* <?php echo PW_SITE_NAME; ?> */
define('HB_SITE_DESCRIPTION', get_bloginfo('description')); /* <?php echo PW_SITE_DESCRIPTION; ?> */

/*******************************************/
// DEFINE AÇÕES
/*******************************************/
function custom_setup()
{
    //Remove barra de edição do site quando está logado
    add_filter('show_admin_bar', '__return_false');
    //Determina o tamanho do resumo, através de uma função
    add_filter('excerpt_length', 'custom_excerpt_length', 999);
    //Desabilita acesso via arquivo xmlrpc
    add_filter('xmlrpc_enabled', 'return false');
    //Remove parágrafo automático inserido pelo wp
    add_filter('wpcf7_autop_or_not', '__return_false');
    //Habilita uso de imagem destacada
    add_theme_support('post-thumbnails');
    //Remove script que transforma símbolo em emoji
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    //Remove css que transforma símbolo em emoji
    remove_action('wp_print_styles', 'print_emoji_styles');
    //Remove meta link do xml do cabeçalho
    remove_action('wp_head', 'rsd_link');
    //Remove a versão do wp do cabeçalho
    remove_action('wp_head', 'wp_generator');
    //Inicia as configurações personalizadas
    add_action('init', 'mytheme_setup');
    //Inicia os tipos de posts customizados
    add_action('init', 'custom_posts_meutudo');
    //Altera o footer nativo do admin
    add_filter('admin_footer_text', 'change_footer_admin');
}

/*******************************************/
// ATIVA EDIÇÃO DE LOGOTIPO EM APARÊNCIAS
/*******************************************/
function mytheme_setup()
{
    add_image_size('mytheme-logo', 600, 218);
    add_theme_support('custom-logo', array(
        'size' => 'mytheme-logo',
    ));
    add_filter('get_custom_logo', 'change_logo_class');

    add_image_size('mytheme-favicon', 128, 128);
    add_theme_support('custom-favicon', array(
        'size' => 'mytheme-logo',
    ));
}

function change_logo_class($html)
{
    $html = str_replace('custom-logo-link', 'navbar-brand logo', $html);

    return $html;
}

/*******************************************/
// HABILITA MENUS E SIDEBARS
/*******************************************/
register_nav_menu('menu_header', 'Menu Principal');
register_sidebar(array(
    'name' => __('Rodapé Um', 'meutudo'),
    'id' => 'footer-1',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => __('Rodapé Dois', 'meutudo'),
    'id' => 'footer-2',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => __('Rodapé Três', 'meutudo'),
    'id' => 'footer-3',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
));

/*******************************************/
// CLASSE MENU BOOTSTRAP WORDPRESS
/*******************************************/
function register_navwalker()
{
    require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

/*******************************************/
// DEFINE O NÚMERO MÁXIMO DE PALAVRAS DO RESUMO
/*******************************************/
function custom_excerpt_length($length)
{
    return 20;
}

/*******************************************/
// ACF - CRIA UMA PÁGINA DE OPÇÕES NO TEMA
/*******************************************/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Configurações Website',
        'menu_title' => 'MeuTudo',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'position' => 3
    ));
}

/*******************************************/
// ALTERA O RODAPÉ DO ADMIN
/*******************************************/
function change_footer_admin()
{
    echo '<span id="footer-thankyou">Desenvolvido para <a href="https://www.meutudo.com.br/" target="_blank">MeuTudo</a></span>';
}

/*******************************************/
// CRIA POST TYPES DO TEMA
/*******************************************/
function custom_posts_meutudo()
{

    $atuacao = array(
        'public' => false,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'thumbnail', 'excerpt'),
        'labels' => array(
            'name' => 'Serviços',
            'singular_name' => 'Serviço'
        ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true
    );
    register_post_type('servico', $atuacao);
}