<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://mysevenacademy.com
 * @since      1.0.0
 *
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sevenacademycustom
 * @subpackage Sevenacademycustom/admin
 * @author     My Seven Academy - Webmaster Jeshua <Jeshua.vega@mysevensuite.com>
 */
class Sevenacademycustom_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sevenacademycustom-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sevenacademycustom-admin.js', array( 'jquery' ), $this->version, false );
	}

	/**
	* Allow SVG uploads for admins.
	*
	* @since    1.0.0
	*/
	public function ss_allow_admin_svg_uploads() {

		// Only for admins
		if ( current_user_can( 'administrator' ) ) {
			
			// Allow SVG
			add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

				global $wp_version;
				if ( $wp_version !== '4.7.1' ) {
				return $data;
				}
			
				$filetype = wp_check_filetype( $filename, $mimes );
			
				return [
					'ext'             => $filetype['ext'],
					'type'            => $filetype['type'],
					'proper_filename' => $data['proper_filename']
				];
			
			}, 10, 4 );
			
			function cc_mime_types( $mimes ){
				$mimes['svg'] = 'image/svg+xml';
				return $mimes;
			}
			add_filter( 'upload_mimes', 'cc_mime_types' );
			
			function fix_svg() {
				echo '<style type="text/css">
					.attachment-266x266, .thumbnail img {
						width: 100% !important;
						height: auto !important;
					}
					</style>';
			}
			add_action( 'admin_head', 'fix_svg' );

		}

	}

	/**
	* Current year shortcode
	*
	* @since    1.0.0
	*/
	public function ss_year_shortcode() {

		$year = date_i18n ('Y');
		return $year;

	}

}
