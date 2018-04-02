<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'parent-style-2', get_template_directory_uri().'/styles/water.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' );
    wp_enqueue_style( 'fontawesome', get_theme_file_uri('/css/font-awesome.min.css') );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' );
    
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/js/jquery.waypoints.min.js'), true );
    wp_enqueue_script( 'mainJs', get_theme_file_uri('/js/main.js'), true );
    wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', true );
    wp_enqueue_script( 'sliderJs', get_theme_file_uri('/js/slider.min.js'), true );
    
}

function consultant_prefix_setup() {
	add_theme_support( 'custom-logo' ); // LOGO
}
add_action( 'after_setup_theme', 'consultant_prefix_setup' );

// POST THUMBNAILS, IT'S SIZES AND CROPPING POSITION
function consultant_setup_theme() {
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slide-size', 1400, 380, array( 'center', 'center') );
}
add_action( 'after_setup_theme', 'consultant_setup_theme' );


// CUSTOM POST TYPES
function consultant_post_type() {
    // slider
    register_post_type( 'slider', array(
        'menu_position' => 3,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'public'        => true,
        'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add New Slide',
			'edit_item' => 'Edit Slide',
			'all_items' => 'All Slides',
			'singular_name' => 'Slide'
		),
		'menu_icon' => 'dashicons-slides',
    ) );
    
}
add_action( 'init', 'consultant_post_type' );


// About Us -Footer
function consultant_aboutus_footer( $aboutusfooter ){
    $aboutusfooter  ->  add_section( 'footer_section', array(
        'title'     =>  'About Us -Footer',
        'priority'  =>  10
    ) );
    
    $aboutusfooter  ->  add_setting( 'about_us_text', array(
        'default'   => 'Please write something about the company.',
        'transport' =>  'refresh'
    ));
    
    $aboutusfooter  ->  add_control( 'about_us_text', array(
        'section'   =>  'footer_section',
        'label'     =>  'About Us',
        'type'      =>  'textarea'
    ) );
}
add_action( 'customize_register', 'consultant_aboutus_footer' );


?>










