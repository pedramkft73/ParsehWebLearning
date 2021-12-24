<?php get_header(); ?>

<main>

    <?php get_template_part('template-parts/single/breadcrumb'); ?>
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/single/main-body'); ?>
            <?php get_sidebar(); ?>

        </div>
    </div>

</main>
<?php get_footer(); ?>