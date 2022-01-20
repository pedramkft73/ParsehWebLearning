<?php
//template name: About
get_header();
?>


<main>

    <?php get_template_part('template-parts/single/breadcrumb'); ?>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="card custom-about">
                    <div class="card-body p-0 d-flex flex-column flex-lg-row justify-content-between" >
                        <div class="aboutus-img" style="background: url(<?php echo get_the_post_thumbnail($post->ID,'thumbnail',array('class'=>'img-fluid')); ?></div>
                        <div class="p-5">
                            <h1><?php the_title()  ?></h1>
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
  <?php get_footer(); ?>