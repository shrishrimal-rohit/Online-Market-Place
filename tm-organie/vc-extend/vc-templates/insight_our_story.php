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

if ( $signature_image ) {
	$signature_image = Insight_Helper::img_fullsize( $signature_image );
}

?>
<div class="insight-our-story <?php echo esc_attr( $el_class ) ?>">
	<div class="title">
		<div class="main-title"><?php echo esc_html( $title ); ?></div>
		<div class="sub-title"><?php echo esc_html( $sub_title ); ?></div>
	</div>
	<div class="content">
		<?php echo wp_kses( $content, array(
			'span' => array(
				'class' => array(),
			),
			'p'    => array(),
		) ); ?>
	</div>
	<div class="author">
		<div class="signature">
			<img src="<?php echo esc_url( $signature_image ); ?>" alt="<?php echo esc_attr( $name ); ?>">
		</div>
		<div class="name"><?php echo esc_html( $name ); ?></div>
		<div class="tagline"><?php echo esc_html( $tagline ); ?></div>
	</div>
</div>
