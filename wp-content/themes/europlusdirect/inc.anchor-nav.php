	<?php
	$args = array(
		'post_type'=>'page',
		'post_status'=>'publish',
     	'post_parent' => $post->ID,
     	'order_by' => 'menu_order',
     	'order' => 'ASC'
		);
	if($links = get_posts($args)): 
		?>
		<nav id="anchor-nav"><ul>
		<?php
		foreach($links as $link):
			?>
	<li><a href="#<?php echo $link->post_name ?>" title="<?php echo $link->post_title ?>"><?php echo $link->post_title ?></a></li>
<?php endforeach; ?>
</ul>
</nav>
<?php endif ?>
	
