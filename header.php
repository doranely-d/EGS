<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#000000">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>EGS | <?php echo get_the_title(); ?></title>

<!-- STYLE ZONE -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reveal.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">  
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/branding/stylesheet.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/livevalidation.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sexy-accordion.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swal.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/tooltipster.bundle.min.css">

<!-- STYLE ZONE -->

<!-- SCRIPT ZONE -->
    <script src="<?php bloginfo('template_url'); ?>/js/swiper.jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.reveal.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/skrollr.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/mandrill.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/livevalidation.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/swal.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/tooltipster.bundle.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/sexy-accordion.js"></script>

<!-- SCRIPT ZONE -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-50777741-6', 'auto');
	  ga('send', 'pageview');
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<header class="section-div row expanded">
		<div class="large-2 medium-2 small-6 columns">
			<a href="<?php bloginfo('url'); ?>"><img id="logo-header" src="<?php bloginfo('template_url'); ?>/img/logo_egs.png"></a>
		</div>
		<div class="large-10 medium-10 hide-for-small-only columns">
			<ul>
				<a href="<?php bloginfo('url'); ?>/agenda"><li class="header-btn">Agenda</li></a>
				<a href="<?php bloginfo('url'); ?>/invitados"><li class="header-btn">Invitados</li></a>
				<a href="<?php bloginfo('url'); ?>/areas"><li class="header-btn">Áreas</li></a>
				<a href="<?php bloginfo('url'); ?>/actividades"><li class="header-btn">Actividades</li></a>
				<a href="<?php bloginfo('url'); ?>/#brands"><li class="header-btn">Marcas</li></a>
				<a href="<?php bloginfo('url'); ?>/#feed"><li class="header-btn">Blog</li></a>
				<a href="<?php bloginfo('url'); ?>/donde"><li class="header-btn">Dónde</li></a>
				<a href="<?php bloginfo('url'); ?>/faq"><li class="header-btn">FAQ</li></a>
				<a href="<?php bloginfo('url'); ?>/contacto"><li class="header-btn">Contacto/Prensa</li></a>
				<a href="<?php echo get_field('link_compra', 4); ?>" target="blank"><li class="header-btn red big">Compra tus boletos &gt;</li></a>
			</ul>
		</div>
		<div class="small-6 show-for-small-only columns">
			<i onclick="abreMenu();" class="fa-bars fa-lg fa btn-mobile"></i>
		</div>
			

	</header>
	<style>
		.under-section-banner {

		}
	</style>
	<?php get_sidebar('counter'); ?>
	<?php get_sidebar('menu'); ?>