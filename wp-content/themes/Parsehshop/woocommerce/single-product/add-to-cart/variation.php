<?php
/**
 * Single variation display
 *
 * This is a javascript-based template for single variations (see https://codex.wordpress.org/Javascript_Reference/wp.template).
 * The values will be dynamically replaced after selecting attributes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.5.0
 */

defined( 'ABSPATH' ) || exit;

?>
<script type="text/template" id="tmpl-variation-template">
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">وضعیت :</small>
        <small style="color: #43A047">	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div></small>
    </div>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">قمیت محصول :</small>
        <small class="text-muted"><div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div></small>
    </div>
    <hr>
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>


</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p><?php esc_html_e( 'Sorry, this product is unavailable. Please choose a different combination.', 'woocommerce' ); ?></p>
</script>
