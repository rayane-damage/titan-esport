<?php
//thumbnail support
add_theme_support( 'post-thumbnails' );

//menu support
function register_my_menu() {
  register_nav_menu('legal_menu',__( 'legal' ));
}
add_action( 'init', 'register_my_menu' );