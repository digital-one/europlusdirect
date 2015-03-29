<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main id="main">
  <!-- feature -->
<section id="feature">
<div class="row">
<div class="small-12 xlarge-9 columns">
  <!--slider-->
  <div id="slider" class="slick-slider">
<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'meta_key' => 'featured_post',
    	'meta_value' => 1,
    	'meta_compare' => '=',
    	'orderby' => 'date',
		'order' => 'DESC'
	);
	query_posts($args);
	
	//if($articles = get_posts($args)):
		if(have_posts()) :
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','slide-loop' );
			endwhile;
			endif;
			?>

</div>
</div>
<!--/slider-->

<aside class="small-12 xlarge-3 columns">
	<div class="row">
		<div class="small-12 medium-6 xlarge-12 columns">
	<div class="iframe-wrap">
<iframe src="http://markets.fortune.com/application/markets/homepage" frameborder="0" scrolling="no" class="fortune-fullwidth"></iframe>
</div>
</div>
<!--ad-->
<div class="small-12 medium-6 xlarge-12 columns height-75-pct">
<div class="ad">
	<div class="content"><div class="inner"><span>Advertisement</span></div></div>
</div>
</div>
<!--/ad-->
</div>
</aside>
</div>
</section>
<!-- /feature -->
<!-- twitter feed -->
<section id="twitter-feed">
<div class="row">
<div class="large-12 columns">
	<div id="twitter-slider" class="slider slick-slider twitter-feed">
		<?php /* <div class="slide">
			<div class="vcenter">
			<div class="user"> <a href="https://twitter.com/giselle_york" aria-label="Giselle Ladieswear (screen name: giselle_york)" data-scribe="element:user_link">
    <img alt="" src="https://pbs.twimg.com/profile_images/572414297150468096/1suc4p7d_normal.jpeg" data-src-2x="https://pbs.twimg.com/profile_images/572414297150468096/1suc4p7d_bigger.jpeg" data-scribe="element:avatar">
    <span>
      <span data-scribe="element:name">Giselle Ladieswear</span>
    </span>
    <span data-scribe="element:screen_name">@giselle_york</span>
  </a>
</div><p class="tweet">New Year, New you (business that is) http://www.masterinvestormagazine.com/ #debt #recovery</p><p class="timePosted">Posted on 18 Mar</p><p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to=578198165217783808" class="twitter_reply_icon">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id=578198165217783808" class="twitter_retweet_icon">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id=578198165217783808" class="twitter_fav_icon">Favorite</a></p>
</div>
</div>

<button class="slick-prev">Prev</button>
<button class="slick-next">Next</button>
*/ ?>
</div>

</div>
</div>
</section>
<!-- /twitter feed -->
<!--must reads row-->

<div class="row">
<section id="must-reads" class="latest-articles small-12 xlarge-9 columns">
<header class="section-header"><h2 class="sub-head invert">Latest</h2><a href="<?php echo get_term_link( 'latest', 'category' ) ?>" class="read-more" title="Read more">Read more</a></header>
<div class="row">

<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  'latest'
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);
	
	//if($articles = get_posts($args)):
		if(have_posts()) :
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','avatar-article-loop' );
			endwhile;
			else:
			?>
		<p>No articles found</p>
		<?php
			endif;
			?>
			<?php wp_reset_query(); ?>

</div>
</section>
<aside class="small-3 columns show-for-xlarge-up">
<section class="latest-edition">
	<a href="">
<header><h3>View the Latest Edition out now!</h3></header>
<main><div class="flash">Available to view on all mobile devices</div><img src="<?php echo get_template_directory_uri(); ?>/images/devices.png" /></main>
</a>
</section>
</aside>

</div>
<!--/must reads row-->
<div class="row">
	<div class="large-12 columns">
<div class="division"></div>
</div>
</div>
<!--row-->
<div class="row section-wrap">
<div class="small-12 large-9 columns">
	<!--evil diaries-->

<section id="evil-diaries" class="latest-articles evil-diaries large-12 columns tint">

<header class="section-header avatar-header fixed-height"><a href="<?php echo get_term_link( 'evil-diaries', 'category' ) ?>" class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/evil-knievel.jpg" alt="Evil Knievel" /></a><div class="vertical-center"><div class="vcenter"><h2 class="sub-head invert">Evil Diaries</h2></div></div><a href="<?php echo get_term_link( 'evil-diaries', 'category' ) ?>" class="read-more" title="Read more">Read more</a></header>
<div class="row">
	<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  'evil-diaries'
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);
	
	//if($articles = get_posts($args)):
		if(have_posts()) :
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','article-loop' );
			endwhile;
			else:
			?>
		<p>No articles found</p>
		<?php
			endif;
			?>
			<?php wp_reset_query(); ?>
	
