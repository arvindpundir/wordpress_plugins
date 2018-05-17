<?php
/**
 * Proper way to enqueue scripts and styles.
 */
function ffl_style_scripts() {
    wp_enqueue_style( 'main-css-file', plugins_url().'/facebook-footer-link/css/style.css' );
    wp_enqueue_script( 'main-js-file', plugins_url() . '/facebook-footer-link/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'ffl_style_scripts' );