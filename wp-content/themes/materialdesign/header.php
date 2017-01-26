<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"  media="screen,projection"/>
<!--<?php wp_head(); ?>-->
</head>

<body <?php body_class(); ?>>
<!--<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo center">Logo</a>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
		<li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
		<li><a href="#">Sass</a></li>
		<li><a href="#"><i class="material-icons">search</i></a></li>
		<li><a href="#"><i class="material-icons">face</i></a></li>
		<li><a href="#"><i class="material-icons right">view_module</i>Link with Right Icon</a></li>
		<li><a href="#">JavaScript</a></li>
		</ul>
	</div>
</nav>-->
<nav>
	<div class="nav-wrapper">
		<a href="#" class="brand-logo center">Logo</a>
<?php 
$defaults = array(
	'theme_location' => 'primary',
	'container' 	 => false,
	'menu_class'	 => 'left hide-on-med-and-down',
	'menu_id'		 => 'nav-mobile',
	'depth'			 => 2,
	// 'walker'		 => new wp_bootstrap_navwalker()
);

wp_nav_menu($defaults);
?>
</nav>
