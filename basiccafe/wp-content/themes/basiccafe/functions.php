<?php
//Temel JS vs CSS ekleme Başlangıç
function tema_setup() {
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
register_nav_menu( 'primary', __( 'Ana Menü', 'tema' ) );
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 604, 270, true );
add_filter( 'use_default_gallery_style', '__return_false' ); 
}
add_action( 'after_setup_theme', 'tema_setup' );

function tema_scriptler_stiller() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array() );
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array() ); 	
wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl-carousel.css', array() ); 	
wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array() ); 
wp_enqueue_style( 'tema-style', get_stylesheet_uri(), array() );
	
wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl-carousel.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'accordions', get_template_directory_uri() . '/assets/js/accordions.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'imgfix', get_template_directory_uri() . '/assets/js/imgfix.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '', true );
	
add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css' ) );
}
add_action( 'wp_enqueue_scripts', 'tema_scriptler_stiller' );

//Classic Editor
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//SON

/*ACF*/
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/assets/acf/';
    return $path;
    
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 
    $dir = get_stylesheet_directory_uri() . '/assets/acf/';
    return $dir;
    
}
include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Site Ayarları',
		'menu_title'	=> 'Site Ayarları',
		'menu_slug' 	=> 'site-ayarlari',
		'capability'	=> 'publish_posts',
		'redirect'		=> false,
		'update_button'		=> __('Güncelle', 'acf'),
		'updated_message'	=> __("Ayarlar Güncellendi", 'acf'),
	));
}

/*ACF SON*/
