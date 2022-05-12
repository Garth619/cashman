<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'template-location' => ''
);
$args = wp_parse_args($args, $array_defaults);

$acf_field = $args['acf-field'];
$template_location = $args['template-location'];
/**
 * ACFs
 */
$social_media = $acf_field['social_media'];
if ($social_media) { ?>
    <div id='<?= $template_location; ?>-social-media'>
        <?php foreach ($social_media as $icons) {
            $link = $icons['link'];
            $icon = $icons['icon'];
            $filename = $icon['filename']; ?>
            <a href='<?= $link; ?>' target='_blank' rel='noopener'>
                <?= file_get_contents(get_template_directory() . '/images/' . $filename); ?>
            </a>
        <?php } ?>
    </div>
<?php } ?>