<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title(); ?></title>
  <meta name="author" content="Resolution Digital Type and Image">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <?php wp_head(); ?>
  <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
</head>
<body>

<?php
$menu_args = array('container' => 'nav', 'container_id' => 'menu');
wp_nav_menu($menu_args);
?>
  
<main id="main" class="panel">
  <h1>Hi, This is the #main .panel</h1>