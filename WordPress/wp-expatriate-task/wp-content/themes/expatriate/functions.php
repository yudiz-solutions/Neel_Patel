<?php
function add_css_js()
{
    //********CSS********//

    // Font Awsome
    wp_register_style('fontawsome', get_template_directory_uri() . './css/fontawesome.css');
    wp_enqueue_style('fontawsome');

    // Bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . './css/bootstrap.css');
    wp_enqueue_style('bootstrap');

    // Slick
    wp_register_style('slick', get_template_directory_uri() . './css/slick.css');
    wp_enqueue_style('slick');

    // Slick theme
    wp_register_style('slick-theme', get_template_directory_uri() . './css/slick-theme.css');
    wp_enqueue_style('slick-theme');

    // Style
    wp_register_style('style', get_template_directory_uri() . './style.css');
    wp_enqueue_style('style');

    //********JS********//

    // jQuery
    wp_register_script('jquery', get_template_directory_uri() . './js/lib/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');

    // Slick
    wp_register_script('slick', get_template_directory_uri() . './js/slick.js', array(), '1.0.0', true);
    wp_enqueue_script('slick');

    // Bootstrap
    wp_register_script('bootstrap', get_template_directory_uri() . './js/bootstrap.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap');

    // Modernizr
    wp_register_script('modernizr', get_template_directory_uri() . './js/modernizr.js', array(), '1.0.0', true);
    wp_enqueue_script('modernizr');

    // Custom JS
    wp_register_script('customJS', get_template_directory_uri() . './customjs.js', array(), '1.0.0', true);
    wp_enqueue_script('customJS');

    // Sticky-Kit
    wp_register_script('sticky-kit', get_template_directory_uri() . './js/sticky-kit.js', array(), '1.0.0', true);
    wp_enqueue_script('sticky-kit');
}
add_action('wp_enqueue_scripts', 'add_css_js');

//== ADDING DYNAMIC NAVBAR ==//
function menu_setup()
{
    add_theme_support('menus');

    register_nav_menus(
        array(
            'header_menu' => __('Navigation Menu', 'expatriate')
        )
    );

    add_theme_support("post-thumbnails");

    /////////// ADD MENU LOGO ///////////

    $logo_width = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height' => $logo_height,
            'width' => $logo_width,
            'flex-width' => true,
            'flex-height' => true,
            'unlink-homepage-logo' => true,
        )
    );
}
add_action('after_setup_theme', 'menu_setup');

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);


//FOR ACTIVE CLASS
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
?>