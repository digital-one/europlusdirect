<section class="section row yellow blue-btns gutters above centered-text">
<div class="section-inner">
<div class="section-content">
<h3 class="centered-text"><?php echo $page->post_title ?></h3>
<?php echo $page->post_content ?>

<footer class="clearfix">
<a href="<?php echo get_button_link($page->ID)?>" class="read-more"><span class="inner"><?php echo get_field('button_label',$page->ID)?></span></a>
<?php /* <a class="read-more"><span class="inner">View all our locations</span></a> */ ?>
</footer></div>
</div>
</section>