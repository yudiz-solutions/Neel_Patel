<?php
function add_css_scripts()
{
    //======== CSS ========//
    wp_register_style('slick_css', get_template_directory_uri() . "/css/slick.css");
    wp_enqueue_style('slick_css');

    wp_register_style('slick_theme_css', get_template_directory_uri() . "/css/slick-theme.css");
    wp_enqueue_style('slick_theme_css');

    wp_register_style('all_min_css', get_template_directory_uri() . "/css/css_all.min.css");
    wp_enqueue_style('all_min_css');

    wp_register_style('fancybox_cdn', get_template_directory_uri() . "/css/cdn.jsdelivr.net_npm_@fancyapps_ui@4.0_dist_fancybox.css");
    wp_enqueue_style('fancybox_cdn');

    wp_register_style('animate_cdn', get_template_directory_uri() . "/css/cdnjs.cloudflare.com_ajax_libs_animate.css_4.1.1_animate.min.css");
    wp_enqueue_style('animate_cdn');

    wp_register_style('animate', get_template_directory_uri() . "/css/animate.css");
    wp_enqueue_style('animate');

    wp_register_style('style_main', get_template_directory_uri() . "/style.css");
    wp_enqueue_style('style_main');

    wp_register_style('class', get_template_directory_uri() . "/css/class.css");
    wp_enqueue_style('class');

    //======== JS ========//

    wp_register_script('jquery-script', get_template_directory_uri() . '/js/code.jquery.com_jquery-1.11.0.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-script');

    wp_register_script('migrate-script', get_template_directory_uri() . '/js/code.jquery.com_jquery-migrate-1.2.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('migrate-script');

    wp_register_script('slick-min-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('slick-min-script');

    wp_register_script('slick-script', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);
    wp_enqueue_script('slick-script');

    wp_register_script('fancybox-script', get_template_directory_uri() . '/js/cdn.jsdelivr.net_npm_@fancyapps_ui@4.0_dist_fancybox.umd.js', array(), '1.0.0', true);
    wp_enqueue_script('fancybox-script');

    wp_register_script('fancybox-script', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('fancybox-script');

    wp_register_script('barba-core-script', get_template_directory_uri() . '/js/unpkg.com_@barba_core@2.9.7_dist_barba.umd.js', array(), '1.0.0', true);
    wp_enqueue_script('barba-core-script');

    wp_register_script('gsap-core-script', get_template_directory_uri() . '/js/unpkg.com_gsap@3.12.1_dist_gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('gsap-core-script');

    wp_register_script('local-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
    wp_enqueue_script('local-script');

    wp_register_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts', 'add_css_scripts');

//======================//
//======== MENU ========//
//======================//

function register_menu()
{
    register_nav_menus(
        array(
            'nav_menu' => __('Primary Menu', 'meditative')
        )
    );
}
add_action('after_setup_theme', 'register_menu');


function register_footer()
{
    register_sidebar(
        array(
            'name' => __('Footer-Meditative', 'wp-wrapp-project'),
            'id' => 'footer-meditative',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-PopularLinks', 'wp-wrapp-project'),
            'id' => 'footer-popularlinks',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-QuickLinks', 'wp-wrapp-project'),
            'id' => 'footer-quicklinks',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-HaveQuestion', 'wp-wrapp-project'),
            'id' => 'footer-havequestion',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init', 'register_footer');
?>