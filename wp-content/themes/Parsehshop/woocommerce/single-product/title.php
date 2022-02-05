<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

the_title( '<h1 class="border-bottom">', '</h1>' );
?>
<div class="my-4 border-bottom pb-4">
    <div class="line1 d-flex justify-content-around align-items-center">
        <small>برند: <?php echo parseh_shop_get_product_category(get_the_ID(),'product_brand'); ?></small>
        <small>دسته بندی: <?php echo parseh_shop_get_product_category(get_the_ID(),'product_cat'); ?></small>
        <small>مناسب برای: <a href="#"><?php  if (function_exists('the_field')){the_field('created_for');} ?>
            </a></small>
    </div>

    <div class="line2 d-flex justify-content-around align-items-center mt-4">
        <strong class="text-muted">ویژگی های محصول:</strong>
        <?php
        $features=get_field('product_features');
        if(!empty($features)){
            foreach ($features as $feature){
                ?>
                <small><i class="fas fa-dot-circle align-middle text-muted"></i><?php  echo $feature ?></small>
            <?php   };
        };
        ?>
    </div>
</div>
