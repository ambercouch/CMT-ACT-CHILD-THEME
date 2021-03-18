<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$query_object = get_queried_object();
//echo '<pre>';
//print_r($query_object); die();

if(property_exists($query_object, 'slug'))
{
    $tax_query = array(
        array(
            'taxonomy' => 'media_category',
            'field'    => 'slug',
            'terms'    => $query_object->slug
        )
    );
}else{
    $tax_query = false;
}


global $paged;
if (!isset($paged) || !$paged){
    $paged = 1;
}

if ( ! class_exists( 'Timber' ) ) {
    echo 'Timber not activated. Make sure you activate the plugin in <a href="/cms/wp-admin/plugins.php#timber">cms/wp-admin/plugins.php</a>';
    return;
}

add_action( 'wp_print_styles', 'ac_enqeue_styles' );
function ac_enqeue_styles() {
    //deqeue the current theme files
    //wp_register_style('ac-style', get_stylesheet_directory() . '/style.css');
    //wp_enqueue_style( 'ac-style' );
    wp_deregister_style('parent-style');
    wp_dequeue_style( 'parent-style' );
}


require_once get_theme_file_path() . '/lib/wp-timber/timber--nav-menu.php';

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$args = array(
    'post_type' => 'media',
    'posts_per_page' => 10,
    'paged' => $paged,
    'tax_query' => $tax_query
);

$context['posts'] = new Timber\PostQuery($args);
$context['foo'] = 'bar';


$context['bannerImgPage'] = (get_field('banner_image', $post) == '') ?  false : get_field('banner_image', $post);


//ac_dd($post);

$templates = array( 'media.twig' );
//if ( is_home() ) {
//    array_unshift( $templates, 'home.twig' );
//}
Timber::render( $templates, $context );

//require_once get_theme_file_path() . '/lib/wp-timber/timber--nav-menu.php';
