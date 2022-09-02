<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://lumel.com
 * @since      1.0.0
 *
 * @package    Lazy_Iframes
 * @subpackage Lazy_Iframes/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Lazy_Iframes
 * @subpackage Lazy_Iframes/public
 * @author     Puneet & KG <puneett@lumel.com & kg@lumel.com>
 */
class Lazy_Iframes_Public {

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
		 * defined in Lazy_Iframes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lazy_Iframes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lazy-iframes-public.css', array(), $this->version, 'all' );

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
		 * defined in Lazy_Iframes_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lazy_Iframes_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lazy-iframes-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Lazy videos shortcode defination
	 *
	 * @since    1.0.0
	 */
	public function add_lazy_iframe_shortcode() { 

		add_shortcode( 'lazy_iframe' , array( $this , 'lazy_iframe_shortcode_callback' ) );

	}

	/**
	 * Lazy videos shortcode callback
	 *
	 * @since    1.0.0
	 */
	public function lazy_iframe_shortcode_callback( $atts ) {
		
		$atts = shortcode_atts(
			array(
				'url' => '',
				'poster' => '',
				'lazy_loading' => 'true'
	        ) , 
	     	$atts , 
	     	'lazy_iframe' 
	    );

		$url 		= $atts[ 'url' ];
		$poster 	= $atts[ 'poster' ];
		$loading	= $atts[ 'lazy_loading' ];

		if(empty($poster) && $poster=="") {
			$output = '<p style="color:red;">[poster] - Poster is a required parameter';
			return $output;
		}
		ob_start();
		?>

		<div class="lazy-iframe-container" data-url="<?php echo $url; ?>">
			<div class="lazy-iframe-box">
				<div class="lazy-iframe-wrapper" style="padding-top:56.2963%"></div>
			</div>
			<div class="lazy-iframe-overlay">
				<img class="lazy-iframe-overlay-image" src="<?php echo $poster; ?>" width="100%" <?php echo ( $loading == "true" ) ? 'loading="lazy"' : '';  ?> />
				<div class="lazy-iframe-overlay-hover"></div>	
				<div class="lazy-iframe-play-icon"></div>
			</div>	
		</div>

		<?php

		$output = ob_get_clean();
		return $output;

	}

}
