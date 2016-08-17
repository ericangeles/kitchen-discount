<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitchen-discount
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script type="text/javascript">
jQuery(document).ready(function($){
 jQuery(document).bind('em_maps_location_hook', function( e, map, infowindow, marker ){
  map.scrollwheel = false;
 });
});
</script>

<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">
<link rel="stylesheet prefetch" href="<?php echo get_template_directory_uri(); ?>/dist/css/photoswipe.css">
<link rel="stylesheet prefetch" href="<?php echo get_template_directory_uri(); ?>/dist/css/default-skin.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
</head>

<body <?php body_class(); ?>>

	<script>document.body.className += 'fade-out';</script>

	<nav id="navstatic" class="navbar navbar-inverse navbar-static-top nav001" role="navigation">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <div class="logo-section">
	        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" class="img-responsive" alt="Kitchen Discount"></a>
	      </div>
	    </div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li><a class="underline" href="/schuller-kitchens/">SCHÜLLER KITCHENS</a></li>
	        <li><a class="underline" href="">APPLIANCES</a></li>
	        <li><a class="underline" href="">ACCESSORIES</a></li>
	        <li class="dropdown" role="presentation">
	          <a class="underline dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">WORKTOPS</a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a class="underline" href="">Fall out boy</a></li>
	            <li><a class="underline" href="">The Fray</a></li>
	            <li><a class="underline" href="">DNCE</a></li>
	          </ul>
	        </li>
	        <li class="dropdown" role="presentation">
	          <a class="underline dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">ABOUT</a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a class="underline" href="/contact/">Contact Us</a></li>
	            <li><a class="underline" href="">Coldplay</a></li>
	            <li><a class="underline" href="">The Script</a></li>
	            <li><a class="underline" href="">The Calling</a></li>
	          </ul>
	        </li>
	        <li><a class="underline" href="/latest-news/">NEWS</a></li>
	        <li><a  href="/contact/" class="btn-round-style">CONTACT US</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>





	<div id="content" class="site-content">
