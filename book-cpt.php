<?php
/**
 * @package book-cpt
 * Plugin Name: Book Post Type
 * Plugin URI: https://github.com/emowebdev/book-cpt
 * Description: A plugin which add book post type to your WordPress site
 * Author: Emoweb
 * Author URI: https://emoweb.dev
 * Version: 1.0.0
 * Requires at least: 5.8
 * Tested up to: 6.2
 * Text Domain: book_cpt
 * Domain Path: /languages
 **/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'book_cpt_init' ) ) {
	add_action( 'plugins_loaded', 'book_cpt_init', 11 );

	function book_cpt_init() {


        
        require_once __DIR__ . '/vendor/autoload.php';

        // Include the main BOOK_CPT class.
        if ( ! class_exists( 'BOOK_CPT', false ) ) {
            include_once __DIR__ . '/includes/BOOK_CPT.php';
        }

        /**
         * Returns the main instance of EMO_LA.
         *
         * @since  1.0.0
         * @return BOOK_CPT
         */
        function book_cpt() {
            return BOOK_CPT::instance();
        }

        // Global for backwards compatibility.
        $GLOBALS['book_cpt'] = book_cpt();
        
        /**
         * Load the plugin text domain for translation.
         */
        add_action( 'init', 'book_cpt_load_textdomain' );

		if ( ! function_exists( 'book_cpt_load_textdomain' )){
            function book_cpt_load_textdomain() {
                load_plugin_textdomain( 'book_cpt', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
            }
		}
    }
} else {
	add_action( 'admin_notices', 'book_cpt_notice_faulty' );
}


if ( ! function_exists( 'book_cpt_notice_faulty' ) ) {
	function book_cpt_notice_faulty() {
		?>
        <div class="error">
            <p>Seems there is an error in installation of <strong>Book Post Type</strong>. Please
                delete the plugin and install it again.</p>
        </div>
		<?php
	}
}
