<?php
$global_banners = get_field('global_internal_banners', 'options');
$global_title = $global_banners['banner_text'];

$page_banners = get_field('internal_page_options_new');
$banner_title = $page_banners['banner_text'];

$blog_banner = get_field('blog_banners', 'options');

$bodyclass = get_body_class();

if (!ilaw_has_class('ilawyer-banner-disabled')) { ?>
    <section id='banner'>
        <div id='banner-content'>
            <?php
            if (
                ilaw_has_class('ilawyer-blog') ||
                ilaw_has_class('ilawyer-alt-banner-layout')
            ) { ?>
                <h1 id='banner-title' class='centered'>
                    <?php if (is_home()) {
                        $blog_title = get_the_title(get_option('page_for_posts', true));
                        echo text_wrap($blog_title, ' ');
                    } elseif (is_archive()) {
                        echo text_wrap(get_the_archive_title(), ' ');
                    } elseif (
                        is_single() ||
                        ilaw_has_class('ilawyer-alt-banner-layout')
                    ) {
                        echo text_wrap(get_the_title(), ' ');
                    } ?>
                </h1>
            <?php } elseif (ilaw_has_class('ilawyer-h1-in-banner')) { ?>
                <h1 id='banner-title'><?= text_wrap(get_the_title(), ' '); ?></h1>
            <?php } else { ?>
                <span id='banner-title'>
                    <?php
                    if (is_404()) {
                        echo text_wrap('Not Found', ' ');
                    } else {
                        if ($banner_title) {
                            echo text_wrap($banner_title, ' ');
                        } else {
                            echo text_wrap($global_title, ' '); ?>
                </span>
        <?php }
                    } ?>
        </span>
    <?php }
            if (
                !(ilaw_has_class('ilawyer-blog') ||
                    ilaw_has_class('ilawyer-alt-banner-layout')
                )
            ) {
                get_template_part('template-parts/button', null, array(
                    'acf-field' => $global_banners,
                    'button-classes' => 'banner-button internal-button button-one',
                ));
            } ?>
        </div>
        <?php
        if (is_page()) {
            if (ilaw_has_class('ilawyer-internal-banner-images')) {
                $acf_field = $page_banners;
            }
            if (ilaw_has_class('ilawyer-global-banner-images')) {
                $acf_field = $global_banners;
            }
        }
        if (ilaw_has_class('ilawyer-blog')) {
            $acf_field = $blog_banner;
        }
        if (is_404()) {
            $acf_field = $global_banners;
        }
        get_template_part('template-parts/background-images', null, array(
            'class' => 'internal-banner-image',
            'acf-field' => $acf_field,
            'loading' => 'eager',
            'width' => '1920',
            'height' => '475',
        )); ?>
    </section>
<?php } ?>