
<?php
if(have_posts()):
    while (have_posts()):the_post();
        get_template_part('template-parts/archive/inside-loop');
    endwhile;
    get_template_part('template-parts/other/pagination');
endif;

//for ($x = 0; $x < 10; $x++) {
//    get_template_part('template-parts/archive/inside-loop');
//}
?>



