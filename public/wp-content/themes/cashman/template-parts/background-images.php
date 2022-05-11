<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'class' => '',
    'id' => '',
    'loading' => '',
    'height' => '',
    'width' => '',
);
$args = wp_parse_args($args, $array_defaults);

$acf_field = $args['acf-field'];
$class = $args['class'];
$id = $args['id'];
$loading = $args['loading'];
$height = $args['height'];
$width = $args['width'];

/**
 * ACFs
 */
$bg_images = $acf_field['banner_background_images'];
$disable_images = $bg_images['disable_images'];
$webp = $bg_images['add_webp_images'];

$mobile = $bg_images['background_image_mobile'];
$mobile_url = $mobile['url'];
$mobile_webp = $bg_images['background_image_mobile_webp'];
$mobile_webp_url = $mobile_webp['url'];
$mobile_alt = $bg_images['alt'];

$tablet = $bg_images['background_image_tablet'];
$tablet_url = $tablet['url'];
$tablet_webp = $bg_images['background_image_tablet_webp'];
$tablet_webp_url = $tablet_webp['url'];
$tablet_alt = $bg_images['alt'];

$sl = $bg_images['background_image_small_laptop'];
$sl_url = $sl['url'];
$sl_webp = $bg_images['background_image_small_laptop_webp'];
$sl_webp_url = $sl_webp['url'];
$sl_alt = $sl['alt'];

$ll = $bg_images['background_image_large_laptop'];
$ll_url = $ll['url'];
$ll_webp = $bg_images['background_image_large_laptop_webp'];
$ll_webp_url = $ll_webp['url'];
$ll_alt = $ll['alt'];

$mon = $bg_images['background_image_monitor'];
$mon_url = $mon['url'];
$mon_webp = $bg_images['background_image_monitor_webp'];
$mon_webp_url = $mon_webp['url'];
$mon_alt = $mon['alt']; ?>
<?php if (!$disable_images) { ?>
    <picture>
        <?php if ($webp && $mon_webp_url) { ?>
            <source media='(min-width: 1650px)' srcset='<?= $mon_webp_url; ?>' type='image/webp'>
        <?php }
        if ($mon) { ?>
            <source media='(min-width: 1650px)' srcset='<?= $mon_url; ?>'>
        <?php }
        if ($webp && $ll_webp_url) { ?>
            <source media='(min-width: 1380px)' srcset='<?= $ll_webp_url; ?>' type='image/webp'>
        <?php }
        if ($ll) { ?>
            <source media='(min-width: 1380px)' srcset='<?= $ll_url; ?>'>
        <?php }
        if ($webp && $sl_webp_url) { ?>
            <source media='(min-width: 1200px)' srcset='<?= $sl_webp_url; ?>' type='image/webp'>
        <?php }
        if ($sl) { ?>
            <source media='(min-width: 1200px)' srcset='<?= $sl_url; ?>'>
        <?php }
        if ($webp && $tablet_webp_url) { ?>
            <source media='(min-width: 768px)' srcset='<?= $tablet_webp_url; ?>' type='image/webp'>
        <?php }
        if ($tablet) { ?>
            <source media='(min-width: 768px)' srcset='<?= $tablet_url; ?>'>
        <?php }
        if ($webp && $mobile_webp_url) { ?>
            <source srcset='<?= $mobile_webp_url; ?>' type='image/webp'>
        <?php } ?>
        <img id='<?= $id; ?>' class='<?= $class; ?> banner-img' src='<?= $mobile_url; ?>' alt='<?= $mobile_alt; ?>' width='<?= $width; ?>' height='<?= $height; ?>' loading='<?= $loading; ?>' />
    </picture>
<?php } ?>