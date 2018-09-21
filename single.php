<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
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


$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;
$context['template'] = $post->post_type;
$context['postType'] = $post->post_type;

require_once get_theme_file_path() . '/lib/wp-timber/timber--comment-form.php';

if ( post_password_required( $post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig' ), $context );
}