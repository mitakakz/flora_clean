<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="utf-8">
	<?
	/**
	 * Proper way to enqueue scripts and styles
	 */
	function theme_name_scripts() {
		wp_enqueue_style( 'reset.css', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/reset.css');
		wp_enqueue_style( 'layout.css', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/layout.css');
		wp_enqueue_style( 'style.css', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/style.css');
		wp_enqueue_script( 'script-name', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/js/jquery-1.4.2.js');
		wp_enqueue_script( 'script-name1', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/js/cufon-yui.js');
		wp_enqueue_script( 'script-name2', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/js/cufon-replace.js');
		wp_enqueue_script( 'script-name3', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/js/Myriad_Pro_400.font.js');
		wp_enqueue_script( 'script-name4', 'http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/js/Myriad_Pro_300.font.js');
	}

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); 
	?>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?> id="page2">

<div>

	<div class="extra">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<h1><a href="../home/" id="logo">FloraClean</span></a></h1>
					<ul id="icons">
						<li><a href="#"><img src="http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/images/icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/images/icon2.gif" alt=""></a></li>
						<li><a href="#"><img src="http://127.0.0.1:4001/wordpress/wp-content/themes/migration-theme-master/images/icon3.gif" alt=""></a></li>
					</ul>
				</div>
				<?php wp_nav_menu( array( 
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'menu'
				) ); ?>
				<div class="text1"> We Will Make <span>Your Home Clean and Fresh</span> </div>
			</header>
<!-- / header -->
