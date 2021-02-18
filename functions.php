<?php

function load_stylesheets()
{  

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function include_bootstrap(){

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'include_bootstrap');

function load_javascript()
{

    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true );
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');

//Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Register some menus
register_nav_menus(
    array(

        'top-menu' => 'Top Menu',
    )
    );

//Add image sizes
add_image_size('post_image', 1100, 550, false);


//Add a widget
register_sidebar(

    array(

        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',

    )
    );


register_sidebar(

    array(
    
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
    
        )
        );

        //Register navwalker

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

