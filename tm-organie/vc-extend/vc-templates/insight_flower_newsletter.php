<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $link
 * @var $style
 * @var $css
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Insight_Button
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

// Get css class
$el_class = $this->getExtraClass( $el_class );
if ( ! empty( $shortcode ) ) {
	?>
	<div class="insight-flower-newsletter <?php echo esc_attr( $el_class ); ?>">
		<div class="insight-flower-newsletter-title">
			<?php echo esc_html( $title ); ?>
		</div>
		<div class="insight-flower-newsletter-shortcode">
			<?php echo do_shortcode( $shortcode ); ?>
		</div>
	</div>
	<?php
}

