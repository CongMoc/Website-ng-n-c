<?php 
/** 
 * funciton WebsiteOngNuoc
 * 
 * @package WebsiteOngNuoc
 * 
 */

function websiteOngNuoc_register_styles() {
    wp_enqueue_style('websiteOngNuoc-header', get_template_directory_uri() . "/assets/css/header.css", array(), '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-styles', get_template_directory_uri() . "/style.css", array(), '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-box-icon', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4', 'all');
    wp_enqueue_style('websiteOngNuoc-footer', get_template_directory_uri() . "/assets/css/footer.css", array(), '1.0', 'all' );
    wp_enqueue_style('websiteOngNuoc-home', get_template_directory_uri() . "/assets/css/home-page.css", array(), '1.0', 'all' );
} 
add_action('wp_enqueue_scripts', 'websiteOngNuoc_register_styles');

function websiteOngNuoc_register_scripts() {

    wp_enqueue_script('websiteOngNuoc-slideshow',get_template_directory_uri() . "/assets/js/slideshow.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'websiteOngNuoc_register_scripts');

function remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'remove_jquery_migrate');


function websiteOngNuoc_theme_support() {
    //Add dynamic title tag support 
    add_theme_support('custom-logo');   
    add_theme_support('WebsiteOngNuoc');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'websiteOngNuoc_theme_support');

function websiteOngNuoc_menus() {
    $locations = array(
        'header' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($locations);
}

add_action('init', 'websiteOngNuoc_menus');

if (!function_exists('get_asset_image_url')) {
    function get_asset_image_url($image_name) {
        return get_template_directory_uri() . '/assets/images/' . $image_name;
    }
}