</div>
</section>

	<!--evil diaries-->
	<div class="division"></div>

<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  'equities'
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);
	

		if(have_posts()) :
			?>
		<!-- equities -->
<div class="row">
<section id="equities" class="latest-articles equities large-12 columns">
<header class="section-header"><h2 class="sub-head invert">Equities</h2><a href="<?php echo get_term_link( 'equities', 'category' ) ?>" class="read-more" title="Read more">Read more</a></header>
<div class="row">
	<?php
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','article-loop' );
			endwhile;
			?>
			</div>
</section>
</div>
<!-- /equities -->
<div class="division"></div>
<?php endif; ?>
			<?php wp_reset_query(); ?>
<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  'trading'
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);

		if(have_posts()) :
			?>

<!-- currencies -->
<div class="row">
<section id="currencies" class="latest-articles currencies large-12 columns">
<header class="section-header"><h2 class="sub-head invert">Trading</h2><a href="<?php echo get_term_link( 'trading', 'category' ) ?>" class="read-more" title="Read more">Read more</a></header>
<div class="row">
<?php
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','article-loop' );
			endwhile;
			?>
</div>
</section>
</div>
<!-- /currencies -->
<div class="division"></div>
<?php endif; ?>
			<?php wp_reset_query(); ?>
			<?php
	$args=array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'tax_query' => array(
            array(
            	'taxonomy' =>'category',
            	'field' => 'slug',
            	'terms' =>  'economics'
            	)
            ),
		'orderby' => 'date',
		'order' => 'DESC'
		);
	query_posts($args);

		if(have_posts()) :
			?>
<!-- economics -->
<div class="row">
<section id="economics" class="latest-articles economics large-12 columns">
<header class="section-header"><h2 class="sub-head invert">Economics &amp; Markets</h2><a href="<?php echo get_term_link( 'economics', 'category' ) ?>" class="read-more" title="Read more">Read more</a></header>
<div class="row">
<?php
			while (have_posts() ) : the_post(); 
			get_template_part('partials/content','article-loop' );
			endwhile;
			?>
</div>
</section>
</div>
<!-- /economics -->
<div class="division"></div>
<?php endif; ?>
			<?php wp_reset_query(); ?>
</div>
<aside class="small-12 large-3 columns">
	<div class="row">
<!--ad-->
<div class="small-12 columns height-200-pct">
<div class="ad">
	<div class="content"><div class="inner"><span>Advertisement</span></div></div>
</div>
</div>
<!--/ad-->
<!--ad-->
<div class="small-12  columns height-75-pct">
<div class="ad">
	<div class="content"><div class="inner"><span>Advertisement</span></div></div>
</div>
</div>
<!--/ad-->
<!--ad-->
<div class="small-12 columns height-75-pct">
<div class="ad">
	<div class="content"><div class="inner"><span>Advertisement</span></div></div>
</div>
</div>
<!--/ad-->
<!--ad-->
<div class="small-12 columns height-200-pct">
<div class="ad">
	<div class="content"><div class="inner"><span>Advertisement</span></div></div>
</div>
</div>
<!--/ad-->
</div>
	</aside>

</div>
<!--/row-->
<section id="latest-edition">
	<div class="row">
<div class="small-10  medium-5  large-4 small-offset-1 medium-offset-0 xlarge-3 xlarge-offset-1 columns"><h2>Master Investor Magazine</h2><h3>Income Hunting 2015</h3><p class="issue">ISSUE 01 APRIL 2015</p><ul class="links"><li><a href="" class="button large">Click here to subscribe</a></li><li><a href="" class="button large">Click here to contribute</a></li></ul></div>
<div class="small-10  medium-7 large-5 medium-offset-0 small-offset-1 xlarge-4  columns"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/devices.png" /></figure></div>
<div class="small-10  small-offset-1 large-3 xlarge-3 large-offset-0 columns end"><nav class="features"><div class="row"><ul><li class="small-12 columns"><h4><a href="">The Naked Trader</a></h4><p>Robbie Burns’ Trading Diary returns</p></li><li class="small-12 columns"><h4><a href="">Zak Mirs' Monthly Pick</a></h4><p>We highlight Apple this month</p></li><li class="small-12 columns"><h4><a href="">The Naked Trader</a></h4><p>Robbie Burns’Trading Diary returns</p></li><li class="small-12 columns"><h4><a href="">The Naked Trader</a></h4><p>Robbie Burns’Trading Diary returns</p></li></ul></div></nav></div>
</div>
</section>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 