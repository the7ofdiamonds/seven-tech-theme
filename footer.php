<footer>
	<?php 
		if ( is_active_sidebar( 'thfw_footer_social_icons' ) ) {
			dynamic_sidebar( 'thfw_footer_social_icons' );
		}
	?>

	<?php get_template_part('includes/part', 'contact');?>

	<?php 
		if ( is_active_sidebar( 'thfw_footer_menu' ) ) {
			dynamic_sidebar( 'thfw_footer_menu' );
		}
	?>
	<p class="legal">Copyright &copy; 2010-<?php echo date("Y");?> J.C. LYONS ENTERPRISES LLC. All Rights Reserved.</p>
</footer>
</body>
</html>