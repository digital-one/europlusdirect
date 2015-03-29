<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<?php // set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#d3492f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php gravity_form_enqueue_scripts(1, true); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- header -->
	<header id="header">
		<h1 id="home-link"></h1>
<?php else: ?>
	<a href="<?php echo home_url() ?>" id="home-link"></a>
<?php endif ?>
<div class="top row">
			<?php if(is_front_page()): ?>
	<div class="small-12 columns">
		<ul><li>UK: <a href="tel:">+44 (0)113 887 8650</a></li><li><a href="tel:">USA: +1 727 2164 309</a></li><li><a href="mailto:sales@europlusdirect.co.uk">sales@europlusdirect.co.uk</a></li></ul>
	</div>
</div>
<!--/top-->
<!-- nav -->
<nav id="nav">
	<div class="row">
		<div class="small-12 columns">
			<a class="menu-toggle">Menu</a>
	<?php wp_nav_menu( array(
		'theme_location' => 'main-menu',
		'menu_id'=> 'main-menu',
		'container' => 'nav',
		'container_class' => '',
		'after' => '<div class="mobile-dropdown-trigger"></div>' ) ); ?>
	</div>
	</div>
</nav>
<!-- /nav -->
</header>
<!-- /header -->