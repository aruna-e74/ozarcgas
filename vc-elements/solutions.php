<?php
// don't load directly
if (!defined('ABSPATH')) die('-1');

class VCExtendSolutions {
	function __construct() {
		// We safely integrate with VC with this hook
		add_action( 'init', array( $this, 'integrateWithVC' ) );

		// Use this when creating a shortcode addon
		add_shortcode( 'solutions', array( $this, 'renderMyWidget' ) );

		// Register CSS and JS
		add_action( 'wp_enqueue_scripts', array( $this, 'loadCssAndJs' ) );
	}

	public function integrateWithVC() {
		// Check if Visual Composer is installed
		if ( ! defined( 'WPB_VC_VERSION' ) ) {
			// Display notice that Visual Compser is required
			add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
			return;
		}

		/*
		Add your Visual Composer logic here.
		Lets call vc_map function to "register" our custom shortcode within Visual Composer interface.

		More info: http://kb.wpbakery.com/index.php?title=Vc_map
		*/
		vc_map( array(
			"name" => __("Solutions", 'vc_extend'),
			"description" => __("", 'vc_extend'),
			"base" => "solutions",
			"class" => "",
			"controls" => "full",
			"icon" => get_template_directory_uri() . '/vc-elements/widget-icon.png', // or css class name which you can reffer in your css file later. Example: "vc_extend_my_class"
			"category" => __('Ozarc', 'js_composer'),
			//'admin_enqueue_js' => array(plugins_url('assets/vc_extend.js', __FILE__)), // This will load js file in the VC backend editor
			//'admin_enqueue_css' => array(plugins_url('assets/vc_extend_admin.css', __FILE__)), // This will load css file in the VC backend editor
			"params" => array(
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => __("Title", 'vc_extend'),
					"param_name" => "title",
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => __("Content", 'vc_extend'),
					"param_name" => "content",
				),
				array(
					"type" => "label",
					"holder" => "div",
					"class" => "",
					"heading" => __("Please Press Save to add all Alumni to the page", 'vc_extend'),
					"param_name" => "button_text",
				),
			)
		) );
	}

	/*
	Shortcode logic how it should be rendered
	*/
	public function renderMyWidget($atts, $content = null) {
		extract(shortcode_atts(array(
			'title' => '',
		), $atts));
		$atts['content'] = $content;

		$output = '';
		$output .=	'<div class="solutions-wrapper">
						<div class="solutions-title">'.$atts['title'].'</div>
						<div class="solutions-content">'.$content.'<span class="ellipsis">...</span></div>
					</div>';

		return $output;
	}

	/*
	Load plugin css and javascript files which you may need on front end of your site
	*/
	public function loadCssAndJs() {
		//wp_register_style( 'vc_extend_style', plugins_url('assets/vc_extend.css', __FILE__) );
		//wp_enqueue_style( 'vc_extend_style' );

		// If you need any javascript files on front end, here is how you can load them.
		//wp_enqueue_script( 'vc_extend_js', plugins_url('assets/vc_extend.js', __FILE__), array('jquery') );
	}

	/*
	Show notice if your plugin is activated but Visual Composer is not
	*/
	public function showVcVersionNotice() {
		$plugin_data = get_plugin_data(__FILE__);
		echo '
		<div class="updated">
		<p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
		</div>';
	}
}
// Finally initialize code
new VCExtendSolutions();
