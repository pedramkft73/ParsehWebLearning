<header>
    <div class="header-top bg-white pt-4">
        <div class="container">
            <div class="row align-items-center ">

                <div class="col-12 col-md-2 d-flex justify-content-center">
                    <h3><a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a></h3>
                </div>

                <div class="d-none d-lg-block col-lg-1"></div>
                <?php get_template_part('template-parts/header/search-form') ?>

                <div class="d-none d-md-block col-md-4 col-lg-3 register d-flex justify-content-center mb-4" >
                    <a class="reg-1" href="#"><i class="fa fa-user" aria-hidden="true"></i> ورود / ثبت نام</a>
                    <a class="cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  </a>
                </div>

            </div>
        </div>

    </div>
    <!--		<hr>-->
    <?php get_template_part('template-parts/header/top-navigation') ?>
    <?php  wp_head();  ?>
</header>