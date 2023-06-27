<?php
include 'customizer-header.php';
include 'customizer-font.php';
include 'customizer-card.php';
include 'customizer-button.php';
include 'customizer-shadow.php';
include 'customizer-border-radius.php';
include 'customizer-footer.php';

class THE_HOUSE_FOREVER_WINS_Customizer
{
	public function __construct()
	{
		add_theme_support('custom-logo');
		add_theme_support("custom-background");
		add_action('wp_head', [$this, 'load_css']);

		new THFW_Customizer_Header();
		new THFW_Customizer_Card();
		new THFW_Customizer_Buttons();
		new THFW_Customizer_Font();
		new THFW_Customizer_Border_Radius();
		new THFW_Customizer_Shadow();
		new THFW_Customizer_Footer();
	}

	function load_css()
	{
?>
		<style>
			:root {
				--thfw-header-background-color-hover: #000;
				--thfw-header-text-color-hover: #fff;
				--thfw-color-primary: #fff;
				--thfw-color-secondary: #000;
				--thfw-color-tertiary: red;
				--thfw-font-color: #000;
				--thfw-font-color-hover: #fff;
				--thfw-font-heading: "'Times New Roman', Times, serif";
				--thfw-font-body: "'Anonymous Pro', monospace";
				--thfw-border-radius: 0.25em;
				--thfw-box-shadow: 0 0 1em rgba(0, 0, 0, 0.85);
				--thfw-box-shadow-hover: unset;
				--thfw-box-shadow-input: inset 0 0 0.5em rgba(0, 0, 0, 0.85);
			}
		</style>
<?php
	}
}
