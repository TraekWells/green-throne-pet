<?php

function green_throne_files() {
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"', NULL, '1.0', true );
  wp_enqueue_style('main_styles', get_template_directory_uri() . '/css/styles.css');
  if (strstr($_SERVER['SERVER_NAME'], "green-throne.local")) {
    wp_enqueue_script('green_throne_main_scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('green_throne_vendors', get_theme_file_uri('/bundled-assets/vendors.js'), NULL, '1.0', true);
    wp_enqueue_script('green_throne_main_scripts', get_theme_file_uri('/bundled-assets/scripts.a0704d046ea5758f3305.js'), NULL, '1.0', true);
    wp_enqueue_style('green_throne_main_styles', get_theme_file_uri('/bundled-assets/styles.a0704d046ea5758f3305.css'));
  }
};

add_action( 'wp_enqueue_scripts', 'green_throne_files' );

function add_google_fonts() {
  echo "<link rel='preconnect' href='https://fonts.gstatic.com'>";
  echo "<link href='https://fonts.googleapis.com/css2?family=Lato&family=Nunito:wght@400;700&display=swap'
  rel='stylesheet' />";
}

add_action('wp_head','add_google_fonts');

function green_throne_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'green_throne_features');