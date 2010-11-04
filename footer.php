<div id="footer">
  <div class="wrap">
	
	<div id="footerwrap">
  
  <?php if(is_page(1146) || $post->post_parent=="1146" ) { ?>  	
<a href="http://www1.cuny.edu/news/alert.html"><img src="<?php bloginfo('template_directory'); ?>/img/cuny-alert.jpg" style="float: right;" alt="CUNY A!ert" /></a>
  <?php } ?>
  
<a href="http://www.cuny.edu/"><img src="<?php bloginfo('template_directory'); ?>/images/logos/cuny-cube_s30.jpg" height="30px" width="30px" style="float: right;" alt="CUNY" /></a>
  

&copy; <?php echo date('Y'); ?> <a href="http://www.journalism.cuny.edu/">Graduate School of Journalism</a> | <a href="http://cuny.edu/">City University of New York</a><br />
219 W. 40th Street | New York, NY 10018 | <a href="<?php bloginfo('url'); ?>/about/map-and-directions/">Map and Directions</a> | <a href="<?php bloginfo('url'); ?>/about/campus-facilities/hours-of-operation/">Hours of Operation</a><br />
<a href="http://www.cuny.edu/about/administration/offices/ehsrm/flu.html">H1N1 Info</a> | <a href="<?php bloginfo('url'); ?>/contact-us/">Contact Us</a> | <a href="http://www.cuny.edu/employment.html">Employment</a> | <a href="https://cunyjschool.wufoo.com/forms/web-feedback-form/">Web Feedback</a> | <a href="<?php bloginfo('url'); ?>/site-credits/">Site Credits</a> | <a href=" 
http://assistive.usablenet.com/tt/<?php bloginfo('url'); ?>">Text-Only</a>

  </div>

</div>

</div>

<!-- Clicky analytics tag -->
<?php if ( get_bloginfo('url') == 'http://www.journalism.cuny.edu' ) : ?>
	<script src="http://static.getclicky.com/js" type="text/javascript"></script>
	<script type="text/javascript">clicky.init(249402);</script>
	<noscript><p style="display:none;"><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/249402ns.gif" /></p></noscript>
<?php else: ?>
	<script src="http://static.getclicky.com/js" type="text/javascript"></script>
	<script type="text/javascript">clicky.init(263275);</script>
	<noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/263275ns.gif" /></p></noscript>
<?php endif; ?>
<!-- End Clicky analytics -->

  <?php wp_footer(); ?>

	<!-- New site ^DB 7/27 -->
        
</body>
</html>
