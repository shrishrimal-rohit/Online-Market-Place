<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin installation and activation for WordPress themes
 *
 * @package InsightFramework
 * @since   0.9.7
 */
class Insight_Register_Plugins {

	/**
	 * Insight_Register_Plugins constructor.
	 */
	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', array( $this, 'register_required_plugins' ) );
	}

	public function register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
			array(
				'name'     => esc_html__( 'Insight Core', 'tm-organie' ),
				'slug'     => 'insight-core',
				'source'   => INSIGHT_CHILD_THEME_DIR . '/plugins/insight-core.zip',
				'version'  => '1.4.3',
				'required' => true,
			),
			array(
				'name'     => esc_html__( 'Visual Composer', 'tm-organie' ),
				'slug'     => 'js_composer',
				'source'   => INSIGHT_CHILD_THEME_DIR . '/plugins/js_composer.zip',
				'version'  => '5.4.2',
				'required' => true
			),
			array(
				'name'     => esc_html__( 'Revolution Slider', 'tm-organie' ),
				'slug'     => 'revslider',
				'source'   => INSIGHT_CHILD_THEME_DIR . '/plugins/revslider.zip',
				'version'  => '5.4.6',
				'required' => true,
			),
			array(
				'name'     => esc_html__( 'Vafpress Post Formats UI', 'tm-organie' ),
				'slug'     => 'vafpress-post-formats-ui',
				'source'   => INSIGHT_CHILD_THEME_DIR . '/plugins/vafpress-post-formats-ui.zip',
				'version'  => '1.99',
				'required' => true,
			),
			array(
				'name'     => esc_html__( 'WooCommerce', 'tm-organie' ),
				'slug'     => 'woocommerce',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'YITH WooCommerce Compare', 'tm-organie' ),
				'slug'     => 'yith-woocommerce-compare',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'YITH WooCommerce Wishlist', 'tm-organie' ),
				'slug'     => 'yith-woocommerce-wishlist',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'WooCommerce Product Bundle', 'tm-organie' ),
				'slug'     => 'woo-product-bundle',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'MailChimp for WordPress', 'tm-organie' ),
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Contact Form 7', 'tm-organie' ),
				'slug'     => 'contact-form-7',
				'required' => false,
			),
		);

		return $plugins;
	}

}
