<footer>
	
	<?php 
		if ( is_active_sidebar( 'thfw_footer' ) ) {
			dynamic_sidebar( 'thfw_footer' );
		}
	?>

	<p class="legal">Copyright &copy; 2010-<?php echo date("Y");?> J.C. LYONS ENTERPRISES LLC. All Rights Reserved.</p>
	<?php wp_footer(); ?>
</footer>
</body>
</html>