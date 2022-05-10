<?php
$sec_five = get_field('section_five');
$content = $sec_five['content'];
$pas = $sec_five['practice_areas'];
?>
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
                                    <?php echo file_get_contents(get_template_directory() . '/images/pa_grid_arrow.svg'); ?>
                                </a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            <?php } ?>
        </div>
        <div id='sec-five-image-wrapper'>
            <div class='img-wrapper'>
                <img src='<?php bloginfo('template_directory'); ?>/images/content_img_4.jpg' alt='altname' width='641' height='812' loading='lazy' />
            </div>
            <div class='img-wrapper'>
                <img src='<?php bloginfo('template_directory'); ?>/images/content_img_5.jpg' alt='altname' width='497' height='656' loading='lazy' />
            </div>
        </div>
    </div>
</section>