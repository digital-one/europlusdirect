<!--call back form-->
<?php $form = GFFormsModel::get_form_meta(1); 
  //  print_r($form);
?>
<section id="callback" class="section row white-sub-heads skewed centered-text black spaced">
	<div class="section-inner">
	<div class="section-content">
        <header>
<h2 class="block-heading"><span class="line"><span class="block"><?php echo $form['title'] ?></span></span></h2>
<h4><?php echo $form['description'] ?></h4>
</header>

<?php //gravity_form(1, false, false, false, '', true, 1);  ?>
<?php gravity_form(1, false, false, false, '', true, 1);  ?>

             </div>
                    <div class="skewed-bg"></div>
                  </div>
</section>
<!--/call back form-->