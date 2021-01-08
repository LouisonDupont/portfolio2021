<?php 

function pf_charge_fichier() {

wp_enqueue_style('portfolio', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
wp_enqueue_script('lottie', get_template_directory_uri() . '/js/lottie.js', array(), '1.1',  false);
wp_enqueue_script('animlogo', get_template_directory_uri() . '/js/animlogo.js', array(), '1.1',  false);
wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js', array(), '1.1',  false);
wp_enqueue_script('bghero', get_template_directory_uri() . '/js/bghero.js', array(), '1.1',  false);
wp_enqueue_script('reveal', get_template_directory_uri() . '/js/reveal.js', array(), '1.1',  false);
}

add_action('wp_enqueue_scripts', 'pf_charge_fichier');

// Ajoute les thumbnails 

add_theme_support('post-thumbnails');

// Menu 

register_nav_menus( array(
    'menu_principal' => __('menu_principal'),
));

// Création de la page ACF

if (function_exists('acf_add_options-page')){
    acf_add_options_page();
}

/* Ajouter une taille d'image */
add_image_size('img_projet', 800, 800, false);
add_image_size('img_galerie', 250, 250, false);
add_image_size('img_galerie_single', 1100, 900, false);



?>

