<div class="small-12 large-6 columns blue white-sub-heads">
<div id="just-ask" class="nested-section-content section-content-inner second">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<p><a class="read-more" href="<?php echo get_field('button_link',$page->ID)?>" title="<?php echo get_field('button_label',$page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID)?></span></a></p>
</div>
</div>
