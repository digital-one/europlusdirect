<?php /* Template Name: FAQs */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<?php get_template_part('inc.header-banner') ?>
<section class="section row  grey above skewed offset-up insets overlap-bottom spaced">
	<div class="section-inner">
<div class="section-content">
	<?php the_content() ?>
<div class="row">
	<?php
	$args = array(
		'hide_empty' => 0,
		'parent'=> 0,
		'order'=>'ASC'
		);
		if($terms = get_terms('cptax_question_category',$args)):
			foreach($terms as $term):
	

        //  $img = get_field('term_image', $term);
          ?>
	<!--column-->
	<div class="small-12 large-6 columns">
		<div class="nested-section <?php if($term->term_id==32):?>ibm<?php endif ?> white <?php if($term->term_id==32):?>blue<?php else: ?>red<?php endif ?>-sub-heads spacing lenovo">
		
			<div class="content-wrap">
				<div class="content">
		<h3><?php echo $term->name ?> <?php _e('Frequently Asked Questions','epd_theme'); ?></h3>
		<dl class="accordion">
			<?php
			if($child_terms = get_terms('cptax_question_category',array('hide_empty' => 0,'parent'=> $term->term_id))):
				foreach($child_terms as $child_term):
				?>
			<dt class="tab-handle"><h4><?php echo $child_term->name ?></h4></dt>
			<dd class="tab-content">
				<?php
					$args = array(
						'post_type' => 'cpt_question',
						'post_status' => 'publish',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'tax_query' => array(
    						array(
      							'taxonomy' => 'cptax_question_category',
      							'field' => 'id',
      							'terms' => $child_term->term_id, // Where term_id of Term 1 is "1".
      							'include_children' => false
    						)
  						)
					);
					query_posts($args);
	if(have_posts()) :
		?>
		<dl>
			<?php
		while (have_posts() ) : the_post(); 
			 get_template_part('partials/content','question-loop' ); 
endwhile;
?>
</dl>
<?php
endif;
wp_reset_query();
?>
</dd>
		<?php endforeach ?>
	<?php endif ?>
		</dl>
</div>
</div></div>
</div>
<!--/column-->
<?php
endforeach;
endif;
?>

</div>
</div>
<div class="skewed-bg"></div>


</div>
</section>
<!--call back form-->
<?php get_template_part('callback-form'); ?>
<!--/call back form-->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 