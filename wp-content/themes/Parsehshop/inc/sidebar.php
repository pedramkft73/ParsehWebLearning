<?php
add_action( 'widgets_init', 'parsehshop_register_sidebars' );
function parsehshop_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'navigation-footer-1',
            'name'          => __( 'navigation footer 1','parsehshop' ),
            'description'   => __( 'A short description of the sidebar.','parsehshop' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
        array(
            'id'            => 'navigation-footer-2',
            'name'          => __( 'navigation footer 2','parsehshop' ),
            'description'   => __( 'A short description of the sidebar.','parsehshop' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'navigation-footer-3',
            'name'          => __( 'navigation footer 3','parsehshop'  ),
            'description'   => __( 'A short description of the sidebar.','parsehshop'  ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'navigation-footer-4',
            'name'          => __( 'navigation footer 4','parsehshop'  ),
            'description'   => __( 'A short description of the sidebar.','parsehshop'  ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
}




?>