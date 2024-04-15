<?php


add_action( 'wp_enqueue_scripts', 'ac_enqueue_styles' );
function ac_enqueue_styles() {
    //enqeue the parent theme files
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_print_styles', 'ac_dequeue_styles' );
function ac_dequeue_styles() {
    //deqeue the current theme files
    wp_deregister_style('twentythirteen-style');
    wp_dequeue_style( 'twentythirteen-style' );
    wp_deregister_style('twentythirteen-ie');
    wp_dequeue_style( 'twentythirteen-ie' );
}

//function ac_inspect_scripts() {
//    global $wp_styles;
//    echo '<script id="ac_inspect_scripts">';
//    foreach( $wp_styles->queue as $handle ) :
//        echo 'console.log("' . $handle . '");';
//    endforeach;
//    echo '</script>';
//}
//add_action( 'wp_print_scripts', 'ac_inspect_scripts' );
//
//

function conditionally_load_plugin_js_css()
{
    if (is_front_page())
    { # Only load CSS and JS on needed Pages
        wp_dequeue_script('contact-form-7'); # Restrict scripts.
        wp_dequeue_script('google-recaptcha');
        wp_dequeue_style('contact-form-7'); # Restrict css.
    }
} add_action( 'wp_enqueue_scripts', 'conditionally_load_plugin_js_css' );


//Love, love, love, love all you functions
require_once get_theme_file_path() . '/lib/functions--ac-sidebars.php';
require_once get_theme_file_path() . '/lib/functions--ac-menus.php';
require_once get_theme_file_path() . '/lib/functions--ac-settings.php';

require_once get_theme_file_path() . '/lib/functions--timber.php';
require_once get_theme_file_path() . '/lib/functions--theme-setup.php';

require_once get_theme_file_path() . '/lib/functions--ac-shortcode.php';
require_once get_theme_file_path() . '/lib/functions--widget-areas.php';
require_once get_theme_file_path() . '/lib/functions--widgets.php';


require_once get_theme_file_path() . '/lib/functions--acf.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-options.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-video-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-page-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-service-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-page-content.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-media-content.php';

require_once get_theme_file_path() . '/lib/functions--template-tags.php';
require_once get_theme_file_path() . '/lib/functions--ac-menu-filters.php';
require_once get_theme_file_path() . '/lib/functions--cpt.php';

require_once get_theme_file_path() . '/lib/admin/functions--admin-clean.php';
require_once get_theme_file_path() . '/lib/admin/functions--admin-widgets.php';
require_once get_theme_file_path() . '/lib/functions--walkers.php';

add_theme_support( 'post-thumbnails',array('post'));

/*
 * Add .twig files to the theme editor
 */

function add_custom_editor_file_types( $types ) {
    $types[] = 'twig';
    return $types;
}
add_filter( 'wp_theme_editor_filetypes', 'add_custom_editor_file_types' );

add_filter('wpcf7_autop_or_not', '__return_false');


add_action( 'wp_footer', 'act_add_footer_styles' );
function act_add_footer_styles() {
    wp_register_style('ac_cmt_global', get_stylesheet_directory_uri() . '/assets/css/ac-cmt.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/ac-cmt.css') );
    wp_enqueue_style('ac_cmt_global');
}
