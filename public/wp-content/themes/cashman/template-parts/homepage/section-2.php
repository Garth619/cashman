<?php
$section_two = get_field('section_two');
$title = $section_two['title'];
$content = $section_two['content'];
?>
<section id='section-two'>
    <div id='sec-two-inner'>
        <div id='sec-two-sp'>
            <?php get_template_part('template-parts/selling', 'points', array(
                'acf-field' => $section_two,
                'id' => 'sec-two-selling-points',
                'loading' => 'eager'
            )); ?>
            <div id='sec-two-content'>
                <div id='sec-two-content-left'>
                    <?php if ($title) { ?>
                        <h1><?= text_wrap($title, ' '); ?></h1>
                    <?php } ?>
                </div>
                <?php if ($content) { ?>
                    <div id='sec-two-content-right' class='content'>
                        <div id='sec-two-content-right-inner'>
                            <?= $content; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <img id='sec-two-background' src='<?php bloginfo('template_directory'); ?>/images/bg.jpg' alt='altname' width='1943' height='1497' loading='lazy' />
</section>