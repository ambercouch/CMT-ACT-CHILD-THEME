<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.2
 */

add_action( 'wp_print_styles', 'ac_enqeue_styles' );
function ac_enqeue_styles() {
    //deqeue the current theme files
    //wp_register_style('ac-style', get_stylesheet_directory() . '/style.css');
    //wp_enqueue_style( 'ac-style' );
    wp_deregister_style('parent-style');
    wp_dequeue_style( 'parent-style' );
}


require_once get_theme_file_path() . '/lib/wp-timber/timber--nav-menu.php';

$templates = array('media.twig', 'home.twig' );

$context = Timber::context();

$context['title'] = 'Archive';
if ( is_day() ) {
    $context['title'] = 'Archive: ' . get_the_date( 'D M Y' );
} elseif ( is_month() ) {
    $context['title'] = 'Archive: ' . get_the_date( 'M Y' );
} elseif ( is_year() ) {
    $context['title'] = 'Archive: ' . get_the_date( 'Y' );
} elseif ( is_tag() ) {
    $context['title'] = single_tag_title( '', false );
} elseif ( is_category() ) {
    $context['title'] = single_cat_title( '', false );
    array_unshift( $templates, 'archive-' . get_query_var( 'cat' ) . '.twig' );
} elseif ( is_post_type_archive() ) {
    $context['title'] = post_type_archive_title( '', false );
    array_unshift( $templates, 'archive-' . get_post_type() . '.twig' );
}

$post = new TimberPost();
$context['post'] = $post;

$context['posts'] = new Timber\PostQuery();

Timber::render( $templates, $context );
