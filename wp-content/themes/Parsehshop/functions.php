<?php

if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */


require_once get_theme_file_path('inc/sidebar.php');
require_once get_theme_file_path('inc/menu.php');
require_once get_theme_file_path('inc/breadcrumb.php');
require_once get_theme_file_path('inc/comments.php');
require_once get_theme_file_path('inc/meta_box.php');

if ( ! function_exists( 'parsehshop_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function parsehshop_setup() {

        load_theme_textdomain( 'parsehshop', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
//        register_nav_menus( array(
//            'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//            'secondary' => __('Secondary Menu', 'myfirsttheme' )
//        ) );

        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_image_size( 'image800*350', 800, 350 );

    }
    add_action( 'after_setup_theme', 'parsehshop_setup' );
endif; // myfirsttheme_setup



if ( ! function_exists( 'parsehshop_add_theme_styles' ) ) :
    function parsehshop_add_theme_styles() {

        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css', array(), '5.0.2');
        wp_enqueue_style( 'bootstrap-map', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css.map',['bootstrap'], '5.0.2');
        wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/assets/font/font-awsome/all.min.css',[], '5.15.4');
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css',[], '1.0.0');
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css',['slick'], '1.0.0');
        wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover-min.css',['slick'], '2.0.3');

    }
        add_action( 'wp_enqueue_scripts', 'parsehshop_add_theme_styles' );
endif;


if ( ! function_exists( 'parsehshop_add_theme_scripts' ) ) :
    function parsehshop_add_theme_scripts() {
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), '5.0.2', true);
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), '1.0.0', true);


        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
         add_action( 'wp_enqueue_scripts', 'parsehshop_add_theme_scripts' );
endif;

function parsehshop_the_html_classes() {
    $classes = apply_filters( 'parsehshop_html_classes', '' );
    if ( ! $classes ) {
        return;
    }
    echo 'class="' . esc_attr( $classes ) . '"';
}






		<?php echo wc_get_product_category_list( $product->get_id(), '<span class="meta-sep">,</span> ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), '<span class="meta-sep">,</span> ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>
?>

