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
	<nav id="anchor-nav"><ul><li><a href="">Lenovo</a></li><li><a href="">IBM support</a></li><li><a href="">Multi-country</a></li><li><a href="">Software support</a></li><li><a href="">Multi-manufacturer support</a></li><li><a href="">FAQs</a></li></ul></nav>
									        													      
</div>
<!--/slider-->
<main id="main">
	<!--intro-->
<section id="intro" class="section row first gutters">
	<div class="section-inner">
		<div class="section-content">	
			<?php
			$page = get_post(133);
			echo $page->post_content;
			?>
</div>
</div>
</div>
</section>
<!--/intro-->
<!--lenovo-->
<?php
$page = get_post(127);
echo $page->post_content;
?>
<!--/lenovo-->
<!--IBM-->
<?php
$page = get_post(67);
echo $page->post_content;
?>
<!--/IBM-->
<!--call back form-->
<section id="callback" class="section row white-sub-heads skewed centered-text black spaced">
	<div class="section-inner">
	<div class="section-content">
<h2 class="block-heading"><span><em>Not sure what you need?</em></span></h2>
<h4>Here at Europlus Direct, we understand that trying to protect your IT Equipment can be daunting.<br />But don’t worry, we’re here to help, so just let us know how we can help you.</h4>
<?php //gravity_form(1, false, false, false, '', true, 1);  ?>
<div class="gf_browser_chrome gform_wrapper two-column_wrapper" id="gform_wrapper_2"><a id="gf_2" name="gf_2" class="gform_anchor"></a><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" class="two-column" action="/contact-us/#gf_2">
                        
                        <div class="gform_body">
                            <ul id="gform_fields_2" class="gform_fields top_label description_below">
                            	<li id="field_2_6" class="gfield gsection gform_column"></li></ul><ul class="gform_fields top_label description_below gform_column">
                            	<li class="gfield gsection empty"></li>
                            	<li id="field_2_1" class="gfield gfield_contains_required gfield_label_hidden"><label class="gfield_label" for="input_2_1" style="display:none;">Your name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Your name"></div></li>
                            	<li id="field_2_3" class="gfield gfield_label_hidden"><label class="gfield_label" for="input_2_3" style="display:none;">Company</label><div class="ginput_container"><input name="input_3" id="input_2_3" type="text" value="" class="medium" tabindex="3" placeholder="Company"></div></li>
                            	<li id="field_2_4" class="gfield gfield_label_hidden"><label class="gfield_label" for="input_2_4" style="display:none;">Telephone</label><div class="ginput_container"><input name="input_4" id="input_2_4" type="text" value="" class="medium" tabindex="4" placeholder="Telephone"></div></li>
                            	<li id="field_2_5" class="gfield gfield_label_hidden"><label class="gfield_label" for="input_2_5" style="display:none;">Email Address</label><div class="ginput_container"><input name="input_5" id="input_2_5" type="email" value="" class="medium" tabindex="5" placeholder="Email Address"></div></li><li id="field_2_11" class="gfield gsection gform_column"></li></ul>
                            	<ul class="gform_fields top_label description_below gform_column"><li class="gfield gsection empty"></li>
<li id="field_2_1" class="gfield gfield_contains_required gfield_label_hidden right"><label class="gfield_label" for="input_2_1" style="display:none;">Your name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Your name"></div></li>
<li id="field_2_1" class="gfield gfield_contains_required gfield_label_hidden right"><label class="gfield_label" for="input_2_1" style="display:none;">Your name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Your name"></div></li>
<li id="field_2_1" class="gfield gfield_contains_required gfield_label_hidden right"><label class="gfield_label" for="input_2_1" style="display:none;">Your name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Your name"></div></li>
<li id="field_2_1" class="gfield gfield_contains_required gfield_label_hidden right"><label class="gfield_label" for="input_2_1" style="display:none;">Your name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="medium" tabindex="1" placeholder="Your name"></div></li>


                         
                            </ul></div>
        <div class="gform_footer top_label">

        	<input type="submit" id="gform_submit_button_2" class="gform_button button" value="Submit" tabindex="8" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;} "><input type="hidden" name="gform_ajax" value="form_id=2&amp;title=1&amp;description=1&amp;tabindex=1">
         
            
        </div>
                        </form>
                    </div>
             </div>
                    <div class="skewed-bg"></div>
                  </div>
</section>
<!--/call back form-->

<!--Multi country support-->
<?php
$page = get_post(69);
echo $page->post_content;
?>
	<!--/Multi country support-->
	<!--two column split-->
<?php
$page = get_post(71);
echo $page->post_content;
?>

<!--/two column split-->
<!--faqs-->
<section id="faqs" class="section yellow-white-heading light-yellow row skewed centered-text spaced">
	<div class="section-inner">
	<div class="section-content">
<h2 class="block-heading"><span><em>Frequently Asked Questions</em></span></h2>
<p>At Europlus Direct, we’re more than happy to answer any of your IT queries, but should you need a quick answer, why not take a look at our <a href="">FAQs</a>, now</p>
<div class="slider">
<div class="slide"><p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet?</p></div>
<div class="slide"><p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet?</p></div>

</div>
</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/faqs-->
<!--video-->
<?php
$page = get_post(73);
echo $page->post_content;
?>
<!--/video-->
<section id="contact" class="section yellow-white-heading yellow-btns centered-text">
	<div class="section-inner">
		<div class="section-content">
<h2 class="block-heading"><span class="line"><span class="block">Want to protect your IT system in one easy step?</span></span><span class="line"><span class="block">Then call us today on</span></span></h2>
<p class="big"><a href="tel:">+44 (0)113 887 8650</a></p>
<a href="" class="read-more"><span>Contact us</span></a>
</div>
</div>
	</section>
	</main>

<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 