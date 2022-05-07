<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
    'width' => '500',
);
$args = wp_parse_args($args, $array_defaults);
$acf_field = $args['acf-field'];
$width = $args['width'];
/**
 * ACFs
 */
$title = $acf_field['video_options_video_title'];
$video_choice = $acf_field['wistia_or_youtube'];
$wistia = $video_choice; // !$wistia is youtube
$wistiaID = $acf_field['video_option_wistia_id'];
$youtubeID = $acf_field['video_option_youtube_id'];
$youtube_image = 'https://img.youtube.com/vi/' . $youtubeID . '/0.jpg';
$thumbnail =  $acf_field['video_options_thumbnail'];
$thumbnail_url = $thumbnail['url'];
$thumbnail_alt = $thumbnail['alt'];
/**
 * Get Wistia thumbnail - https://wistia.com/support/developers/working-with-images
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'fast.wistia.net/oembed?url=http://home.wistia.com/medias/' . $wistiaID . '?embedType=async&videoWidth=' . $width);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
$response = json_decode($output, true);
$wistia_thumbnail = $response['thumbnail_url'];
$wistia_alt = $response['title'];
curl_close($ch);
// can these be switch cases
if ($thumbnail) {
    $src = $thumbnail_url;
    $alt = $thumbnail_alt;
}
if (!$thumbnail && $wistia) {
    $src = $wistia_thumbnail;
    $alt = $wistia_alt . ' Thumbnail';
}
if (!$thumbnail && !$wistia) {
    $src = $youtube_image;
    $alt = 'Youtube Video Thumbnail';
} ?>
<div class='single-video'>
    <<?= $wistia ? 'div' : 'a href="https://www.youtube.com/embed/' . $youtubeID . '" data-lity'; ?>>
        <div class='single-video-thumbnail-wrapper'>
            <img class='single-video-thumbnail' src='<?= $src; ?>' alt='<?= $alt; ?>' />
            <img class='single-video-spacer' src='<?php bloginfo('template_directory'); ?>/images/spacer.png' width='<?= $width; ?>' height='' alt='Image Spacer' />
            <?php if ($wistia) { ?>
                <div data-wistia='<?= $wistiaID; ?>' class='single-wistia wistia_embed wistia_async_<?= $wistiaID; ?> popover=true popoverContent=html'></div>
            <?php } ?>
            <div class='single-video-overlay'>
                <span class='single-video-play-button'><span></span></span>
            </div>
        </div>
        <?php if ($title) { ?>
            <span class='single-video-title'><?= $title; ?></span>
        <?php } ?>
    </<?= $wistia ? 'div' : 'a'; ?>>
</div>