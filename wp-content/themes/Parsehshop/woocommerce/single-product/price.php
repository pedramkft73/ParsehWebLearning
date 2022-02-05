<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="row">
<div class="col-12 col-lg-7 "></div>
<div class="col-12 col-lg-5 product-price" id="my-custom-single-product-summery">
    <h6 class="text-muted mt-1">پیش فاکتور:</h6>
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">کد محصول:</small>
        <small class="text-muted"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></small>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">ارسال از :</small>
        <small style="color: #EB2F06;"><?php  if (function_exists('the_field')){the_field('shipping_from');} ?></small>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">وضعیت :</small>
        <small style="color: #43A047">	<div class="woocommerce-variation-availability"><?php  echo wc_get_stock_html( $product ); // WPCS: XSS ok. ?></div></small>
    </div>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
        <small class="text-muted">قمیت محصول :</small>
        <small class="text-muted"><div class="woocommerce-variation-price"><?php echo $product->get_price_html(); ?></div></small>
    </div>
    <hr>
<!--<p id="product-top-price" class="--><?php //echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?><!--">--><?php //echo $product->get_price_html(); ?><!--</p>-->
</div></div>