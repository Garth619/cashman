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
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap');
    </style>
</head>

<body id='body' <?php body_class(); ?>>
    <?php
    $header = get_field('header', 'option');
    $logo = $header['logo'];
    $logo_url = $logo['url'];
    $logo_alt = $logo['alt'];
    $logo_width = $logo['width'];
    $logo_height = $logo['height'];
    $cta = $header['free_case_evaluation'];
    $contact_info = get_field('contact_information', 'option');
    $phone = $contact_info['phone'];
    $tel = str_replace(['-', '(', ')', ' '], '', $phone);
    ?>
    <header>
        <div id='header-inner'>
            <div id='header-left'>
                <?php if ($logo) { ?>
                    <a id='logo' href='<?php bloginfo('url'); ?>'>
                        <img src='<?= $logo_url; ?>' alt='<?= $logo_alt; ?>' width='<?= $logo_width; ?>' height='<?= $logo_height; ?>' loading='eager' />
                    </a>
                <?php } ?>
            </div>
            <div id='header-right'>
                <div id='cta-wrap'>
                    <?php if ($cta) { ?>
                        <span id='cta'>
                            <?= $cta; ?>
                        </span>
                    <?php }
                    if ($tel) { ?>
                        <a id='phone' href='tel:+1<?= $tel; ?>'><?= $phone; ?></a>
                    <?php } ?>
                </div>
                <nav><?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'main_menu')); ?></nav>
                <div id='menu-wrap'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <span id='shadow-hack'></span>
        </div>
    </header>