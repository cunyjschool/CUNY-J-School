<div class="footer">
	
	<div class="wrap primary-footer">
		
		<div class="google-map float-right">
			<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=219+W+40th+St,+New+York,+NY+10018&aq=0&sll=40.753564,-73.98644&sspn=0.01024,0.022638&ie=UTF8&hq=&hnear=219+W+40th+St,+New+York,+10018&ll=40.755116,-73.986343&spn=0.005323,0.011319&z=17" title="Get directions to the CUNY Graduate School of Journalism on Google Maps"><img src="<?php bloginfo('template_directory'); ?>/images/logos/cuny-cube_s30.jpg" height="30px" width="30px" class="float-right" id="cuny-footer-logo" alt="CUNY" /></a>
		</div>
			
		<h4><a href="<?php bloginfo( 'url' ); ?>">CUNY Graduate School of Journalism</a></h4>
		
		<?php 
			$args = array(
				'theme_location' => 'footer_navigation',
				'fallback_cb' => false,
				'container_class' => 'footer-navigation-wrap',
				'menu_class' => 'footer-navigation',
			);
			wp_nav_menu( $args );
		?>
		
		<p class="contact">219 W. 40th Street, New York, NY 10018 | (646) 758-7800</p>
		
		<div class="clear-both"></div>
		
	</div><!-- END .wrap -->
	
	<div class="wrap secondary-footer">
		<p>&copy; <?php echo date( 'Y' ); ?> CUNY Graduate School of Journalism</p>
	</div>
	
</div><!-- END .footer -->

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
<!-- END Clicky analytics -->

	<?php wp_footer(); ?>
        
</body>
</html>
