<?php

/**
 * Experimental Reusable ACF Button Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
);
$args = wp_parse_args($args, $array_defaults);
/**
 * ACFs
 */
$acf_field = $args['acf-field'];
$sp_slides = $acf_field['selling_point_slides'];
$sps = $sp_slides['selling_points'];
if ($sps) { ?>
    <div class='selling-points-slides'>
        <?php foreach ($sps as $sp) {
            $icon = $sp['icon'];
            $icon_link = $icon['url'];
            $icon_alt = $icon['alt'];
            $icon_width = $icon['width'];
            $icon_height = $icon['height'];
            $icon_name = $icon['name'];
            $title = $sp['title'];
            $content = $sp['content'];
            $button =  $sp['button'];
            $button_verbiage =  $button['verbiage'];
        ?>
            <div class='single-sp <?= $icon_name; ?>'>
                <div class='single-sp-inner'>
                    <img class='single-sp-icon' src='<?= $icon_link; ?>' alt='<?= $icon_alt; ?>' width='<?= $icon_width; ?>' height='<?= $icon_height; ?>' loading='lazy' />
                    <span class='single-sp-title'><?= $title; ?></span>
                    <span class='single-sp-content'><?= $content; ?></span>
                    <?php get_template_part('template-parts/button', null, array(
                        'acf-field' => $sp,
                        'button-classes' => 'single-sp-button button-one',
                    )); ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>