<?php
$videocenter = get_field('video');
$video = $videocenter['video'];
$video_choice = $video['wistia_or_youtube'];
$wistia = $video_choice == 'Wistia';
$youtube = $video_choice == 'Youtube';
$video_options = $video['video_options'];

if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='video-center-wrapper' class='template-part-wrapper'>
            <?php foreach ($video_options as $single) {
                $wistiaID = $single['video_option_wistia_id'];
                $youtubeID = $single['video_option_youtube_id'];
                $thumbnail =  $single['video_options_thumbnail'];
                $thumbnail_url = $thumbnail['url'];
                $thumbnail_alt = $thumbnail['alt'];
                $title = $single['video_options_video_title'];

                if ($wistia) {
                    $videolink = '#';
                    if ($thumbnail) {
                        $view = 'html';
                    } else {
                        $view = 'thumbnail';
                    }
                }
            ?>
                <div class='single-video'>
                    <div data-wistia='<?= $wistiaID; ?>' class='single-wistia wistia_embed wistia_async_<?= $wistiaID; ?> popover=true popoverContent=<?= $view; ?>'>
                    </div>
                    <a href='<?= $videolink; ?>'>
                        <div class='single-video-thumbnail-wrapper'>
                            <?php if ($thumbnail) { ?>
                                <img class='single-video-thumbnail' src='<?= $thumbnail_url; ?>' alt='<?= $thumbnail_alt; ?>' />
                            <?php } ?>
                            <img class='single-video-spacer' src='<?php bloginfo('template_directory'); ?>/images/spacer.png' alt='Image Spacer' />
                            <div class='single-video-overlay'>
                                <span class='play-button'></span>
                            </div>
                        </div>
                        <?php if ($title) { ?>
                            <span class='single-video-title'><?= $title; ?></span>
                        <?php } ?>
                    </a>
                </div>
            <?php } ?>
        </div>
<?php
    endwhile;
endif; ?>