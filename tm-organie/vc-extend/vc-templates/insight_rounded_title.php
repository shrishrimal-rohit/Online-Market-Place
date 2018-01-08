<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $sub_title_enable
 * @var $background_image
 * @var $el_class
 * @var $this WPBakeryShortCode_Insight_Rounded_Title
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

if ( $background_image ) {
	$background_image = Insight_Helper::img_fullsize( $background_image );
}

?>
<div class="insight-rounded-title <?php echo esc_attr( $el_class ) ?>">
	<?php if ( ! empty( $background_image ) && is_string( $background_image ) ) { ?>
		<div class="rounded-title">
			<div class="title"><?php echo esc_html( $title ); ?></div>
			<div class="sub-title"><?php echo esc_html( $sub_title ); ?></div>
		</div>
		<div class="image">
			<img src="<?php echo esc_url( $background_image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
		</div>
	<?php } ?>
</div>
