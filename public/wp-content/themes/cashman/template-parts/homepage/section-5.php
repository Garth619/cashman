<?php
$sec_five = get_field('section_five');
$content = $sec_five['content'];
$pas = $sec_five['practice_areas'];
$image_one = $sec_five['image_one'];
$image_one_url = $image_one['url'];
$image_one_alt = $image_one['alt'];
$image_one_width = $image_one['width'];
$image_one_height = $image_one['height'];
$image_two = $sec_five['image_two'];
$image_two_url = $image_two['url'];
$image_two_alt = $image_two['alt'];
$image_two_width = $image_two['width'];
$image_two_height = $image_two['height']; ?>
<section id='section-five'>
    <div id='sec-five-inner'>
        <div id='sec-five-content'>
            <?php if ($content) { ?>
                <div id='sec-five-content-inner' class='content'>
                    <?= $content; ?>
                </div>
            <?php } ?>
            <?php if ($pas) { ?>
                <ul id='sec-five-pa-list'>
                    <?php foreach ($pas as $key => $value) {
                        $title = $value['title'];
                        $link = $value['link'];
                        if ($link) { ?>
                            <li style='--i: <?= ($key + 1); ?>'>
                                <a href="<?= $link; ?>">
                                    <span><?= $title; ?></span>
                                    <?= file_get_contents(get_template_directory() . '/images/pa_grid_arrow.svg'); ?>
                                </a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            <?php } ?>
        </div>
        <div id='sec-five-image-wrapper'>
            <div class='img-wrapper'>
                <img src='<?= $image_one_url; ?>' alt='<?= $image_one_alt; ?>' width='<?= $image_one_width; ?>' height='<?= $image_one_height; ?>' loading='lazy' />
            </div>
            <div class='img-wrapper'>
                <img src='<?= $image_two_url; ?>' alt='<?= $image_two_alt; ?>' width='<?= $image_two_width; ?>' height='<?= $image_two_height; ?>' loading='lazy' />
            </div>
        </div>
    </div>
</section>