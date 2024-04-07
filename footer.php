<footer>

	<?php
	include_once(ABSPATH . 'wp-admin/includes/plugin.php');
	
	if (is_plugin_active('seven-tech-communications/SEVEN_TECH_Communications.php')) {
		do_shortcode('[seven-tech-social-bar]');
	}
	?>

	<p class="legal">Copyright &copy; 2010-<?php echo date("Y"); ?>
		<?php if (!get_theme_mod('footer_company')) {
			echo 'Your Company Name Here';
		} else {
			echo esc_html(get_theme_mod('footer_company'));
		} ?>. All Rights Reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>