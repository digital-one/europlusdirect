<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!--slider-->
	<section id="slider">
		<div class="slide">
			<h3><span>We protect your IT systems,</span><span>you protect your business</span><span>24 hours a day. 7 days a week</span></h3>

		</div>
<ul class="slick-dots" style="display: block;"><li class="slick-active"><button type="button" data-role="none">1</button></li><li><button type="button" data-role="none">2</button></li><li><button type="button" data-role="none">3</button></li><li><button type="button" data-role="none">4</button></li><li><button type="button" data-role="none">5</button></li><li><button type="button" data-role="none">6</button></li><li><button type="button" data-role="none">7</button></li></ul>
	</section>
<!--/slider-->
<main>
<section id="intro">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</section>
<!--lenovo-->
<section id="lenovo">
<h2>Lenovo Service Packs</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nib.</p>
</section>
<!--/lenovo-->
	</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 