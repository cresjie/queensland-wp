	<footer id="footer" class="transparent-black">
			<div class="container">
				
				<?php 
	            	wp_nav_menu( array(
						'theme_location' => 'secondary',
						'menu_class' => 'footer-links list-inline text-right',
						'container' => 'ul'
					) );
	            ?>
			</div>
				
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>