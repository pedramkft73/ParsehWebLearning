<div class="card border-0 article mt-3 mb-5">
    <div class="cord-body px-2 pt-2">
        <div class="d-flex align-items-start">
            <div class="card-img-top article-img">
                <a href="<?php the_permalink();  ?>">
                    <?php
                    if (has_post_thumbnail(get_the_ID())) {
                        echo get_the_post_thumbnail($post->ID, 'medium', array('class' => 'img-fluid'));
                    }else{
                        ?>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/img/empty-300x300.jpg" class="img-fluid" alt="">

                    <?php }    ?>
                    <!--                <img src="--><?php //echo get_theme_file_uri(); ?><!--/assets/img/abstract-.png" alt="" class="img-fluid">-->
                </a>
            </div>
            <div class="mytext">
                <a href="<?php the_permalink();  ?>" class="d-block mt-2">
                   <?php  the_title()  ?>
                </a>
                <small class="d-block text-muted">
                   <?php  the_excerpt();  ?>
                </small>
            </div>
        </div>
        <div class="d-flex justify-content-between article-details mt-3">
            <div>
                <time datetime="<?php echo get_post_time('Y,m,d h,i', get_the_ID()) ?>"><small class="text-muted"><i class="fas fa-calendar-alt"></i><?php echo get_the_time('Y,m,d')  ?></small></time>
                <small class="text-muted"><i class="fas fa-pen-alt"></i>   <?php  the_author()  ?>  </small>
            </div>
            <a href="<?php the_permalink();  ?>" class="px-3 py-1 ml-1"> بیشتر بخوانید</a>
        </div>
    </div>
</div>