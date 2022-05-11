<?php
$sec_four = get_field('section_four');
$tests = $sec_four['testimonials'];
?>
<section id='section-four'>
    <?php if ($tests) { ?>
        <div id='sec-four-container'>
            <div id='sec-four-arrow-left' class='sec-four-arrow'>
                <?php echo file_get_contents(get_template_directory() . '/images/test_left_arrow.svg'); ?>
            </div>
            <div id='sec-four-inner'>
                <div id='test-stars'>
                    <img style="--i: 0" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 1" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 2" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 3" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 4" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                </div>
                <div id='sec-four-testimonials'>
                    <?php foreach ($tests as $test) {
                        $title = $test['title'];
                        $content = $test['content'];
                        $name = $test['name'];
                    ?>
                        <div class='sec-four-single'>
                            <?php if ($title) { ?>
                                <span class='sec-four-single-title'><?= $title; ?></span>
                            <?php }
                            if ($content) { ?>
                                <span class='sec-four-single-content content'> <?= $content; ?></span>
                                <?php }
                            if ($name) { ?>?>
                                <span class='sec-four-single-name'><?= $name; ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <?php get_template_part('template-parts/button', null, array(
                    'acf-field' => $sec_four,
                    'button-id' => 'sec-four-button',
                    'button-classes' => 'button-one',
                )); ?>
            </div>
            <div id='sec-four-arrow-right' class='sec-four-arrow'>
                <?php echo file_get_contents(get_template_directory() . '/images/test_right_arrow.svg'); ?>
            </div>
        </div>
    <?php } ?>
    <img id='sec-four-bg' src='<?php bloginfo('template_directory'); ?>/images/bg.jpg' alt='altname' width='1943' height='1497' loading='lazy' />
</section>