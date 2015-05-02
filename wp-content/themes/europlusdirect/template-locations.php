<?php /* Template Name: Locations */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<section  id="locations" class="section row light-grey above skewed offset-up gutters overlap-bottom">
	<div class="section-inner">
<div class="section-content">

<div class="row">
<div class="small-12 columns">
<form id="location-filter" method="post" action="/">
	<div class="row">
	<div class="small-12 medium-6 large-4 large-offset-2 columns">
<select name="service_select" id="service_select" rel="service"><option value="0">All Services</option>
<?php

	$args=array(
		'parent' => 0,
		'hide_empty' => 0
		);
	if($services  = get_terms( 'cptax_location_service', $args )):
		foreach($services as $service):
?>
<option value="<?php echo $service->term_id ?>"><?php echo $service->name ?></option>
<?php endforeach ?>
<?php endif ?>
</select>
</div>
<div class="small-12 medium-6 large-4 columns end">
<select name="country_select" id="country_select" rel="country"><option value="0">All Countries</option>

<?php
$args = array(
	'post_type' => 'cpt_location',
	'post_status' => 'publish',
	'numberposts' => -1,
	'orderby' => 'name',
	'order' => 'ASC'
	);
if($locations = get_posts($args)):
	foreach($locations as $location):
		?>
	<option value="<?php echo $location->ID ?>"><?php echo $location->post_title ?></option>
<?php endforeach ?>
<?php endif ?>
</select>
</div>
</div>
<input type="hidden" name="action" value="get_locations" />
<input type="hidden" name="service" value="" />
<input type="hidden" name="country" value="" />
</form>
</div>
</div>
<!--/end-->

</div>
<div class="skewed-bg"></div>


</div>

</section>

<section class="section row  light-grey above offset-up">
	<div class="section-inner">

<div class="row">
	<div class="small-12 columns">
		<div id="location-map-wrap"><div id="location-map"></div></div>
	</div>
</div>


</div>
</section>

<!-- Global Offices -->
<?php 
$page = get_post(239);
include( locate_template( 'partials/content-global-offices-locations.php' ));
?>
<!-- /Global Offices -->
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 