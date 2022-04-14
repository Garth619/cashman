<?php

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme()
{
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');

add_theme_support('responsive-embeds');
add_theme_support('wp-block-styles');
add_theme_support('wp-block-styles');

/**
 * Add arrows to menu items
 * @link http://www.billerickson.net/code/add-arrows-to-menu-items/
 */
// function be_arrows_in_menus($item_output, $item, $depth, $args)
// {

//     if (in_array('menu-item-has-children', $item->classes)) {
//         $arrow = '<svg xmlns="http://www.w3.org/2000/svg" width="9.561" height="5.458" viewBox="0 0 9.561 5.458">
//         <path id="Icon_ionic-ios-arrow-up" data-name="Icon ionic-ios-arrow-up" d="M4.782,1.645,8.4,5.258a.683.683,0,0,0,.965-.966L5.265.2a.683.683,0,0,0-.942-.02L.2,4.288a.683.683,0,0,0,.965.966Z" transform="translate(9.561 5.458) rotate(180)" fill="#c78b42"/>
//       </svg>';
//         $item_output = str_replace('</a>', $arrow . '</a>', $item_output);
//     }

//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4);

/**
 * Remove margin from admin bar
 */
function ilaw_remove_html_admin_margin()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'ilaw_remove_html_admin_margin');

/**
 * No Tab Conflicts Gravity Forms
 */
add_filter('gform_tabindex', 'gform_tabindexer', 10, 2);
function gform_tabindexer($tab_index, $form = false)
{
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if ($form) {
        add_filter('gform_tabindex_' . $form['id'], 'gform_tabindexer');
    }
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

/**
 * Remove Unnecessary Scripts
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Register Nav-Menus
 */
register_nav_menus(array(
    'main_menu' => 'Main Menu',
));

/**
 * Add Theme Support Page Thumbnails
 */
add_theme_support('post-thumbnails');

/**
 *Modify the_excerpt() " read more "
 */
function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * ACF: CREATE OPTIONS PAGE
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Site Options',
        'menu_title'    => 'Site Options',
        'menu_slug'     => 'acf-site-options',
        'capability'    => 'edit_posts',
        'redirect'        => false,
    ));
}

/**
 * Allow Various to Media Upload
 */
add_filter('upload_mimes', 'add_custom_upload_mimes');
function add_custom_upload_mimes($existing_mimes)
{
    $existing_mimes['woff2'] = 'application/x-font-woff2';
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}

/**
 * Add types that dont work on upload_mimes filter
 */
add_filter('wp_check_filetype_and_ext', 'ilaw_wp_upload_mimes_bug_fix', 10, 4);
function ilaw_wp_upload_mimes_bug_fix($types, $file, $filename, $mimes)
{
    if (false !== strpos($filename, '.vcf')) {
        $types['ext'] = 'vcf';
        $types['type'] = 'text/x-vcard';
    }
    return $types;
}

/**
 * Remove Block Library
 */
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');

/**
 * Responsive Content Images
 */
function ilaw_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];
    840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
    if ('page' === get_post_type()) {
        840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    } else {
        840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
        600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    }
    return $sizes;
}
add_filter('wp_calculate_image_sizes', 'ilaw_content_image_sizes_attr', 10, 2);

/**
 *  Responsive Featured Images
 */
function ilaw_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if ('post-thumbnail' === $size) {
        is_active_sidebar('sidebar-1') && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
        !is_active_sidebar('sidebar-1') && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'ilaw_post_thumbnail_sizes_attr', 10, 3);

/**
 * Return an alternate title, without prefix, for every type used in the get_the_archive_title().
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_year()) {
        $title = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title = get_the_date(_x('F Y', 'monthly archives date format'));
    } elseif (is_day()) {
        $title = get_the_date(_x('F j, Y', 'daily archives date format'));
    } elseif (is_tax('post_format')) {
        if (is_tax('post_format', 'post-format-aside')) {
            $title = _x('Asides', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-gallery')) {
            $title = _x('Galleries', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-image')) {
            $title = _x('Images', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-video')) {
            $title = _x('Videos', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-quote')) {
            $title = _x('Quotes', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-link')) {
            $title = _x('Links', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-status')) {
            $title = _x('Statuses', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-audio')) {
            $title = _x('Audio', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-chat')) {
            $title = _x('Chats', 'post format archive title');
        }
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } else {
        $title = __('Archives');
    }
    return $title;
});

/**
 * Pagination add leading zeros to 1-9
 *
 * https://wordpress.stackexchange.com/a/358695
 * https://developer.wordpress.org/reference/functions/paginate_links/
 */
function give_numbers_leading_zero($number)
{
    return sprintf("%02s", $number);
}
/**
 * Text wrap for animations
 */
function text_wrap($string, $separator)
{
    $words = explode($separator, $string);
    $wrapped = array_map(function ($v, $k) {
        return "<span class='mask' style='--i: {$k}'><span class='wrapped'>{$v}</span></span>";
    }, $words, array_keys($words));
    $output = implode(' ', $wrapped);
    return $output;
}
