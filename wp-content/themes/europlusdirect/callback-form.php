<!--call back form-->
<?php
$form = GFAPI::get_form(1);
$title =icl_t( 'gravity_form',"{$form['id']}_title", $form['title'] );

$desc =icl_t( 'gravity_form',"{$form['id']}_description", $form['description'] );


//echo icl_t( 'gravity_form',"1_title","title"); 
?>

<section id="callback" class="section row white-sub-heads skewed centered-text black spaced">
	<div class="section-inner">
	<div class="section-content">
        <header>
<h2 class="block-heading"><span class="line"><span class="block"><?php echo $title ?></span></span></h2>
<h4><?php echo $desc ?></h4>
</header>

<?php //gravity_form(1, false, false, false, '', true, 1);  ?>
<?php gravity_form(1, false, false, false, '', true, 1);  ?>

             </div>
                    <div class="skewed-bg"></div>
                  </div>
</section>
<!--/call back form-->