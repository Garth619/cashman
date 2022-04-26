<?php

/**
 * Experimental Reusable ACF Background Images Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'class' => 'logos-slider', // tied to slick slider function in main.js
    'id' => '',
    'loading' => 'loading',
);
$args = wp_parse_args($args, $array_defaults);

$acf_field = $args['acf-field'];
$class = $args['class'];
$id = $args['id'];
$loading = $args['loading'];
/**
 * ACFs
 */
$logos_slider = $acf_field['logos_slider'];
$disable_logos = $logos_slider['disable_logos'];
$logos = $logos_slider['logos'];
?>
<?php if (!$disable_logos) { ?>
    <div id='<?= $id; ?>' class='<?= $class; ?>'>
        <?php

        foreach ($logos as $logo) {
            $img = $logo['logo'];
            $img_url = $img['url'];
            $img_alt = $img['alt'];
            $img_name = $img['name'];
            $img_class = (str_replace(' ', '-', strtolower($img_name)));
        ?>
            <div class='single-logo <?= $img_class; ?>'>
                <div class='single-logo-inner'>
                    <img src='<?= $img_url; ?>' alt='<?= $img_alt; ?>' loading='<?= $loading; ?>' />
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>