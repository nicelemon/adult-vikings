<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rookie
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Asap:700,400|Lato:700|Raleway:400|Ubuntu:400,400italic,700normal,700italic,500"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="sp-header"><?php do_action( 'sportspress_header' ); ?></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rookie' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- <img src="http://vikings.dev/wp-content/uploads/2015/11/admin-ajax.png"> -->
		<?php rookie_header_area(); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php do_action( 'rookie_before_template' ); ?>
