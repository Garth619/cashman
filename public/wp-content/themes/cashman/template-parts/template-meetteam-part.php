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
                    $attimg_url = $attimg['url']; ?>

                    <div class='single-att'>
                        <a href='<?php the_permalink(); ?>'>
                            <div class='single-att-img-wrapper'>
                                <img src='<?= $attimg_url; ?>' alt='altname' width='' height='' />
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