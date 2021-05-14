<?php
require_once( __DIR__ . '/options.php');

function green_throne_files() {
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', NULL, '1.0', true );
  if (is_page('get-a-free-quote')) {
    wp_enqueue_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue@2', NULL, '1.0', true );
    wp_enqueue_script('green_throne_quote_script', get_template_directory_uri() . '/assets/js/get-a-quote.js', NULL, '1.0', true);
  }
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"', NULL, '1.0', true );
  wp_enqueue_script('green_throne_main_scripts', get_template_directory_uri() . '/assets/js/main.js', NULL, '1.0', true);
  wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/styles.css', array(), filemtime(get_template_directory() . '/assets/css/styles.css'), false);
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

add_action( 'admin_post_nopriv_handle_zip_code', 'check_zip_code');
add_action( 'admin_post_handle_zip_code', 'check_zip_code');

// Zip code variables
$available_zip_codes_options = get_option( 'available_zip_codes_option_name' ); // Array of All Options
$zip_code_string = $available_zip_codes_options['zip_codes_0']; // Zip Codes
$zip_code_array = explode(",", $zip_code_string);

define("valid_zip_codes", $zip_code_array);

function check_zip_code() {

  if (in_array($_GET['zip-code'], valid_zip_codes)) {
    header("Location: " . site_url( '/get-a-free-quote?zip-code=' . $_GET['zip-code'] ));
  } else {
    header("Location: " . site_url( '/contact?zip-code=' . $_GET['zip-code'] ));
  }
}
