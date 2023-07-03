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
    $tbl_name = $wpdb->prefix . 'formdata';

    if (isset($_POST['submitbtn'])) {

        //Storing form data into varible
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $empid = isset($_POST['empid']) ? $_POST['empid'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        //Form data array
        $form_data = array(
            'name' => $name,
            'empid' => $empid,
            'email' => $email,
        );

        $form_data = apply_filters('before_insert_phone_data', $form_data, $_POST);

        /** INSERT QUERY **/
        $wpdb->insert($tbl_name, $form_data);
        echo "<script> alert($wpdb->insert_id)</script>";

        // USING PREPARE
        // $wpdb->query(
        //     $wpdb->prepare("INSERT INTO $wpdb -> formdata ('name', 'empid', 'email', 'phone') VALUES (%s, %s, %s, %s)", $form_data),
        // );
    }

    /** DELETE QUERY **/
    // $wpdb->delete($tbl_name, ['id' => 2], ['%d']);

    /** UPDATE QUERY **/
    if (isset($_POST['updtbtn'])) {

        $updt_data = array(
            'name' => isset($_POST['name']) ? $_POST['name'] : '',
            'empid' => isset($_POST['empid']) ? $_POST['empid'] : '',
            'email' => isset($_POST['email']) ? $_POST['email'] : '',
            'phone' => isset($_POST['phone']) ? $_POST['phone'] : ''
        );

        $where = array(
            'id' => isset($_POST['id']) ? $_POST['id'] : '',
        );

        //--REFERENCE SYNTAX--//
        // $wpdb -> update($table, $data, $where, $format = null, $where_format = null);
        $wpdb->update($tbl_name, $updt_data, $where, $format = null, $where_format = null);
        echo "<script> alert('id' $wpdb->insert_id 'is Updated.')</script>";

    }
}
add_action('init', 'save_form_data');