<?php

/**
 * Pagination
 *
 * Single Post Prev and Next
 *
 * https://developer.wordpress.org/themes/functionality/pagination/#pagination-between-single-posts
 */
if (is_single()) {
    $prev = get_previous_post();
    $next = get_next_post();
    if ($prev || $next) {
        echo '<div id="single-post-pagination">';
        if (get_previous_post()) {
            previous_post_link('%link', 'Prev');
        }
        if (get_next_post()) {
            next_post_link('%link', 'Next');
        }
        echo '</div>';
    }
} else {
    /**
     * add leading zeros to 1-9
     *
     * https://wordpress.stackexchange.com/a/358695
     * https://developer.wordpress.org/reference/functions/paginate_links/
     */
    //add_filter('number_format_i18n', 'give_numbers_leading_zero');
    $paginate_links = paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'format' => '?paged=%#%',
        'type' => 'array',
        'prev_next' => true,
        'prev_text' => 'Prev',
        'next_text' => 'Next',
        'end_size' => 3,
        'mid_size' => 4,
    ));
    //remove_filter('number_format_i18n', 'give_numbers_leading_zero');
    if ($paginate_links) {
        echo '<div class="blog-pagination">';
        foreach ($paginate_links as $link) {
            echo $link;
        }
        echo '</div>';
    }
}
