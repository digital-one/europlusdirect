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
		<div class="row">
			<div class="small-12 large-5 columns">
				<?php if(is_front_page()): ?>
	<h1 id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/master-investor.svg" alt="Master Investor" /></h1>
<?php else: ?>
	<a href="<?php echo home_url() ?>" id="home-link"><img src="<?php echo get_template_directory_uri(); ?>/images/master-investor.svg" alt="Master Investor" /></a>
<?php endif ?>
</div>
<div class="small-12 large-3 columns subscribe">

	<a class="subscribe-link inner"><div><span>Click Here</span> to<br />subscribe for free</div></a>

</div>
<div class="small-12 large-4 columns">
<div class="inner">
<div class="social-nav-wrap"><nav class="social"><span>Follow us</span><ul><li><a href="" class="twitter">Twitter</a></li><li><a href="">Facebook</a></li><li><a href="" class="linkedin">Linkedin</a></li><li><a href="" class="vimeo">Vimeo</a></li></ul></nav></div>
<div class="search-wrap">
	<form method="post" action="<?php echo home_url() ?>">
			<input type="search" name="s" id="s" placeholder="Search Now" /><button type="submit">Submit</button>
		</form>
	</div>
	</div>
	</div>	

</div>
</header>
<!-- /header -->
<!-- nav -->
<nav id="nav">
	<div class="row">
		<div class="large-16 columns">
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
