<div class="row">
<div class="small-12 columns">

<div class="nested-section white blue-sub-heads location">
<div class="content-wrap">
				<div class="content">
					<div class="row">
						<div class="small-12 medium-6 columns">
					<h3><?php the_title() ?></h3>
<h4><?php the_field('office_company') ?></h4>
<?php the_field('office_address') ?>
<p>Tel: <a href="tel:<?php echo str_replace(' ','',get_field('office_telephone')); ?>"><?php the_field('office_telephone') ?></a><br />
Email: <a href="mailto:<?php the_field('office_email') ?>"><?php the_field('office_email') ?></a></p>
</div>
<div class="small-12 medium-6 columns"><div class="map-box"><div id="<?php echo $post->post_name ?>" class="map"></div></div></div>
</div>
</div></div>
</div>
</div>
</div>