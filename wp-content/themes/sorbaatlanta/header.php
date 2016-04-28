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
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
</head>

<div class="centered-navigation">
  <div class="centered-navigation-wrapper">
    <nav role="navigation">
       <?php
          $menu_args = array('container' => 'ul', 'menu_id' => 'js-centered-navigation-menu', 'menu_class' => 'centered-navigation-menu show', 'items_wrap' => '<ul id="js-centered-navigation-menu" class="centered-navigation-menu show">%3$s</ul>');
      
          wp_nav_menu($menu_args);
        ?>
<!--
        <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
        <li class="nav-link"><a href="javascript:void(0)">ABOUT</a></li>
        <li id="js-centered-more" class="nav-link more"><a href="javascript:void(0)">TRAILS</a>
          <ul class="submenu">
            <li><a href="javascript:void(0)">TRAIL STATUS</a></li>
            <li><a href="javascript:void(0)">COCHRAN MILL</a></li>
            <li><a href="javascript:void(0)">SOPE CREEK</a></li>
          </ul>
        </li>
        <li class="nav-link"><a href="javascript:void(0)">CALENDAR</a></li>
        <li class="nav-link"><a href="javascript:void(0)">BLOG</a></li>
        <li class="nav-link"><a href="javascript:void(0)">MEMBERSHIP</a></li>
        <li class="nav-link"><a href="javascript:void(0)">SHOP</a></li>
        <li class="nav-link">
          <input type="button" value="DONATE" class="donate-button">
        </li>
      </ul>
-->
    </nav>
  </div>
</div>
<!--end nav-->