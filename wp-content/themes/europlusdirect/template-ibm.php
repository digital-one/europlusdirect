<?php /* Template Name: IBM */ ?>
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
				<div class="small-12 columns heading-right opaque-heading blue-yellow-heading">
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
$colour = get_sub_field('text_block_colour');
$text = get_sub_field('text_block');
?>
<span class="line"><span class="block<?php if($size=='small'):?> small<?php endif ?><?php if($colour=='secondary'):?> secondary<?php endif ?>"><?php echo $text ?></span></span>
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
<section id="intro" class="section row first gutters">
	<div class="section-inner">
		<div class="section-content">
<?php the_content() ?>
</div>
</div>
</div>
</section>
<!--service pack options-->
<?php  $page = get_post(212);  ?>
<section id="ibm" class="section row blue-yellow-heading red-sub-heads red-btns pac skewed centered-text grey top offset-down">
<div class="section-inner">
<div class="section-content"><header class="row">
<div class="small-12 columns">
<h2 class="block-heading"><span class="line"><span class="block"><?php echo $page->post_title ?></span></span></h2>
</div>
</header>
<div class="pac-intro">
<?php echo $page->post_content ?>
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<?php  $page = get_post(529);  ?>
<section class="section row  light-grey above offset-down straight-top gutters">
<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php echo $page->post_title ?></h3>
<div class="row" style="position: relative;">
<div class="small-12 large-8 large-offset-2 columns end">
<?php echo $page->post_content ?>
</div>
</div>
</div>
</div>
</section>
<!--/service pack options-->
<!-- IBM ServicePac -->
<?php  $page = get_post(214);  ?>
<section class="section row grey insets skewed straight-top spaced anchor"><a class="anchor-up">Top</a>
<div class="section-inner">
<div class="section-content">
<div class="row">
<div class="small-12 large-6 columns">
<div class="nested-section blue spacing">
<div class="ribbon yellow"><span class="inner"><?php echo get_field('ribbon_label',$page->ID) ?></span></div>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'large-image'); ?>
<figure><img class="alignnone size-full wp-image-184" src="<?php echo $src; ?>" alt="" /></figure>
<div class="content-wrap angle">
<div class="content">
<h3><?php echo $page->post_content ?></h3>

</div>
</div>
</div>
</div>
<?php  $page = get_post(532);  ?>
<div class="small-12 large-6 columns">
<div class="nested-section white blue-sub-heads">
<header class="icon-header">
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('icon',$page->ID),'full'); ?>
<div class="icon"><img class="alignnone size-full wp-image-104" src="<?php echo $src ?>" alt="" /></div>
</header>
<h3><?php echo $page->post_content ?></h3>
</div>
</div>
</div>
<?php  $page = get_post(214);  ?>
<div class="row blue-btns">
<div class="small-12 columns"><footer class="insets-footer">
<p><a class="read-more" href="<?php echo get_button_link($page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></p>
</footer></div>
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<!--/IBM ServicePac-->
<!-- IBM Service Suite Maintenance Contract -->
<section class="section row  insets light-grey skewed above">
<div class="section-inner">
<div class="section-content">
<div class="row">
	<?php  $page = get_post(218);  ?>
<div class="small-12 large-6 columns">
<div class="nested-section white blue-sub-heads spacing">
<div class="ribbon yellow"><span class="inner"><?php echo get_field('ribbon_label',$page->ID);?></span></div>
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'large-image'); ?>
<figure><img class="alignnone size-full wp-image-184" src="<?php echo $src ?>" alt=""  /></figure>
<div class="content-wrap angle">
<div class="content">
<h2><?php echo $page->post_title ?></h2>
<?php echo $page->post_content ?>
</div>
</div>
</div>
</div>
<?php  $page = get_post(543);  ?>
<div class="small-12 large-6 columns">
<div class="nested-section white">
<header class="icon-header">
<?php list($src,$w,$h) = wp_get_attachment_image_src(get_field('icon',$page->ID),'full'); ?>
<div class="icon"><img class="alignnone size-full wp-image-104" src="<?php echo $src ?>" alt="" /></div>
<h3><?php echo $page->post_title ?></h3>
<?php echo $page->post_content ?>
</header></div>
</div>
</div>
<div class="row blue-btns">
	<?php  $page = get_post(218);  ?>
<div class="small-12 columns"><footer class="insets-footer">
<?php echo get_field('footer',$page->ID) ?>
<p><a class="read-more" href="<?php echo get_button_link($page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></p>
</footer></div>
</div>
</div>
<div class="skewed-bg"> </div>
</div>
</section>
<!--/IBM Service Suite Maintenance Contract-->
<!--two column split-->
<section class="section row two-box">
<div class="section-content">
<div class="row">
	<!-- ibm software services -->
		<?php  $page = get_post(225);  ?>
<div class="small-12 large-6 columns blue-yellow-heading grey blue-sub-heads red-btns">
<div class="nested-section-content section-content-inner">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<footer class="text-right yellow-btns"><a class="read-more" href="<?php echo get_button_link($page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></footer></div>
</div>
<!-- /ibm software services -->
<!--multi manufacturer services-->
<div class="small-12 large-6 columns black yellow-blue-heading red-btns white-sub-heads">
<div class="nested-section-content section-content-inner second">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<footer class="text-right yellow-btns"><a class="read-more" href="<?php echo get_button_link($page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID) ?></span></a></footer></div>
</div>
</div>
</div>
</section>
<!--/multi manufacturer services-->
<!--/two column split-->

<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 