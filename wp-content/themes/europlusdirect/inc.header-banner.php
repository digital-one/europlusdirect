	<!--intro section-->
	<?php
	$style='';
	$class='';
	if(has_post_thumbnail($post->ID)):
	list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slide');
	$style = ' style="background-image:url(\''.$src.'\');"';
	$class='header-banner ';
	endif;
	?>
<section id="intro" class="<?php echo $class ?>section row first light-grey overlap-bottom gutters">
	<div class="section-inner"<?php echo $style; ?>>
		<div class="section-content">
			<div class="row">
<div class="small-12 large-6 columns">
		

</div>
<div class="small-12 large-6 columns heading-right">
	<?php
	if(get_field('header_caption')):
		?>
	<h2 class="block-heading">
		<?php 
while(the_repeater_field('header_caption')): 
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('image'), 'full');
$size = get_sub_field('text_block_size');
$colour = get_sub_field('text_block_colour');
$text = get_sub_field('text_block_text');
?>
<span class="line"><span class="block<?php if($size=='small'):?> small<?php endif ?><?php if($colour=='secondary'):?> secondary<?php endif ?>"><?php echo $text ?></span></span>
<?php endwhile ?>
</h2>
<?php endif ?>
	</div>
</div>
</div>

</div>
</div>
</section>
<!--/intro section-->