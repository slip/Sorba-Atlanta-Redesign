<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function wps_excerpt_length($length) {
  return 30;
};
add_filter('excerpt_length', 'wps_excerpt_length');


function register_theme_menus()
{
  register_nav_menus(array ('primary-menu' => __('Primary Menu')));
}

add_action('init', 'register_theme_menus');

function wps_theme_styles()
{
  wp_enqueue_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:500,700,900');
  wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
};
add_action('wp_enqueue_scripts', 'wps_theme_styles');

function wps_theme_js()
{
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false);
  wp_enqueue_script('slideout', 'https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.11/slideout.min.js', array('jquery'), '', false);
};
add_action('wp_enqueue_scripts', 'wps_theme_js');