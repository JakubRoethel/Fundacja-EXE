<?php

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

add_theme_support('custom-logo');

/**
 * Set WooCommerce image dimensions upon theme activation
 */
// Remove each style one by one
// add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
// function jk_dequeue_styles( $enqueue_styles ) {
// 	// unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
// 	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
// 	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
// 	return $enqueue_styles;
// }


/* Let's add Apple logo for 'apple' brand term */
add_filter('wpc_filters_label_term_html', 'wpc_term_brand_logoo', 10, 4);
function wpc_term_brand_logoo($html, $link_attributes, $term, $filter)
{
    if ($filter['ID'] == 317 || $filter['ID'] == 777 ) {

        if ($term->term_id === 45) {
            //id = 45 is bubbles
            $img  = '<img src="' . get_stylesheet_directory_uri() . '/assets/img/bubbles.svg" alt="' . $term->name . '" width="15" height="15" />';
            $html = '<a ' . $link_attributes . '>' . $img . ' ' . $term->name . '</a>';
        } else if ($term->term_id === 46) {
            //water
            $img  = '<img src="' . get_stylesheet_directory_uri() . '/assets/img/water.svg" alt="' . $term->name . '" width="15" height="15" />';
            $html = '<a ' . $link_attributes . '>' . $img . ' ' . $term->name . '</a>';
        } else {
            $img  = '<img src="' . get_stylesheet_directory_uri() . '/assets/img/' . $term->slug . '.svg" alt="' . $term->name . '" width="15" height="15" />';
            $html = '<a ' . $link_attributes . '>' . $img . ' ' . $term->name . '</a>';
        }
    }
    return $html;
}

require_once('lib/acf-config.php');



