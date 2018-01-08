<?php
/**
 * Quickview template
 */

if ( post_password_required() ) {
	echo get_the_password_form();
	die();

	return;
}

global $post, $product;
?>

<div id="woo-quickview">
	<div class="woocommerce container single-product">
		<div class="product product-container">
			<div class="row">
				<div class="col-md-6 images quickview-carousel">
					<?php
					$attachment_ids = $product->get_gallery_attachment_ids();
					if ( sizeof( $attachment_ids ) > 0 ) {
						foreach ( $attachment_ids as $attachment_id ) {
							?>
							<img src="<?php echo esc_attr( wp_get_attachment_url( $attachment_id ) ); ?>" alt=""/>
							<?php
						}
					} else if ( has_post_thumbnail() ) {
						$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
						echo get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
							'title' => $props['title'],
							'alt'   => $props['alt'],
						) );
					} else {
						echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), esc_html__( 'Placeholder', 'tm-organie' ) ), $post->ID );
					}
					?>
				</div>

				<div class="col-md-6 summary entry-summary">
					<div class="summary-inner">
						<?php
						woocommerce_show_product_sale_flash();
						do_action( 'woocommerce_single_product_summary' );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	<?php
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	$assets_path = esc_url( str_replace( array( 'http:', 'https:' ), '', WC()->plugin_url() ) ) . '/assets/';
	$frontend_script_path = $assets_path . 'js/frontend/';
	if ( defined( INSIGHT_CORE_PATH ) ) {
		$ic_swatches = INSIGHT_CORE_PATH . 'inc/swatches/assets/js/script.js';
	} else {
		$ic_swatches = 'http://organiee.thememove.com/wp-content/plugins/insight-core/inc/swatches/assets/js/scripts.js';
	}
	?>
	jQuery( document ).ready( function( $ ) {
		$.getScript( '<?php echo esc_js( $frontend_script_path . 'add-to-cart-variation' . $suffix . '.js' ); ?>' );
		$.getScript( '<?php echo esc_js( $ic_swatches ); ?>' );
	} );
</script>
<?php
die();
?>
