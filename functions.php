<?php

// brancher le style du thème enfant
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Custom Function to Include
// liens css pour les icones de la carte météo
function my_style_link() {
    echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.css" rel="stylesheet" crossorigin="anonymous">' . '\n';
    echo '<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css">' . '\n';

}
add_action( 'wp_head', 'my_style_link' );

/* Masquer les erreurs de connexion à l'administration */
add_filter('login_errors', 'wpm_hide_errors');
function wpm_hide_errors() {
	// On retourne notre propre phrase d'erreur
	return "L'identifiant ou le mot de passe est incorrect";
}