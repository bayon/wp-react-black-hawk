<?php
function black_hawk_enqueue_styles() {

    $parent_style = 'parent-style'; //  

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    //
     wp_enqueue_style( 'plm-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );



}
add_action( 'wp_enqueue_scripts', 'black_hawk_enqueue_styles' );

?>