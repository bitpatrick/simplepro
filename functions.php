<?php
/*  Theme setup
/* ------------------------------------ */
if (!function_exists('simplepro_setup')) {

  function simplepro_setup()
  {

    // Enable custom header
    add_theme_support('custom-header');

    // Enable title in header
    add_theme_support('title-tag');

    // Enable automatic feed links
    add_theme_support('automatic-feed-links');

    // Enable featured image
    add_theme_support('post-thumbnails');

    // Thumbnail sizes
    add_image_size('simplepro_single', 800, 999, false);
    add_image_size('simplepro_big', 1400, 928, true);   //(cropped)

    // Custom menu areas
    register_nav_menus(array(
      'header' => esc_html__('Header', 'simplepro')
    ));

    // Load theme languages
    load_theme_textdomain('simplepro', get_template_directory() . '/languages');

    // Logo Featured
    add_theme_support('custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => false,
      'flex-width'  => false,
    ));
  }
}
add_action('after_setup_theme', 'simplepro_setup');

/*  Enqueue css
/* ------------------------------------ */
if (!function_exists('simplepro_styles')) {
  function simplepro_styles()
  {

    wp_enqueue_style('simplepro-style', get_template_directory_uri() . '/style.css');
  }
}
add_action('wp_enqueue_scripts', 'simplepro_styles');

function gb_gutenberg_admin_styles()
{
  echo '
        <style>
            /* Main column width */
            .wp-block {
                max-width: 1200px;
            }
 
            /* Width of "wide" blocks */
            .wp-block[data-align="wide"] {
                max-width: 1480px;
            }
 
            /* Width of "full-wide" blocks */
            .wp-block[data-align="full"] {
                max-width: none;
            }	
        </style>
    ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');
