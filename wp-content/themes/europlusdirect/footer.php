<footer id="footer">
	<div class="row">
		<div class="small-12 columns">
<p class="address">Head Office: 2 Airport West, Lancaster Way, Leeds, West Yorkshire LS19 7ZA, United Kingdom<br />
<span><strong>Tel UK:</strong> <a href="tel:">+44 (0) 845 076 0061</a></span><span><strong>Tel USA:</strong> <a href="tel:">+1 727 2164 309</a></span></p>
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
<p><a href="" class="linkedin" title="Follow us on Linkedin">Follow us on <span>Linkedin</span></a></p>
    <p><small>&copy;<?php echo date('Y') ?> Europlus Direct Limited. All rights reserved. <a href="">Terms &amp; Conditions</a> | <a href="">Privacy Statement</a></small></p>

</div>
</div>
</footer>
<?php wp_footer() ?>