<?php

//Enqueue Theme
function dz_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.1', 'all');
	//wp_enqueue_style( 'bscss', get_template_directory_uri() . '/css/bootstrap-grid.css', array(), '1.1', 'all');
	wp_enqueue_style( 'bebas-font', 'https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet', array(), '1.1', 'all');
	//wp_enqueue_style( 'saira', 'https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet', array(), '1.1', 'all');
	wp_enqueue_style( 'acfont', get_template_directory_uri() . '/css/ChangelingNeoW01Reg.ttf', array(), '1.1', 'all');
	wp_enqueue_style( 'slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.1', 'all');
	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/css/mystyle.css', array(), '1.1', 'all');
	wp_enqueue_style( 'respstyle', get_template_directory_uri() . '/css/responsive.css', array(), '1.1', 'all');
	//wp_enqueue_script( 'jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.x-git.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	//wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/c1e43ccdb9.js');
    wp_enqueue_script( 'txtfill', get_template_directory_uri() . '/js/fitty.min.js');

  
}
add_action( 'wp_enqueue_scripts', 'dz_theme_scripts' );

//Register Navigation
function dz_action_menu() {
	register_nav_menu('dz-action-main-menu',__( 'Header Menu' ));
	register_nav_menu('dz-action-fmenu',__( 'Footer Menu' ));
	register_nav_menu('dz-action-shopify-front-menu',__( 'Shopify Front Menu' ));
	register_nav_menu('dz-action-shopify-main-menu',__( 'Shopify Main Menu' ));
	register_nav_menu('dz-action-mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'dz_action_menu' );

//Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Action Space General Settings',
		'menu_title'	=> 'Action Space Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sports Categories | Banner Display',
		'menu_title'	=> 'AS Sports Categories',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Advertisements',
		'menu_title'	=> 'Advertisements',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function wpse_setup_theme() {
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'medium-thumb', 500, 500, true );
}

// Our custom post type function
function custom_posttype() {
 
    register_post_type( 'events',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pt-events'),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'category' ),
 
        )
    );
    
    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pt-news'),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),
 			'taxonomies'          => array( 'category' ),
 
        )
    );
    register_post_type( 'profiles',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Profiles' ),
                'singular_name' => __( 'Profile' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pt-profiles'),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),
 			'taxonomies'          => array( 'category' ),
        )
    );
    register_post_type( 'magazines',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Magazines' ),
                'singular_name' => __( 'Magazine' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pt-magazines'),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'category' ),
        )
    );
    register_post_type( 'shopify',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Shopify Custom Pages' ),
                'singular_name' => __( 'Shopify Custom Page' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'shop-pages'),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail',  'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'category' ),
        )
    );
    
}


// Hooking up our function to theme setup
add_action( 'init', 'custom_posttype' );
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'remove_admin_bar');


?>