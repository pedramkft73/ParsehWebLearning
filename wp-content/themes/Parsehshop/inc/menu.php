<?php
function parsehshop_register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'parsehshop_register_my_menus' );


function parsehshop_add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'parsehshop_add_additional_class_on_li', 1, 3);

function parsehshop_add_link_atts($atts) {
    $atts['class'] = "nav-link px-3";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'parsehshop_add_link_atts');
