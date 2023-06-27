<?php 

// Remove emoji scripts and styles from head
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles'); 


// Removes the needless global styles
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );


// Removes unnecessary scripts from the head
add_action( 'wp_enqueue_scripts', 'sd_deregister_styles', 20 );
function sd_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );
}

function sd_dequeue_script() {
    wp_dequeue_script('hoverintent-js-js');
}
add_action( 'wp_print_scripts', 'sd_dequeue_script', 100 );

?>