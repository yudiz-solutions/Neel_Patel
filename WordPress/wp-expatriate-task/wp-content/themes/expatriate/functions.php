<?php
function add_css_js()
{
    //********CSS********//

    // Font Awsome
    wp_register_style('fontawsome', get_template_directory_uri() . '/css/fontawesome.css');
    wp_enqueue_style('fontawsome');

    // Bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');

    // Slick
    wp_register_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick');

    // Slick theme
    wp_register_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick-theme');

    // Style
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    //********JS********//

    // jQuery
    wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');

    // Slick
    wp_register_script('slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);
    wp_enqueue_script('slick');

    // Bootstrap
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap');

    // Modernizr
    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '1.0.0', true);
    wp_enqueue_script('modernizr');

    // Custom JS
    wp_register_script('customJS', get_template_directory_uri() . '/customjs.js', array(), '1.0.0', true);
    wp_enqueue_script('customJS');

    // Sticky-Kit
    wp_register_script('sticky-kit', get_template_directory_uri() . '/js/sticky-kit.js', array(), '1.0.0', true);
    wp_enqueue_script('sticky-kit');

    // Custom-File-Input
    wp_register_script('custom-file-input', get_template_directory_uri() . '/js/custom-file-input.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-file-input');

    // html5shiv.min
    wp_register_script('html5shiv.min', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '1.0.0', true);
    wp_enqueue_script('html5shiv.min');

    // jcf.file
    wp_register_script('jcf.file', get_template_directory_uri() . '/js/jcf.file.js', array(), '1.0.0', true);
    wp_enqueue_script('jcf.file');

    // jcf
    wp_register_script('jcf', get_template_directory_uri() . '/js/jcf.js', array(), '1.0.0', true);
    wp_enqueue_script('jcf');

    // jcf.radio
    wp_register_script('jcf.radio', get_template_directory_uri() . '/js/jcf.radio.js', array(), '1.0.0', true);
    wp_enqueue_script('jcf.radio');

    // jcf.select
    wp_register_script('jcf.select', get_template_directory_uri() . '/js/jcf.select.js', array(), '1.0.0', true);
    wp_enqueue_script('jcf.select');

    // respond.min
    wp_register_script('respond.min', get_template_directory_uri() . '/js/respond.min.js', array(), '1.0.0', true);
    wp_enqueue_script('respond.min');
}
add_action('wp_enqueue_scripts', 'add_css_js');

//---------------------------------------------------------------------------//
//== COMMON ASSESSMENT SECTION ==//
function add_assessment_section()
{
    $assessment_grp = get_field('assessment_grp', 'option');
    ?>
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>
                        <?php echo $assessment_grp['heading']; ?>
                    </h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo $assessment_grp['btn']['url']; ?>"
                        target="<?php echo $assessment_grp['btn']['target']; ?>" class="theme-btn white-btn">
                        <?php echo $assessment_grp['btn']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
}
add_action('insert_assessment_section', 'add_assessment_section');

//---------------------------------------------------------------------------//



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


//== ADDING DYNAMIC NAVBAR ==//
function theme_general_setting()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Register options page.
        $option_page = acf_add_options_page(
            array(
                'page_title' => __('Theme General Settings'),
                'menu_title' => __('Theme Settings'),
                'menu_slug' => 'theme-general-settings',
                'capability' => 'edit_posts',
                'redirect' => false
            )
        );
    }
}
add_action('acf/init', 'theme_general_setting');


//== ADDING DYNAMIC NAVBAR ==//
function footer_setup()
{
    register_sidebar(
        array(
            'name' => __('Footer-Logo', 'expatriate'),
            'id' => 'footer-logo',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Menu', 'expatriate'),
            'id' => 'footer-menu',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer-Copyright', 'expatriate'),
            'id' => 'footer-copyright',
            'description' => '',
            'before_widget' => '<ul>',
            'after_widget' => '</ul>',
            'before_title' => '<li>',
            'after_title' => '</li>'
        )
    );

}
add_action('widgets_init', 'footer_setup');


//FOR ACTIVE CLASS
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

//SVG SUPPORT
function upload_svg($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'upload_svg');

////////////////////////////////////////////

//== CUSTOM POST TYPE ==//
function custom_field_post()
{
    // Set UI labels for Custom Post Type
    $labels_services = array(
        'name' => _x('Services', 'Post Type General Name', 'expatriate'),
        'singular_name' => _x('Services', 'Post Type Singular Name', 'expatriate'),
        'menu_name' => __('Services', 'expatriate'),
        'parent_item_colon' => __('Parent Services', 'expatriate'),
        'all_items' => __('All Services', 'expatriate'),
        'view_item' => __('View Services', 'expatriate'),
        'add_new_item' => __('Add New Services', 'expatriate'),
        'add_new' => __('Add New', 'expatriate'),
        'edit_item' => __('Edit Services', 'expatriate'),
        'update_item' => __('Update Services', 'expatriate'),
        'search_items' => __('Search Services', 'expatriate'),
        'not_found' => __('Not Found', 'expatriate'),
        'not_found_in_trash' => __('Not found in Trash', 'expatriate')
    );

    // Set other options for Custom Post Type
    $args_services = array(
        'label' => __('Services', 'expatriate'),
        'description' => __('Services and reviews', 'expatriate'),
        'labels' => $labels_services,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-tickets',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );
    register_post_type('services', $args_services);

    //TAXONOMY

    $labels_taxonomy_cat = array(
        'name' => _x('Category', 'taxonomy general name', 'expatriate'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'expatriate'),
        'search_items' => __('Search Category', 'expatriate'),
        'popular_items' => __('Popular Category', 'expatriate'),
        'all_items' => __('All Category', 'expatriate'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Category', 'expatriate'),
        'update_item' => __('Update Category', 'expatriate'),
        'add_new_item' => __('Add New Category', 'expatriate'),
        'new_item_name' => __('New Category Name', 'expatriate'),
        'separate_items_with_commas' => __('Separate Category with commas', 'expatriate'),
        'add_or_remove_items' => __('Add or remove Category', 'expatriate'),
        'choose_from_most_used' => __('Choose from the most used Category', 'expatriate'),
        'not_found' => __('No Category found.', 'expatriate'),
        'menu_name' => __('Category', 'expatriate')
    );

    $args_taxonomy_cat = array(
        'hierarchical' => true,
        'labels' => $labels_taxonomy_cat,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'services-category')
    );
    register_taxonomy('services-category', 'services', $args_taxonomy_cat);

    flush_rewrite_rules(); //Refresh the Permalink
}
add_action('init', 'custom_field_post', 0);