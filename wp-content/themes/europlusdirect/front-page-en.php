<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!--slider-->
	<div id="slider-wrap">
	<section id="slider">
		<?php
		if(have_rows('slider')):
		
	$slide_total = count(get_field('slider')); //number of rows in parent field
while(have_rows('slider')): //parent repeater field
the_row();
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('slide_image'), 'slide');
?>
<!--slide-->
		<div class="slide" style="background-image:url('<?php echo $src ?>');">
			<div class="row">
				<div class="small-12 columns heading-right opaque-heading">
			<div class="content"><div class="vcenter">
<?php
$rows = get_sub_field('caption'); //number of rows in nested field
if(have_rows('caption')): //nested repeater field
?>
<h2 class="block-heading">
<?php
$page_count=0;
$page_total = count($rows);
while( have_rows('caption')):
the_row();
$size = get_sub_field('text_block_size');
$text = get_sub_field('text_block');
?>
<span class="line"><span class="block<?php if($size=='small'):?> small secondary<?php endif ?>"><?php echo $text ?></span></span>
<?php
endwhile;
?>
</h2>
<?php 
endif;
?>
</div>
</div>
</div>
</div>
</div>
<?php
endwhile;
endif;
?>
</section>
<?php get_template_part('inc.anchor-nav'); ?>									        													      
</div>
<!--/slider-->
<main id="main">
	<!--intro-->
<section id="intro" class="section row first gutters">
	<div class="section-inner">
		<div class="section-content">	
			<?php
			$page = get_post(2);
			echo $page->post_content;
			?>
</div>
</div>
</div>
</section>
<!--/intro-->
<!--lenovo service packs-->
<?php
global $page;
$page = get_post(65);
include( locate_template( 'partials/content-home-lenovo-service-packs.php' ));
?>
<!--/lenovo service packs-->
<!--IBM-->
<?php
$page = get_post(67);
include( locate_template( 'partials/content-home-ibm-service-packs.php' ));
?>
<!--/IBM-->
<?php get_template_part('callback-form') ?>

<!--Multi country support-->
<?php
$page = get_post(69);
include( locate_template( 'partials/content-home-multi-country-maintenance.php' ));
?>

	<section class="section white-yellow-heading row two-box centered-text">
<div class="section-content">
<div class="row">
<!--/Software support-->
<?php 
$page = get_post(71);
include( locate_template( 'partials/content-home-software-support.php' ));
?>
<!--/Software support-->
<!--Just ask-->
<?php 
$page = get_post(431);
include( locate_template( 'partials/content-home-just-ask.php' ));
?>
<!--/Just ask-->
</div>
</div>
</section>
<!--/two column split-->

<!--faqs-->
<?php
$page = get_post(75);
include( locate_template( 'partials/content-home-faqs.php' ));
?>

<!--/faqs-->
<!--video-->
<?php
$page = get_post(73);
include( locate_template( 'partials/content-home-speak-language.php' ));
?>
<!--/video-->

<?php get_footer() ?> 
<?php endwhile ?>
<?php endif ?>