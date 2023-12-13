<?php

require_once('lib/acf-config.php');

function studio_scripts()
{
    wp_enqueue_script('acf-input', get_template_directory_uri() . '/js/acf-input.min.js', array('jquery'), '', true);
    wp_register_style('main', get_stylesheet_directory_uri() . '/dist/main.css', [], 1, 'all');
    wp_enqueue_style('main');
    wp_register_style('custom', get_stylesheet_directory_uri() . '/src/css/custom.css', [], 1, 'all');
    wp_enqueue_style('custom');

    wp_register_script('main', get_stylesheet_directory_uri() . '/dist/bundle.js', ['jquery', 'acf-input'], 1, true);
    wp_enqueue_script('main');

}

add_action('wp_enqueue_scripts', 'studio_scripts');
	
add_theme_support( 'post-thumbnails' );

add_theme_support('custom-logo');
add_theme_support('menus');


// excerpt length 
function my_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

// excerpt "[]" Delete

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// svg upload 
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;

}

add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

// add after text in menu items

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
    

    foreach( $items as &$item ) {
        

        $menu_item_after_text = get_field('menu_item_after_text', $item);

        if( $menu_item_after_text ) {
            
            $item->title .= '<span class="menu-item-after-text">' . $menu_item_after_text . '</span>';
            
        }
        
    }
    
    
    return $items;
    
}


//update checker

require 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/JakubRoethel/Fundacja-EXE.git',
    __FILE__,
    'Fundacja-EXE'
);
//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');





