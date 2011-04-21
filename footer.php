<div class="footer">
	
	<div class="wrap primary-footer">
		
		<a href="http://www.cuny.edu/"><img src="<?php bloginfo('template_directory'); ?>/images/logos/cuny-cube_s30.jpg" height="30px" width="30px" class="float-right" id="cuny-footer-logo" alt="CUNY" />
			
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
		
	</div><!-- END .wrap -->
	
	<div class="wrap secondary-footer">
		<p>&copy;<?php echo date( 'Y' ); ?> CUNY Graduate School of Journalism</p>
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
