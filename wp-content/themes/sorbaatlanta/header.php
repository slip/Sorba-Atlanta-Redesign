<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <meta name="author" content="Resolution Digital Type and Image">
  <meta name="description" content="Your full service design shop in Athens, Georgial.">
  <meta name="keywords" content="Design, Development, Web, Print">
  <?php wp_head(); ?>
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
</head>

<div class="centered-navigation">
  <div class="burger-icon"></div>
  <div class="centered-navigation-wrapper">
    <nav role="navigation">
      <?php
        $menu_args = array('container' => 'ul', 'menu_id' => 'js-centered-navigation-menu', 'menu_class' => 'centered-navigation-menu show', 'items_wrap' => '<ul id="js-centered-navigation-menu" class="centered-navigation-menu show">%3$s</ul>');
        wp_nav_menu($menu_args);
      ?>
    </nav>
  </div>
</div>
<!--end nav-->