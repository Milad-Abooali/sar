<?php


/*
* Enqueues
*/
function enqueue_assets(){
# Enqueues Scripts
  foreach( glob( get_template_directory(). '/assets/js/*.js' ) as $file ) {
    wp_enqueue_script( $file, get_template_directory_uri().'/assets/js/'.$file);
  }
# Enqueues Styles
  foreach( glob( get_template_directory(). '/assets/css/*.css' ) as $file ) {
    wp_enqueue_style( $file, get_template_directory_uri().'/assets/css/'.$file);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_assets');
# Enqueues IMG Folder
define('F_IMG', get_template_directory().'/assets/img');
