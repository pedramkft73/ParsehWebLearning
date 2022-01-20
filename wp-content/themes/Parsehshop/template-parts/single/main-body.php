<div class="col-12 col-lg-8 mt-3">
    <div class="card border-0 blog-content mb-4">
        <div class="crad-body p-4">
            <?php
            get_header();
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();?>
                    <?php echo get_the_post_thumbnail($post->ID,'image800*350',array('class'=>'img-fluid')); ?>
<!--                    <img src="--><?php //echo get_theme_file_uri(); ?><!--/assets/img/capturing-the-go.png" class="img-fluid" alt="">-->
                    <h1 class="d-block mt-5 mb-5"><?php the_title(); ?></h1>
                    <?php get_template_part('template-parts/single/body-header'); ?>
                    <?php  the_content(); ?>
                    <?php get_template_part('template-parts/single/body-footer') ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
               <?php endwhile;
            else:
                echo'No Post';
            endif;
            ?>








        </div>
    </div>
</div>