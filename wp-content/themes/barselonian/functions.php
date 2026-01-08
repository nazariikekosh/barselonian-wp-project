<?php

/**
 * barselonian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package barselonian
 */

if (! defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

function barselonian_scripts()
{
  // Використовуємо get_template_directory_uri() для надійності
  wp_enqueue_style(
    'min-styles',
    get_template_directory_uri() . '/assets/css/style.min.css',
    array(),
    _S_VERSION
  );
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/assets/scripts/script.js',
    array(),
    _S_VERSION,
    true
  );

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'barselonian_scripts');