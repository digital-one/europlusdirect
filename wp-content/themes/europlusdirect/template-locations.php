<?php /* Template Name: Locations */ ?>
<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<main id="main">
<section id="intro" class="section row first grey overlap-bottom gutters">
	<div class="section-inner">
		<div class="section-content">
			<div class="row">

<div class="small-12  columns heading-right">
<h2 class="block-heading"><span><em>Wherever your</em></span><span><em>business is located...</em></span><span class="secondary"><em>were worldwide.</em></span></h2>
	</div>
</div>
</div>

</div>
</div>
</section>
<section  id="locations" class="section row light-grey above skewed offset-up gutters overlap-bottom">
	<div class="section-inner">
<div class="section-content">

<div class="row">
<div class="small-12 columns">
<form id="filter" method="post" action="/">
	<div class="row">
	<div class="small-12 medium-6 large-4 large-offset-2 columns">
<select name="service" id="service"><option value="">All Services</option><option value="">Hardware maintenance agreements</option></select>
</div>
<div class="small-12 medium-6 large-4 columns end">
<select name="country" id="country"><option value="">All Countries</option><option value="">United Kingdom</option></select>
</div>
</div>
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
		<div id="map" class="map">map</div>
	</div>
</div>


</div>
</section>

<!--testimonials-->
<section  class="section row red-blue-heading blue-sub-heads blue-btns pac skewed centered-text yellow offset-up spaced behind straight-top">
	<div class="section-inner">
	<div class="section-content">
<h3 class="centered-text">Global Offices</h3>
<p>Besides our Head Office in United Kingdom, we have offices in Australia, Spain, Senegal, Nambia, Mozambique and Las Vegas. </p>
<footer class="clearfix"><a href="" class="read-more"><span>View all our locations</span></a></footer>


</div>
<div class="skewed-bg"></div>
</div>
</section>
<!--/testimonials-->
<!--call back form-->
<section id="callback" class="section row white-sub-heads skewed centered-text black">
	<div class="section-inner">
	<div class="section-content">
<h2 class="block-heading"><span><em>Not sure what you need?</em></span></h2>
<h3>We'll be in touch to help</h3>
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




<section id="contact" class="section yellow-white-heading yellow-btns centered-text">
	<div class="section-inner">
		<div class="section-content">
<h2 class="block-heading"><span><em>Call us today on</em></span></h2>
<p class="big">UK: <a href="tel:">+44 (0)113 887 8650</a><br />USA: <a href="tel:">+1 727 2164 309</a></p>
<a href="" class="read-more"><span>Contact us</span></a>
</div>
</div>
	</section>
	</main>

<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 