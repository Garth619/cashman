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
$locations = $acf_field['locations'];
if ($locations) { ?>
    <?php foreach ($locations as $location) {
        $title = $location['title'];
        $address = $location['address'];
        $maplink = $location['map_link'];
        $get_directions = $location['get_directions_title'];
        $phone = $location['phone'];
        $tel = str_replace(['-', '(', ')', ' '], '', $phone); ?>
        <div class='<?= $template_location; ?>-info-col'>
            <?php if ($title) { ?>
                <span class='<?= $template_location; ?>-title'><?= $title; ?></span>
            <?php } ?>
            <div class='<?= $template_location; ?>-info-col-inner'>
                <?php if ($address) { ?>
                    <span class='<?= $template_location; ?>-address'><?= $address; ?></span>
                <?php } ?>
                <?php if ($maplink) { ?>
                    <a class='<?= $template_location; ?>-get-directions' href='<?= $maplink; ?>' target='_blank' rel='noopener'><?= $get_directions; ?></a>
                <?php } ?>
                <?php if ($phone) { ?>
                    <a class='<?= $template_location; ?>-phone' href='tel:+1<?= $tel; ?>'><span class='brown'>P</span> &nbsp;<?= $phone; ?></a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>