<?php
$contact = get_field('contact');
$title = $contact['title'];
$img_one = $contact['contact_image_one'];
$img_one_url = $img_one['url'];
$img_one_alt = $img_one['alt'];
$img_one_width = $img_one['width'];
$img_one_height = $img_one['height'];
$img_two = $contact['contact_image_two'];
$img_two_url = $img_two['url'];
$img_two_alt = $img_two['alt'];
$img_two_width = $img_two['width'];
$img_two_height = $img_two['height'];
$sm_title = $contact['social_media_title'];
$contact_info = get_field('contact_information', 'option');
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='contact-wrapper'>
            <div id='contact-content'>
                <?php if ($title) { ?>
                    <h1 id='contact-title'><?= text_wrap($title, ' '); ?></h1>
                <?php } ?>
                <div id='contact-col-wrapper'>
                    <?php get_template_part('template-parts/locations', null, array(
                        'acf-field' => $contact_info,
                        'template-location' => 'contact'
                    )); ?>
                </div>
                <div id='contact-social-media-wrapper'>
                    <?php if ($sm_title) { ?>
                        <span><?= $sm_title; ?></span>
                    <?php }
                    get_template_part('template-parts/social', 'media', array(
                        'acf-field' => $contact_info,
                        'template-location' => 'contact'
                    )); ?>
                </div>
            </div>
            <div id='contact-image-wrapper'>
                <div class='img-wrapper'>
                    <img src='<?= $img_one_url; ?>' alt='<?= $img_one_alt; ?>' width='<?= $img_one_width; ?>' height='<?= $img_one_height; ?>' />
                </div>
                <div class='img-wrapper'>
                    <img src='<?= $img_two_url; ?>' alt='<?= $img_two_alt; ?>' width='<?= $img_two_width; ?>' height='<?= $img_two_height; ?>' />
                </div>
            </div>
        </div>
<?php
    endwhile;
endif; ?>