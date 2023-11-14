<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Ajoute la prise en charge des menus
add_theme_support('menus');
register_nav_menu('header', 'En tête du menu');

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// Enqueue parent theme styles
function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

// Enqueue custom theme styles
function ajouter_css_theme_custom() {
    wp_enqueue_style('theme-custom', get_stylesheet_directory_uri() . '/theme.css', array('parent-style'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'ajouter_css_theme_custom');

function ajouter_styles_custom() {
    wp_enqueue_style('styles-custom', get_stylesheet_directory_uri() . '/styles-custom.css', array('parent-style'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'ajouter_styles_custom');


// Personnalisation du menu de navigation
function personnaliser_menu_navigation($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Création du lien "Admin"
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
        
        // Trouve la position de l'élément "Nous rencontrer" dans le menu
        $position_nous_rencontrer = strpos($items, 'Nous rencontrer');
        
        // Vérifie si "Nous rencontrer" a été trouvé dans le menu
    if ($position_nous_rencontrer !== false) {
        // Insére le lien "Admin" après l'élément "Nous rencontrer"
            $items = substr_replace($items, $admin_link, $position_nous_rencontrer + strlen('Nous rencontrer'), 0);
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'personnaliser_menu_navigation', 10, 2);
