<div class="footer">
	
	<div class="wrap primary-footer">
		
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
