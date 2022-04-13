<?php

/**
 * Pagination - add leading zeros to 1-9
 *
 * https://wordpress.stackexchange.com/a/358695
 * https://developer.wordpress.org/reference/functions/paginate_links/
 */
add_filter('number_format_i18n', 'give_numbers_leading_zero');
$paginate_links = paginate_links(array(
    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
    'total' => $wp_query->max_num_pages,
    'current' => max(1, get_query_var('paged')),
    'format' => '?paged=%#%',
    'type' => 'array',
    'prev_next' => false,
    'end_size' => 3,
    'mid_size' => 4,
));
remove_filter('number_format_i18n', 'give_numbers_leading_zero');
if ($paginate_links) {
    echo '<div class="blog-pagination">';
    foreach ($paginate_links as $link) {
        echo $link;
    }
    echo '</div>';
}
