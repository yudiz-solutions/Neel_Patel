<?php
/*
Plugin Name:  My Custom Plugin
Plugin URI:   https://www.google.com
Description:  This is my first custom made plugin to insert data into database.
Version:      1.0
Author:       Neel Patel
Author URI:   https://www.yudiz.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  mycustomplugin
Domain Path:  /languages
*/

//Define Plugin Directory
if (!defined('WPEMS_DIR')) {
    define('WPEMS_DIR', dirname(__FILE__));
}

//Define Plugin URL
if (!defined('WPEMS_URL')) {
    define('WPEMS_URL', plugin_dir_url(__FILE__));
}

// echo WPEMS_DIR;
// echo "<br>";
// echo WPEMS_URL;
// die;

//** REGISTER CUSTOM MENU **//
function register_custom_admin_menu()
{
    add_menu_page(
        __('Title', 'mycustomplugin'),
        'Custom Menu',
        'manage_options',
        'render-form',
        'render_form_callback' //Callback function - Define it also
    );
}
add_action('admin_menu', 'register_custom_admin_menu');

function render_form_callback()
{
    require_once WPEMS_DIR . '/form/form.php'; //form.php will render
}


function save_form_data()
{
    global $wpdb;

    if (isset($_POST['submitbtn'])) {
        $tbl_name = $wpdb->prefix . 'formdata';

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $empid = isset($_POST['empid']) ? $_POST['empid'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        $form_data = array(
            'name' => $name,
            'empid' => $empid,
            'email' => $email,
        );

        $form_data = apply_filters('before_insert_phone_data', $form_data, $_POST);

        /** INSERT QUERY **/
        $wpdb->insert($tbl_name, $form_data);
        echo $wpdb->insert_id;

        /** DELETE QUERY **/
        // $wpdb->delete($tbl_name, ['id' => 2], ['%d']);

        /** UPDATE QUERY **/


    }
}
add_action('init', 'save_form_data');