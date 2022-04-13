<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        if (($paged >= 2 || $page >= 2) && !is_404()) {
            echo esc_html(' | ' . sprintf(__('Page %s', ''), max($paged, $page)));
        }
        ?>
    </title>
    <?php wp_head();
    the_field('schema_code', 'option');
    the_field('analytics_code', 'option');
    ?>
    <style>
        @import url("https://use.typekit.net/qpf0hem.css");
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    </style>
</head>

<body id='body' <?php body_class(); ?>>



    <?php // wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'main_menu'));
    ?>