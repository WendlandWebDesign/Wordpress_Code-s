<?php


function auto_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','auto_theme_support');


//css Dateien laden
function lade_stylesheet() {

}
add_action('wp_enqueue_scripts', 'lade_stylesheet');


//js Dateien laden
function lade_javascript() {

}

add_action('wp_enqueue_scripts', 'lade_javascript',);


// Allow SVG usage in WordPress
function allow_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'allow_svg');

?>