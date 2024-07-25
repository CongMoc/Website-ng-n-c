<?php


function websiteOngNuoc_theme_support() {
    //Add dynamic title tag support 
    add_theme_support('custom-logo');   
    add_theme_support('WebsiteOngNuoc');
    add_theme_support('post-thumbnails');    
}

add_action('after_setup_theme', 'websiteOngNuoc_theme_support');

function websiteOngNuoc_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($locations);
}

add_action('init', 'websiteOngNuoc_menus');


function websiteOngNuoc_register_styles() {

    $version = wp_get_theme()->get('Version');    
    wp_enqueue_style('websiteOngNuoc-style', get_template_directory_uri() . "/style.css", array('websiteOngNuoc-bootstrap'), $version, 'all');
    wp_enqueue_style('websiteOngNuoc-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('websiteOngNuoc-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'websiteOngNuoc_register_styles');

function websiteOngNuoc_register_scripts() {
    
    wp_enqueue_script('websiteOngNuoc-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('websiteOngNuoc-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('websiteOngNuoc-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('websiteOngNuoc-jquery',get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'websiteOngNuoc_register_scripts');

function websiteOngNuoc_widget_areas() {
 
    register_sidebar(
        array(
            'before_title'  => '',
            'after-title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title'  => '',
            'after-title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'websiteOngNuoc_widget_areas');

?>