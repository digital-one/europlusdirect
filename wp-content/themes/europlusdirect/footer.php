<footer id="footer">
<div class="row">
	<a class="anchor-up">Up</a>
<div class="small-12 large-4 columns">
	<section id="most-popular">
	<div class="column-inner">
<h4>Most Popular</h4>
<div class="row">
	<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 4,
		'meta_key' => 'popular_post',
    	'meta_value' => 1,
    	'meta_compare' => '=',
    	'orderby' => 'date',
		'order' => 'DESC'
	);
	query_posts($args);
	
	//if($articles = get_posts($args)):
		if(have_posts()) :
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','popular-article-loop' );
			endwhile;
			endif;
			?>
	</div>
</div>
</section>
</div>
<div class="medium-3 large-2 columns">
	<div class="column-inner">
		<section id="sections">
<h4>Sections</h4>
<nav id="footer-menu">
	<?php
  wp_nav_menu( array(
        'menu'=>'Footer Menu',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?></nav>
</section>
</div>
	</div>
	<div class="medium-3 columns">
		<div class="column-inner">
			<section id="social">
<h4>Social</h4>
<nav class="social"><ul><li><a href="" class="twitter">Twitter</a></li><li><a href="" class="facebook">Facebook</a></li><li><a href="" class="linkedin">Linkedin</a></li><li><a href="" class="vimeo">Vimeo</a></li></ul></nav>
</section>
<section id="legal">
<h4>Legal</h4>
<ul><li><a href="">Terms and Conditions</a></li>
<li><a href="">Privacy Policy</a></li></ul>
<p>&copy; 2015 MASTER INVESTOR.<br />
 All rights reserved.</p>
</section>
</div>
	</div>
	<div class="medium-6 large-3 columns">
<h4>Subscribe</h4>

<?php gravity_form(1, false, false, false, '', true, 1);  ?>
	</div>

</div>
</footer>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5513089e28128351" async="async"></script>
<?php wp_footer() ?>
</body>
</html>