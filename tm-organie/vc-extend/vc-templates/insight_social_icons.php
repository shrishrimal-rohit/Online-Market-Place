<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $style
 * @var $image
 * @var $box_bg_color
 * @var $title_1
 * @var $title_2
 * @var $title_3
 * @var $content
 * @var $link
 * @var $css
 * @var $el_class
 * @var $datetime
 * @var $price
 * @var $day_singular
 * @var $days_plural
 * @var $hour_singular
 * @var $hours_plural
 * @var $minute_singular
 * @var $minutes_plural
 * @var $second_singular
 * @var $seconds_plural
 * Shortcode class
 * @var $this WPBakeryShortCode_Insight_Featured_Product
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

?>
<div class="insight-social-icons <?php echo esc_attr( $el_class . ' ' . $align ) ?>">
	<?php
	$social_link = Insight::setting( 'social_link' );
	if ( ! empty( $social_link ) ) {
		foreach ( $social_link as $key => $row_values ) { ?>
			<a class="hint--top hint--bounce hint--success"
			   aria-label="<?php echo esc_html( $row_values['tooltip'] ); ?>"
			   href="<?php echo esc_url( $row_values['link_url'] ) ?>">
				<i class="fa <?php echo esc_attr( $row_values['icon_class'] ); ?>"></i>
			</a>
			<?php
		}
	}
	?>
</div>
