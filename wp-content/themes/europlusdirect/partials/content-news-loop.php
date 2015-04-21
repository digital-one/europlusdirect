<?php list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'medium-image'); ?>
<li>
	<article class="story nested-section white blue-sub-heads">
			<figure><a href="<?php the_permalink()?>" title="<?php the_title() ?>"><img src="<?php echo $src ?>" /></a></figure>
			<div class="content-wrap">
				<div class="content">
		<h3><a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title() ?></a></h3><p><small><time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(__( 'jS F Y' )) ?></time></small></p>
<p><?php the_excerpt() ?></p>
</div>
</div></article>
</li>