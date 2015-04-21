<li>
		<article>
		<header><h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
<p><strong>Location:</strong> <?php echo get_field('career_location',get_the_ID()); ?><br /><strong>Salary:</strong> <?php if(!empty($salary)):?><?php echo get_field('career_salary',get_the_ID()); ?><?php else: ?>Neg<?php endif ?></p>
</header>
			<p><?php the_excerpt() ?></p>
			<footer><p><a href="<?php the_permalink() ?>">Read more +</a></p></footer>
		</article>
	</li>