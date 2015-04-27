<section id="contact" class="section yellow-white-heading yellow-btns centered-text">
    <div class="section-inner">
        <div class="section-content">
<h2 class="block-heading"><span class="line"><span class="block"><?php _e('Want to protect your IT system in one easy step?','epd_theme'); ?></span></span><span class="line"><span class="block"><?php _e('Then call us today on','epd_theme'); ?></span></span></h2>
<p class="big"><a href="tel:">+44 (0)113 887 8650</a></p>
<a href="#" class="read-more"><span><?php _e('Contact Us','epd_theme'); ?></span></a>
</div>
</div>
    </section>
    </main>
<footer id="footer">
	<div class="row">
		<div class="small-12 columns">
<p class="address"><?php _e('Head Office','epd_theme'); ?>: 2 Airport West, Lancaster Way, Leeds, West Yorkshire LS19 7ZA, United Kingdom<br />
<span><strong>Tel:</strong> <a href="tel:">+44 (0) 845 076 0061</a></span></p>
<nav id="footer-menu"><?php
  wp_nav_menu( array(
        'menu'=>'Footer Menu',
        'container' => false, 
        'fallback_cb' => 'wp_page_menu'//,
        //'walker' => new subMenu()
        //'menu_class' => 'inline',
        //'link_after' => '<span></span>'
        )
    );
    ?></nav>
<p><a href="" class="linkedin" title="Follow us on Linkedin"><?php _e('Follow us on','epd_theme'); ?> <span>Linkedin</span></a></p>
    <p><small>&copy;<?php echo date('Y') ?> <?php _e('Europlus Direct Limited. All rights reserved.','epd_theme'); ?> <a href=""><?php _e('Terms &amp; Conditions','epd_theme'); ?></a> | <a href=""><?php _e('Privacy Statement','epd_theme'); ?></a></small></p>
</div>
</div>
</footer>
<?php wp_footer() ?>
</body>
</html>