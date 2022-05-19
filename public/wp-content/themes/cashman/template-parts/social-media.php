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
$auth = stream_context_create(
    array(
        'http' => array(
            'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")
        ),
    )
);
/**
 * ACFs
 */
$social_media = $acf_field['social_media'];
if ($social_media) { ?>
    <div id='<?= $template_location; ?>-social-media'>
        <?php foreach ($social_media as $icons) {
            $link = $icons['link'];
            $icon = $icons['icon'];
            $icon_url = $icon['url'];
            $filename = $icon['filename']; ?>
            <a href='<?= $link; ?>' target='_blank' rel='noopener'>
                <?= file_get_contents($icon_url, false, $auth);
                ?>
            </a>
        <?php } ?>
    </div>
<?php } ?>