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

// Get link
$link_html   = '';
$link        = vc_build_link( $link );
$link_url    = ( isset( $link['url'] ) ) ? $link['url'] : '';
$link_text   = ( isset( $link['title'] ) ) ? $link['title'] : '';
$link_target = ( isset( $link['target'] ) ) ? $link['target'] : '';
$link_rel    = ( isset( $link['rel'] ) ) ? $link['rel'] : '';

$link_align = $align != '' ? $align : 'center';
if ( ! empty( $link_text ) ) {
	$link_html = '<div class="insight-flower-button insight-align-' . esc_attr( $link_align ) . ' insight-flower-button-' . esc_attr( $color ) . '"><a class="' . $el_class . '" href="' . $link_url . '" target="' . $link_target . '" rel="' . $link_rel . '">' . $link_text . '</a></div>';
}

Insight_Helper::output( $link_html );

