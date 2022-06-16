<?php
add_action( 'wp_enqueue_scripts', 'raytheme_enqueue_style' );
function raytheme_enqueue_style() {
	wp_enqueue_style( 'my-theme', 'style.css', false );
}
