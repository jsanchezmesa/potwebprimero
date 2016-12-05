</div><!-- #primary -->

	<footer id="main-footer">
		<div class="inner-footer">
			<div class="footer-content">
				<p><?php echo get_theme_mod('content_footer'); ?></p>
			</div><!-- .footer-content -->
			<nav class="footer-navbar">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'secondary',
					) );
				?>
			</nav><!-- .footer-navbar -->
			<h6>Apollo Segundo Theme by <a href="http://potenciandotuweb.com">Juan Sánchez</a></h6>
		</div><!-- .inner-footer -->
	</footer><!-- #main-footer -->
	<?php wp_footer(); ?>
</body>
</html>