<?php

/**
 * Front Facing Styles and Scripts
 */
function load_my_styles_scripts()
{
    //wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', '', 5, 'all');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'load_my_styles_scripts', 20);
add_action('wp_enqueue_scripts', function ($scripts) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), false, null, true);
    wp_enqueue_script('jquery');
    $dirJS = new DirectoryIterator(get_stylesheet_directory() . '/js');
    foreach ($dirJS as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            $fullName = basename($file);
            $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
            switch ($name) {
                default:
                    $deps = null;
                    break;
            }
            /**
             * string #defer is added to the filename, used as an identifier to Defer the specific script
             * It is filtered, using the 'script_loader_tag' filter.
             */
            wp_enqueue_script($name, get_template_directory_uri() . '/js/' . $fullName . '#defer', $deps, null, true);
        }
    }
    /**
     * Main is Custom Coded by the 1P21 Team.
     * ( Used with an IF Statement, for Legacy Compatability )
     */
    if (file_exists(get_template_directory() . '/main-min.js')) :
        wp_register_script('mainjs', get_template_directory_uri() . '/main-min.js', '', false, true);
        wp_enqueue_script('mainjs');
    endif;
}, 10);
/**
 * JS - Defer Third Party or Manually Added Script
 */
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if (strpos($src, '#defer') === false) :
        return $tag;
    else :
        $tag = str_replace('#defer', '', $tag);
        $tag = str_replace('<script', '<script defer data-handle="' . $handle . '"', $tag);
        return $tag;
    endif;
}, 10, 3);
/**
 * CSS in Header for Lighthouse
 */
add_action('wp_head', 'merge_include_css');
function merge_include_css()
{
    $theme = wp_get_theme();
    $styles = file_get_contents(get_stylesheet_directory() . '/style.css');
    $styles = str_replace("images", site_url() . "/wp-content/themes/$theme->template/images", $styles);

    $mergedCSS = $styles;
    $mergedCSS = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $mergedCSS);
    $mergedCSS = preg_replace('/\s{2,}/', ' ', $mergedCSS);
    $mergedCSS = preg_replace('/\s*([:;{}])\s*/', '$1', $mergedCSS);
    $mergedCSS = preg_replace('/;}/', '}', $mergedCSS);
    file_put_contents(get_stylesheet_directory() . '/styles-in-head.php', $mergedCSS); {
        echo '<style>';
        include_once get_template_directory() . '/styles-in-head.php';
        echo '</style>';
    }
}
