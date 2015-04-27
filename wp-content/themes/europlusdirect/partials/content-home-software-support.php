<div class="small-12 large-6 columns red blue-btns white-sub-heads">
<div id="software-support" class="nested-section-content section-content-inner">
<?php include( locate_template( 'partials/content-block-heading.php' )); ?>
<?php echo $page->post_content ?>
<p><a href="<?php echo get_field('button_link',$page->ID)?>" class="read-more" title="<?php echo get_field('button_label',$page->ID)?>"><span class="inner"><?php echo get_field('button_label',$page->ID)?></span></a></p>
</div>
</div>