<?php
/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a class="breadcrumb-item text-muted" href="'.home_url().'" rel="nofollow">'.get_bloginfo('name').'</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category('&nbsp;&nbsp;/&nbsp;&nbsp;');
        if (is_single()) {
            echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
            echo'<a class="breadcrumb-item text-muted">';
            the_title();
            echo'</a>';
        }
    } elseif (is_page()) {
//        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo'<a class="breadcrumb-item text-muted">';
        echo the_title();
        echo'</a>';
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<a class="breadcrumb-item text-muted">';
        echo the_search_query();
        echo '</a>"';
    }
}