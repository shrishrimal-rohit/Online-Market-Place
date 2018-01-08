<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $sub_title_enable
 * @var $sub_title
 * @var $sub_title_style
 * @var $separator_enable
 * @var $align
 * @var $css
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Insight_Title
 */

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div class="insight-ajax">
	<?php var_dump( $posts ); ?>
	<br/>-----<br/>
	<?php var_dump( $taxonomies ); ?>
</div>
