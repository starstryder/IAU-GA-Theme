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

add_theme_support( 'post-thumbnails' );