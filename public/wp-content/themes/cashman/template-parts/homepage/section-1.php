<?php
$sec_one = get_field('section_one');
$selling_points = $sec_one['selling_points'];
$title = $sec_one['title']; ?>
<section id='section-one'>
    <div id='sec-one-inner'>
        <?php if ($selling_points) { ?>
            <ul id='sec-one-sp'>
                <?php foreach ($selling_points as $single) {
                    $list_item = $single['list_item']; ?>
                    <li><?= $list_item; ?></li>
                <?php } ?>
            </ul>
        <?php }
        if ($title) { ?>
            <span id='sec-one-title'>
                <?= $title; ?>
            </span>
        <?php }
        get_template_part('template-parts/button', null, array(
            'acf-field' => $sec_one,
            'button-id' => 'sec-one-button',
            'button-classes' => 'button-one',
        )); ?>
    </div>
    <?php get_template_part('template-parts/background-images', null, array(
        'acf-field' => $sec_one,
        'id' => 'hero',
        'loading' => 'eager',
        'width' => '768',
        'height' => '607',
    )); ?>
</section>