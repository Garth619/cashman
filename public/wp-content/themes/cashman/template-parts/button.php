<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'button-id' => '',
    'button-classes' => '',
);
$args = wp_parse_args($args, $array_defaults);

$acf_field = $args['acf-field'];
$verbiage = $args['verbiage'];
$button_id = $args['button-id'];
$button_classes = $args['button-classes'];
/**
 * ACFs
 */
$button = $acf_field['button'];
$disable = $button['disable_button'];
$verbiage = $button['verbiage'];
$url_select = $button['button_url'];
$internal_link = $button['internal_link'];
$external_link = $button['external_link'];
$footer_scroll = $button['scroll_to_footer_form'];
$open_window = $button['open_link_in_a_new_window'];
if ($url_select == 'Internal Site Link') {
    $url = $internal_link;
}
if ($url_select == 'External Link') {
    $url = $external_link;
}
if ($url_select == 'Scroll to Footer Form') {
    $url = $footer_scroll;
}
if (!$disable) {
?>
    <a id='<?= $button_id; ?>' class='<?= $button_classes; ?>' href='<?= $url; ?>' <?= $open_window ? "target=_blank rel='noopener'" : ""; ?>><?= $verbiage; ?></a>
<?php
}
?>