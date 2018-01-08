<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
?>
<div class="insight-separator-line <?php echo esc_attr( $el_class ) ?>"></div>
