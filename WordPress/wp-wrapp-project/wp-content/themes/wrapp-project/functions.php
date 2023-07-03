<?php
function add_css()
{

    // ----------------------------- //
    //--------------CSS--------------//
    // ----------------------------- //

    // Bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    //Local CSS
    wp_register_style('maincss', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('maincss');

    // slick
    wp_register_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick');

    wp_register_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick-theme');

    // Fancybox
    wp_register_style('fancybox', get_template_directory_uri() . '/css/fancybox.css');
    wp_enqueue_style('fancybox');

    wp_register_style('fancybox-jquery', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('fancybox-jquery');

    // Animate css
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('animate');

    wp_register_style('animate-compat', get_template_directory_uri() . '/css/animate.compat.css');
    wp_enqueue_style('animate-compat');


    // ---------------------------- //
    //--------------JS--------------//
    // ---------------------------- //

    // jquery
    wp_register_script('jquery-script', get_template_directory_uri() . '/js/jquery-3.6.4.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-script');

    wp_register_script('local-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    wp_enqueue_script('local-script');


    // JS
    wp_register_script('slick-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('slick-script');

    wp_register_script('fancybox-script', get_template_directory_uri() . '/js/fancybox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('fancybox-script');

    // Bootstrap
    wp_register_script('popper-script', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('popper-script');

    wp_register_script('dist-script', get_template_directory_uri() . '/js/dist_js_bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('dist-script');
}

add_action('wp_enqueue_scripts', 'add_css');


//== ADDING DYNAMIC LOGO ==//
function menu_logo()
{
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
add_action('after_setup_theme', 'menu_logo');


//== ADDING SVG UPLOAD SUPPORT ==//
function svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'svg_upload');


//== ADDING DYNAMIC NAVBAR ==//
function menu_setup()
{
    add_theme_support('menus');

    register_nav_menus(
        array(
            'header_menu' => __('Primary Menu', 'wp-wrapp-project')
        )
    );
    add_theme_support("post-thumbnails");
}
add_action('after_setup_theme', 'menu_setup');


//== ADDING DYNAMIC FOOTER ==//
function footer_setup()
{
    register_sidebar(
        array(
            'name' => __('Footer-Categories', 'wp-wrapp-project'),
            'id' => 'footer-categories',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Product', 'wp-wrapp-project'),
            'id' => 'footer-product',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Solutions', 'wp-wrapp-project'),
            'id' => 'footer-solutions',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Resources', 'wp-wrapp-project'),
            'id' => 'footer-resources',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Support', 'wp-wrapp-project'),
            'id' => 'footer-support',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Company', 'wp-wrapp-project'),
            'id' => 'footer-company',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );
}
add_action('widgets_init', 'footer_setup');


//== CUSTOM POST TYPE ==//
function custom_field_post()
{
    // Set UI labels for Custom Post Type
    $labels_cfp = array(
        'name' => _x('Story', 'Post Type General Name', 'wp-wrapp-project'),
        'singular_name' => _x('Story', 'Post Type Singular Name', 'wp-wrapp-project'),
        'menu_name' => __('Story', 'wp-wrapp-project'),
        'parent_item_colon' => __('Parent Story', 'wp-wrapp-project'),
        'all_items' => __('All Story', 'wp-wrapp-project'),
        'view_item' => __('View Story', 'wp-wrapp-project'),
        'add_new_item' => __('Add New Story', 'wp-wrapp-project'),
        'add_new' => __('Add New', 'wp-wrapp-project'),
        'edit_item' => __('Edit Story', 'wp-wrapp-project'),
        'update_item' => __('Update Story', 'wp-wrapp-project'),
        'search_items' => __('Search Story', 'wp-wrapp-project'),
        'not_found' => __('Not Found', 'wp-wrapp-project'),
        'not_found_in_trash' => __('Not found in Trash', 'wp-wrapp-project')
    );

    // Set other options for Custom Post Type
    $args_cfp = array(
        'label' => __('Story', 'wp-wrapp-project'),
        'description' => __('Story and reviews', 'wp-wrapp-project'),
        'labels' => $labels_cfp,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'story'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-analytics',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );
    register_post_type('story', $args_cfp);

    $labels_taxonomy_cat = array(
        'name' => _x('Category', 'taxonomy general name', 'wp-wrapp-project'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'wp-wrapp-project'),
        'search_items' => __('Search Category', 'wp-wrapp-project'),
        'popular_items' => __('Popular Category', 'wp-wrapp-project'),
        'all_items' => __('All Category', 'wp-wrapp-project'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Category', 'wp-wrapp-project'),
        'update_item' => __('Update Category', 'wp-wrapp-project'),
        'add_new_item' => __('Add New Category', 'wp-wrapp-project'),
        'new_item_name' => __('New Category Name', 'wp-wrapp-project'),
        'separate_items_with_commas' => __('Separate Category with commas', 'wp-wrapp-project'),
        'add_or_remove_items' => __('Add or remove Category', 'wp-wrapp-project'),
        'choose_from_most_used' => __('Choose from the most used Category', 'wp-wrapp-project'),
        'not_found' => __('No Category found.', 'wp-wrapp-project'),
        'menu_name' => __('Category', 'wp-wrapp-project')
    );

    $args_taxonomy_cat = array(
        'hierarchical' => true,
        'labels' => $labels_taxonomy_cat,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'story-category')
    );
    register_taxonomy('story-category', 'story', $args_taxonomy_cat);

}
add_action('init', 'custom_field_post', 0);

?>