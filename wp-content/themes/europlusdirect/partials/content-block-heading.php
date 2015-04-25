	<?php
	if(get_field('header_caption',$page->ID)):
		?>
	<h2 class="block-heading">
		<?php 
while(the_repeater_field('header_caption',$page->ID)): 
list($src,$w,$h) = wp_get_attachment_image_src(get_sub_field('image'), 'full');
$size = get_sub_field('text_block_size');
$colour = get_sub_field('text_block_colour');
$text = get_sub_field('text_block_text');
$offset = get_sub_field('text_block_offset');
switch ($offset){
	case 'left':
	$offset_class=" shift-left-55";
	break;
	case 'right':
	$offset_class=" shift-right-55";
	break;
	default:
	$offset_class='';
	break;
}
?>
<span class="line"><span class="block<?php if($size=='small'):?> small<?php endif ?><?php if($colour=='secondary'):?> secondary<?php endif ?><?php echo $offset_class ?>"><?php echo $text ?></span></span>
<?php endwhile ?>
</h2>
<?php endif ?>