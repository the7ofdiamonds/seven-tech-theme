<?php
namespace SEVEN_TECH\CSS\Customizer;

class Customizer
{
	public function __construct()
	{
		add_theme_support('custom-logo');
		add_theme_support("custom-background");
		add_action('wp_head', [$this, 'load_css']);

		
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
