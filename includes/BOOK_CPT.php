<?php
use PadiabTheme\Interface_Classes_Init;

defined( 'ABSPATH' ) || exit;

/**
 * BOOK_CPT setup
 *
 * @package BOOK_CPT
 * @since   1.0.0
 */
final class BOOK_CPT
{
    /**
	 * The single instance of the class.
	 *
	 * @var BOOK_CPT
	 * @since 1.0.0
	 */
	protected static $_instance = null;

    /**
	 * Main BOOK_CPT Instance.
	 *
	 * Ensures only one instance of BOOK_CPT is loaded or can be loaded.
	 *
	 * @since 2.1
	 * @static
	 * @return BOOK_CPT - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}


    private function classes_init()
    {


    }

	/**
	 * Install sub-install classes which install their classes in its directory
	 * @param Interface_Classes_Init $installClass
	 * @return Interface_Classes_Init
	 */
	private function create_install_object(Interface_Classes_Init $installClass)
	{
		return $installClass;
	}

    public function __construct()
    {
        $this->classes_init();
    }

}