<?php

function add_css()
{

    //CSS
    wp_register_style('iconic', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
    wp_enqueue_style('iconic');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('animate');

    wp_register_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl');

    wp_register_style('owl-default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('owl-default');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('magnific');

    wp_register_style('aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('aos');

    wp_register_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style('ionicons');

    wp_register_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('flaticon');

    wp_register_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('icomoon');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style');

    //JS

    wp_enqueue_script('jquery-min-custom', "https://code.jquery.com/jquery-3.7.0.min.js");

    wp_register_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-min');

    wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-migrate');

    wp_register_script('js-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('js-popper');

    wp_register_script('js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('js-bootstrap');

    wp_register_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-easing');

    wp_register_script('jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-waypoints');

    wp_register_script('jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-stellar');

    wp_register_script('jquery-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-owl');

    wp_register_script('jquery-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-magnific');

    wp_register_script('jquery-aos', get_template_directory_uri() . '/js/aos.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-aos');

    wp_register_script('jquery-animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-animateNumber');

    wp_register_script('jquery-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-scrollax');

    wp_register_script('js-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('js-main');
}
add_action('wp_enqueue_scripts', 'add_css');


//== MENU ==//
function menu_setup()
{
    add_theme_support('menus');

    register_nav_menus(
        array(
            'header_menu' => __('Primary Menu', 'textdomain')
        )
    );
}
add_action('after_setup_theme', 'menu_setup');


//== a href class ==//
function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');


//== FOOTER ==//
function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Footer-About', 'textdomain'),
            'id' => 'footer-about',
            'description' => __('A passionate Full stack web developer and a curious learner from India &hearts;.', 'textdomain'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h2 class="ftco-heading-2">',
            'after_title' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Links', 'textdomain'),
            'id' => 'footer-links',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Interests', 'textdomain'),
            'id' => 'footer-interests',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Have Question', 'textdomain'),
            'id' => 'footer-have-question',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Copyright', 'textdomain'),
            'id' => 'footer-copyright',
            'description' => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        )
    );
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');
?>