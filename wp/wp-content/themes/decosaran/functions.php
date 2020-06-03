<?php


/*
* Enqueues
*/
function enqueue_assets(){
# Enqueues Scripts at footer
  foreach( glob( get_template_directory(). '/assets/js/*.js' ) as $file ) {
    wp_enqueue_script( $file, get_template_directory_uri().'/assets/js/'.basename($file), array(), false, true);
  }
# Enqueues Styles at header
  foreach( glob( get_template_directory(). '/assets/css/*.css' ) as $file ) {
    wp_enqueue_style( $file, get_template_directory_uri().'/assets/css/'.basename($file));
  }
}
add_action('wp_enqueue_scripts', 'enqueue_assets');
# Enqueues Image Folder
define('F_IMG', get_template_directory_uri().'/assets/img');
# Enqueues Icon Folder
define('F_ICO', get_template_directory_uri().'/assets/ico');
