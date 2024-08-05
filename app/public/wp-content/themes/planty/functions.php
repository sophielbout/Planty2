<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */

add_action( 'wp_enqueue_scripts', 'planty_style' );
function planty_style() {
    // Enqueue parent theme style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue child theme style with dependency on parent theme style
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), null );
}

// Function to enqueue custom styles
function enqueue_custom_styles() {
    // Enqueue custom style with dependency on child theme style
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom-styles.css', array( 'child-style', 'elementor-frontend' ), null );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles', 20 );


function add_admin_menu_item($items, $args) {
    // Vérifier si l'utilisateur est connecté et a la capacité requise, et exclure le menu footer
    if (is_user_logged_in() && current_user_can('manage_options')) {
        // Vérifier que ce n'est pas le menu footer en utilisant le nom du menu
        if ($args->menu !== 'menu-footer') {
            $admin_item = '<li class="menu-item menu-item-admin"><a href="' . admin_url() . '">Admin</a></li>';
            
            // Diviser les éléments du menu en un tableau
            $items_array = explode('</li>', $items);

            // Insérer l'élément admin à la deuxième position
            $position = 1; // Position 1 pour que l'élément apparaisse en deuxième position (après le premier élément)
            array_splice($items_array, $position, 0, $admin_item);

            // Rejoindre les éléments du menu en une chaîne
            $items = implode('</li>', $items_array) . '</li>'; // Ajouter la balise de fermeture </li> manquante
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_menu_item', 10, 2);


/**
 * Your code goes below.
 */

