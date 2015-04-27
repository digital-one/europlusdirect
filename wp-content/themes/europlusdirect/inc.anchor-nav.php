	<?php

	$args = array(
		'post_type'=>'page',
		'post_status'=>'publish',
		'posts_per_page' =>10,
     	'post_parent' => $post->ID,
     	'meta_key' => 'show_in_anchor_menu',
    	'meta_value' => 1,
    	'meta_compare' => '=',
     	'orderby' => 'menu_order',
     	'order' => 'ASC'
		);
	if($links = get_posts($args)): 
		?>
		<nav id="anchor-nav"><ul>
		<?php
		foreach($links as $link):
			$anchor_label = get_field('anchor_label',$link->ID);
			$label = !empty($anchor_label) ? $anchor_label : $link->post_title;
			?>
	<li><a href="#<?php echo get_field('anchor_link',$link->ID) ?>" title="<?php echo $link->post_title ?>"><?php echo $label ?></a></li>
<?php endforeach; ?>
</ul>
</nav>
<?php endif ?>
	
