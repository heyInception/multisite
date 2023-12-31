<?php

namespace Yoast\WP\SEO\Premium\Integrations\Admin;

use WPSEO_Admin_Asset_Manager;
use WPSEO_Taxonomy_Meta;
use Yoast\WP\SEO\Conditionals\Admin_Conditional;
use Yoast\WP\SEO\Integrations\Integration_Interface;
use Yoast\WP\SEO\Premium\Conditionals\Cornerstone_Enabled_Conditional;
use Yoast\WP\SEO\Premium\Presenters\Icons\Checkmark_Icon_Presenter;
use Yoast\WP\SEO\Premium\Presenters\Icons\Cross_Icon_Presenter;
use Yoast\WP\SEO\Premium\Conditionals\Term_Overview_Or_Ajax_Conditional;
use Yoast\WP\SEO\Premium\Helpers\Current_Page_Helper;

/**
 * Cornerstone_Taxonomy_Column_Integration class.
 *
 * phpcs:disable Yoast.NamingConventions.ObjectNameDepth.MaxExceeded
 */
class Cornerstone_Taxonomy_Column_Integration implements Integration_Interface {

	/**
	 * Name of the column.
	 *
	 * @var string
	 */
	const CORNERSTONE_COLUMN_NAME = 'wpseo-cornerstone';

	/**
	 * Holds the Current_Page_Helper instance.
	 *
	 * @var Current_Page_Helper
	 */
	private $current_page_helper;

	/**
	 * Returns the posted/get taxonomy value if it is set.
	 *
	 * @param Current_Page_Helper $current_page_helper The Current_Page_Helper.
	 */
	public function __construct( Current_Page_Helper $current_page_helper ) {
		$this->current_page_helper = $current_page_helper;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_conditionals() {
		return [
			Admin_Conditional::class,
			Term_Overview_Or_Ajax_Conditional::class,
			Cornerstone_Enabled_Conditional::class,
		];
	}

	/**
	 * {@inheritDoc}
	 */
	public function register_hooks() {
		\add_action( 'admin_init', [ $this, 'register_init_hooks' ] );
		\add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_assets' ] );
	}

	/**
	 * Register hooks that need to be registered after `init` due to all post types not yet being registered.
	 */
	public function register_init_hooks() {
		$taxonomy = $this->current_page_helper->get_current_taxonomy();
		if ( $taxonomy ) {
			\add_filter( 'manage_edit-' . $taxonomy . '_columns', [ $this, 'add_cornerstone_column' ] );
			\add_filter( 'manage_' . $taxonomy . '_custom_column', [ $this, 'column_content' ], 10, 3 );
		}
	}

	/**
	 * Enqueues the assets needed for the integration to work.
	 *
	 * @return void
	 */
	public function enqueue_assets() {
		\wp_enqueue_style( WPSEO_Admin_Asset_Manager::PREFIX . 'premium-post-overview' );
	}

	/**
	 * Adds the cornerstone column for the term overview.
	 *
	 * @param array $columns Array with columns.
	 *
	 * @return array The extended array with columns.
	 */
	public function add_cornerstone_column( $columns ) {
		if ( ! \is_array( $columns ) ) {
			return $columns;
		}

		$columns[ self::CORNERSTONE_COLUMN_NAME ] = \sprintf(
			'<span class="yoast-column-cornerstone yoast-column-header-has-tooltip" data-tooltip-text="%1$s"><span class="screen-reader-text">%2$s</span></span>',
			\esc_attr__( 'Is this cornerstone content?', 'wordpress-seo-premium' ),
			\esc_html__( 'Cornerstone content', 'wordpress-seo-premium' )
		);

		return $columns;
	}

	/**
	 * Displays the column content for the given column.
	 *
	 * @param string $content     The current content of the column.
	 * @param string $column_name The name of the column.
	 * @param int    $term_id     ID of requested taxonomy.
	 *
	 * @return string
	 */
	public function column_content( $content, $column_name, $term_id ) {
		$is_cornerstone = (int) WPSEO_Taxonomy_Meta::get_term_meta( $term_id, $this->current_page_helper->get_current_taxonomy(), 'is_cornerstone' );

		if ( $column_name === self::CORNERSTONE_COLUMN_NAME ) {
			if ( $is_cornerstone ) {
				// phpcs:disable WordPress.Security.EscapeOutput -- Reason: The Icons contains safe svg.
				echo new Checkmark_Icon_Presenter( 20 );

				return;
			}

			echo new Cross_Icon_Presenter( 20 );
		}

		return $content;
	}
}
