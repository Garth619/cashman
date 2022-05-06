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
                $youtube_image_link = 'https://img.youtube.com/vi/' . $youtubeID . '/0.jpg';
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
                if ($youtube) {
                    $videolink = 'https://www.youtube.com/embed/' . $youtubeID;
                }
            ?>
                <div class='single-video'>
                    <a href='<?= $videolink; ?>' <?= $youtube ? 'data-lity' : ''; ?>>
                        <div class='single-video-thumbnail-wrapper'>
                            <?php if ($thumbnail) { ?>
                                <img class='single-video-thumbnail' src='<?= $thumbnail_url; ?>' alt='<?= $thumbnail_alt; ?>' />
                            <?php }
                            if (!$thumbnail && $youtube) { ?>
                                <img class='single-video-thumbnail' src="<?php echo $youtube_image_link; ?>" />
                            <?php } ?>
                            <img class='single-video-spacer' src='<?php bloginfo('template_directory'); ?>/images/spacer.png' alt='Image Spacer' />
                            <?php if ($wistia) { ?>
                                <div data-wistia='<?= $wistiaID; ?>' class='single-wistia wistia_embed wistia_async_<?= $wistiaID; ?> popover=true popoverContent=<?= $view; ?>'></div>
                            <?php } ?>
                            <div class='single-video-overlay'>
                                <span class='single-video-play-button'><span></span></span>
                            </div>
                        </div>
                        <?php if ($title) { ?>
                            <span class='single-video-title'><?= $title; ?></span>
                        <?php } ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if ($wistia) { ?>
            <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
        <?php } ?>
<?php
    endwhile;
endif; ?>