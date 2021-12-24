<?php get_header(); ?>
<main>

<?php get_template_part('template-parts/archive/breadcrumb') ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mb-4">
            <?php get_template_part('template-parts/archive/loop') ?>


                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item mx-2"><a class="page-link text-muted" href="#">قبلی</a></li>
                        <li class="page-item mx-2"><a class="page-link text-muted" href="#">۱</a></li>
                        <li class="page-item mx-2"><a class="page-link text-muted" href="#">۲</a></li>
                        <li class="page-item mx-2"><a class="page-link text-muted" href="#">۳</a></li>
                        <li class="page-item mx-2"><a class="page-link text-muted" href="#">بعدی</a></li>
                    </ul>
                </nav>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer();?>