<?php
$videocenter = get_field('video');
$video = $videocenter['video'];
$video_options = $video['video_options'];

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='video-center-wrapper' class='template-part-wrapper'>
            <?php foreach ($video_options as $single) { ?>
                <?php get_template_part('template-parts/video', null, array(
                    'acf-field' => $single,
                )); ?>
            <?php } ?>
        </div>
<?php
    endwhile;
endif; ?>