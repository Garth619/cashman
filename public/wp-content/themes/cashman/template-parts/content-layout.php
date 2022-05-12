<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'loading' => 'lazy',
);
$args = wp_parse_args($args, $array_defaults);
/**
 * ACFs
 */
$acf_field = $args['acf-field'];
$loading = $args['loading'];
$content_layout = $acf_field['content_layout'];
$top_content = $content_layout['top_content'];
$img_one = $content_layout['image_one_top_content'];
$img_one_link = $img_one['url'];
$img_one_alt = $img_one['alt'];
$img_one_width = $img_one['width'];
$img_one_height = $img_one['height'];
$img_two = $content_layout['image_two_top_content'];
$img_two_link = $img_two['url'];
$img_two_alt = $img_two['alt'];
$img_two_width = $img_two['width'];
$img_two_height = $img_two['height'];
$blockquote = $content_layout['blockquote'];
$bottom_content = $content_layout['bottom_content'];
$bottom_image = $content_layout['bottom_image'];
$bottom_image_url = $bottom_image['url'];
$bottom_image_alt = $bottom_image['alt'];
$bottom_image_width = $bottom_image['width'];
$bottom_image_height = $bottom_image['height'];
$link_verbiage = $content_layout['link_verbiage'];
$page_link = $content_layout['page_link'];
?>
<div id='content-layout-inner' class='content'>
    <div id='content-layout-top'>
        <?php if ($top_content) { ?>
            <div class='content-layout-content'>
                <?= $top_content; ?>
            </div>
        <?php } ?>
        <div class='content-layout-image-wrapper'>
            <?php if ($img_one) { ?>
                <div class='img-wrapper'>
                    <img src='<?= $img_one_link; ?>' alt='<?= $img_one_alt; ?>' width='<?= $img_one_width; ?>' height='<?= $img_one_height; ?>' loading='<?= $loading; ?>' />
                </div>
            <?php } ?>
            <?php if ($img_two) { ?>
                <div class='img-wrapper'>
                    <img src='<?= $img_two_link; ?>' alt='<?= $img_two_alt; ?>' width='<?= $img_two_width; ?>' height='<?= $img_two_height; ?>' loading='<?= $loading; ?>' />
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($blockquote) { ?>
        <div id='content-layout-blockquote'>
            <blockquote>
                <p><?= text_wrap($blockquote, ' '); ?></p>
            </blockquote>
        </div>
    <?php } ?>
    <div id='content-layout-bottom'>
        <div class='content-layout-image-wrapper'>
            <?php if ($bottom_image) { ?>
                <div class='img-wrapper'>
                    <img src='<?= $bottom_image_url; ?>' alt='<?= $bottom_image_alt; ?>' width='<?= $bottom_image_width; ?>' height='<?= $bottom_image_height; ?>' loading='<?= $loading; ?>' />
                </div>
            <?php } ?>
            <?php if ($page_link) { ?>
                <a class='content-layout-learn-more' href='<?= $page_link; ?>'>
                    <span class='link'><?= $link_verbiage; ?></span>
                    <span class='arrow'>
                        <?= file_get_contents(get_template_directory() . '/images/learn_about_arrow.svg'); ?>
                        <?= file_get_contents(get_template_directory() . '/images/learn_about_arrow_2.svg'); ?>
                    </span>
                </a>
            <?php } ?>
        </div>
        <?php if ($bottom_content) { ?>
            <div class='content-layout-content'>
                <?= $bottom_content; ?>
            </div>
        <?php } ?>
    </div>
</div>