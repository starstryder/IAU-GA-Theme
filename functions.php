<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 8/10/18
 * Time: 8:42 PM
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'section-menu' => __( 'Section Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


add_image_size( 'Image-Main', 300, 300, true );
add_image_Size( 'Bio', 150, 150, true );

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'image-main' => __( 'Image-Main' ),
        'bio' => __( 'Bio' ),
    ) );
}
add_theme_support( 'post-thumbnails' );