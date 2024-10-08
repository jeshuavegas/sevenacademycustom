<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mysevenacademy.com
 * @since      1.0.0
 *
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/public
 * @author     My Seven Academy - Webmaster Jeshua <Jeshua.vega@mysevensuite.com>
 */
class Sevenacademycustom_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sevenacademycustom_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sevenacademycustom_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sevenacademycustom-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sevenacademycustom_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sevenacademycustom_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sevenacademycustom-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	* Current year shortcode
	*
	* @since    1.0.0
	*/
	public function ss_year_shortcode() {

		function return_year() {
			$year = date_i18n ('Y');
			return $year;
		}
		add_shortcode( 'ss_year', 'return_year' );

	}

}
