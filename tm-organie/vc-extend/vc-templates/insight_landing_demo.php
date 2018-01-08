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

//link
$link     = vc_build_link( $link );
$link_url = ( isset( $link['url'] ) ) ? $link['url'] : '';

//image
if ( $image ) {
	$image = Insight_Helper::img_fullsize( $image );
}
?>

<div class="insight-landing-demo type-<?php echo esc_attr( $type ); ?>">
	<?php if ( $type == '01' ) { ?>
		<a href="<?php echo esc_url( $link_url ); ?>">
			<div class="image"><img src="<?php echo esc_url( $image ); ?>"/></div>
			<div class="title"><?php echo esc_html( $title ); ?></div>
		</a>
	<?php } else { ?>
		<div class="inner">
			<div class="image"><img src="<?php echo esc_url( $image ); ?>"/></div>
			<div class="content">
				<div class="title"><?php echo esc_html( $title ); ?></div>
				<div class="text"><?php echo esc_html( $text ); ?></div>
			</div>
		</div>
	<?php } ?>
</div>
