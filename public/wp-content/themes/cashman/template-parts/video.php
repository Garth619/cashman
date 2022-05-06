<?php

/**
 * Experimental Reusable ACF Clone
 *
 * Get Template Part Args
 */
$array_defaults = array(
    'acf-field' => '',
);
$args = wp_parse_args($args, $array_defaults);
$acf_field = $args['acf-field'];
/**
 * ACFs
 */
$video_choice = $acf_field['wistia_or_youtube'];
$wistia = $video_choice; // !$wistia is youtube
$wistiaID = $acf_field['video_option_wistia_id'];
$youtubeID = $acf_field['video_option_youtube_id'];
$youtube_image = 'https://img.youtube.com/vi/' . $youtubeID . '/0.jpg';
$thumbnail =  $acf_field['video_options_thumbnail'];
$thumbnail_url = $thumbnail['url'];
$thumbnail_alt = $thumbnail['alt'];
$title = $acf_field['video_options_video_title'];
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "fast.wistia.net/oembed?url=http://home.wistia.com/medias/dsqtgjeu3h?embedType=async&videoWidth=473");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

$response = json_decode($output, true);
//$errors = $response['response']['errors'];
$data = $response['thumbnail_url'];

print_r($data);
// close curl resource to free up system resources
curl_close($ch);
if ($wistia) {
    $videolink = '#';
    if ($thumbnail) {
        $view = 'html';
    } else {
        $view = 'thumbnail';
    }
}
if (!$wistia) {
    $videolink = 'https://www.youtube.com/embed/' . $youtubeID;
}

?>
<div class='single-video'>
    <a href='<?= $videolink; ?>' <?= !$wistia ? 'data-lity' : ''; ?>>
        <div class='single-video-thumbnail-wrapper'>
            <?php if ($thumbnail) { ?>
                <img class='single-video-thumbnail' src='<?= $thumbnail_url; ?>' alt='<?= $thumbnail_alt; ?>' />
            <?php }
            if (!$thumbnail && !$wistia) { ?>
                <img class='single-video-thumbnail' src="<?= $youtube_image; ?>" />
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
<?php

?>