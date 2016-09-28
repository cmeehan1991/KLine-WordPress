<?php
/*
 * @package: Kline-WordPress
 * @subpackage: kline
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
        
        <!--JQuery Google CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!--Google MDL-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all" />
        
        <title><?php bloginfo('title'); ?></title>
        
        <?php wp_head(); ?>
    </head>
    <body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php bloginfo('title'); ?></span>
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="<?php bloginfo('home');?>">Home</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/news-events">News &amp; Events</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/services">Services</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/schedules">Schedules</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/contact">Contact</a>
      </nav>
      
    </div>
  </header>
  <div class="mdl-layout__drawer mdl-layout--small-screen-only">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="<?php bloginfo('home');?>">Home</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/news-events">News &amp; Events</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/services">Services</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/schedules">Schedules</a>
        <a class="mdl-navigation__link" href="<?php bloginfo('url');?>/contact">Contact</a>
    </nav>
  </div>
  <main class="mdl-layout__content">

