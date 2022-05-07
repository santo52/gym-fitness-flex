<?php 

function gymfitnessflex_menus() {
    register_nav_menus(array(
        'gymfitnessflex_main_menu' => __( 'Main Menu', 'gymfitnessflex' )
    ));
}

add_action( 'init', 'gymfitnessflex_menus' );