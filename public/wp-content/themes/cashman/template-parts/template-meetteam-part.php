<?php
$team = get_field('meet_the_team');
$attorneys = $team['attorneys'];

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='meetteam-wrapper' class='template-part-wrapper'>
            <?php if ($attorneys) : ?>
                <?php foreach ($attorneys as $post) : ?>
                    <?php
                    setup_postdata($post);
                    $attorney = get_field('attorney_profile');
                    $attpos = $attorney['attorney_position'];
                    $attimg = $attorney['attorney_image'];
                    $attimg_url = $attimg['url'];
                    $attimg_alt = $attimg['alt']; ?>

                    <div class='single-att <?= $attimg ? '' : 'placeholder'; ?>'>
                        <a href='<?php the_permalink(); ?>'>
                            <div class='single-att-img-wrapper'>
                                <?php if ($attimg) { ?>
                                    <img src='<?= $attimg_url; ?>' alt='<?= $attimg_alt; ?>' width='641' height='872' loading='eager' />
                                <?php } else { ?>
                                    <div class='attprofile-placeholder'>
                                        <img src='<?php bloginfo('template_directory'); ?>/images/att_placeholder.png' alt='Attorney Image Placeholder' width='641' height='872' loading='eager' />
                                    </div>
                                <?php } ?>
                                <div class='single-att-overlay'>
                                    <span class='single-att-button button-one'>
                                        View Profile
                                    </span>
                                </div>
                            </div>
                            <span class='single-att-name'><?php the_title(); ?></span>
                            <?php if ($attpos) { ?>
                                <span class='single-att-position'><?= $attpos; ?></span>
                            <?php } ?>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
<?php
    endwhile;
endif; ?>