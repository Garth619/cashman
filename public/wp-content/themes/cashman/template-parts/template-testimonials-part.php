<?php
$testimonials = get_field('testimonials');
$featured_intro = $testimonials['featured_testimonial_intro'];
$featured_content = $testimonials['featured_testimonial_content'];
$featured_name = $testimonials['featured_testimonial_name'];
$testimonials_list = $testimonials['testimonials'];

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='testimonials-wrapper' class='template-part-wrapper'>
            <div id='testimonials-feature' class='testimonials-box'>
                <div id='test-stars'>
                    <img style="--i: 0" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 1" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 2" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 3" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                    <img style="--i: 4" src='<?php bloginfo('template_directory'); ?>/images/star.svg' alt='Stars Icon' width='26' height='26' loading='lazy' />
                </div>
                <?php if ($featured_intro) { ?>
                    <span class='intro'><?= $featured_intro; ?></span>
                <?php }
                if ($featured_content) { ?>
                    <div class='content'>
                        <?= $featured_content; ?>
                    </div>
                <?php }
                if ($featured_name) { ?>
                    <span class='name'><?= $featured_name; ?></span>
                <?php } ?>
            </div>
            <?php if ($testimonials_list) { ?>
                <div id='testimonials-list'>
                    <?php foreach ($testimonials_list as $single) {
                        $intro = $single['intro'];
                        $content = $single['content'];
                        $name = $single['name']; ?>
                        <div class='testimonials-single testimonials-box'>
                            <img class='stars' src='<?php bloginfo('template_directory'); ?>/images/stars_2.svg' alt='Stars Icon' width='157' height='26' />
                            <?php if ($intro) { ?>
                                <span class='intro'><?= $intro; ?></span>
                            <?php }
                            if ($content) { ?>
                                <div class='content'>
                                    <?= $content; ?>
                                </div>
                            <?php }
                            if ($name) { ?>
                                <span class='name'><?= $name; ?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
<?php
    endwhile;
endif; ?>