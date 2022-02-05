<?php
function parseh_shop_get_product_category($id,$taxonomy){
    $category_list = wp_get_post_terms($id, $taxonomy);
    if (!empty($category_list)){
        $category = $category_list[0]->name;
        $category_link = get_term_link($category_list[0]->term_id);
        return '<a href="'.$category_link.'">'.$category.'</a>';
    }

}
add_filter('woocommerce_product_description_tab_title',function ($title){
    return '<i class="fa fa-info"></i>'.$title.':';
});
add_filter('woocommerce_product_additional_information_tab_title',function ($title){
    return '<i class="fa fa-table" aria-hidden="true"></i>'.$title.':';
});
add_filter('woocommerce_product_reviews_tab_title',function ($title){
    return '<i class="fa fa-comments" aria-hidden="true"></i>'.$title.':';
});
