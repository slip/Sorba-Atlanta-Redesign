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

  <a id="simple-menu" href="#sidr">
    <i class="hamburger-icon"><svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></i>
  </a>

  <main class="site">
  <div id="sidr">
    <ul>
      <li><a href="#">List 1</a></li>
      <li><a href="#">List 2</a></li>
      <li><a href="#">List 3</a></li>
    </ul>
  </div>