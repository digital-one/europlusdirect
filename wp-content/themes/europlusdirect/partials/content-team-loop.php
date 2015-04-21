<!--person-->
<?php
list($src,$w,$h) = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'medium-image');
			$email = get_field('email_address',get_the_ID());
			$linkedin = get_field('linkedin',get_the_ID());
			?>
	<li>
<div class="nested-section white blue-sub-heads person">
			<figure><img src="<?php echo $src ?>" alt="<?php the_title() ?>" /></figure>
			<div class="content-wrap">
				<div class="content">
		<h3><?php the_title() ?></h3><h4><?php echo get_field('job_title',get_the_ID()) ?></h4>
<?php the_content() ?>
<footer><ul>

<?php if(!empty($email)):?><li><a href="mailto:<?php echo $email ?>" class="mail" title="Email <?php the_title() ?>">Email</a></li><?php endif ?><?php if(!empty($linkedin)):?><li><a href="<?php echo $linkedin ?>" class="linkedin" target="_blank" title="Linkedin">Linkedin</a></li><?php endif ?></ul></footer>
</div>
</div></div>
</li>
<!--/person-->