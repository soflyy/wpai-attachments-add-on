<?php
/*
Plugin Name: WP All Import - Import File Attachments
Plugin URI: http://www.wpallimport.com/  
Description: A simple add-on for importing attachments with meta data.
Version: 1.0
Author: Soflyy
*/

include "rapid-addon.php";

$wpai_ia_addon = new RapidAddon( 'Import Attachments', 'wpai_import_attachments' );
$wpai_ia_addon->import_files( 'wpaiia_import_attachments_func', 'Attachments' );
$wpai_ia_addon->set_import_function( 'wpaiia_import_attachments' );
$wpai_ia_addon->run();

function wpaiia_import_attachments( $post_id, $data, $import_options, $article ) {
    // Nothing needs to be done.
    return;
}

function wpaiia_import_attachments_func( $post_id, $data, $import_options ) {
    // Nothing extra is needed.
    return;
}

function wpaiia_addon_style_load($hook) {
    wp_register_style( 'wpaiia-addon-stylesheet', plugins_url( 'admin/css/wpaiiacss.css', __FILE__ ), false, '1.0.0' );
    wp_enqueue_style( 'wpaiia-addon-stylesheet' );
}
add_action( 'admin_enqueue_scripts', 'wpaiia_addon_style_load' );