<?php
$contact = get_field('contact');
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
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='contact-wrapper'>
            <div id='contact-content'>
                <h1 id='contact-title'>Contact Us Today</h1>
                <div id='contact-col-wrapper'>
                    <div class='contact-info-col'>
                        <span class='contact-title'>SaLEM OFFICE</span>
                        <div class='contact-info-col-inner'>
                            <span class='contact-address'>27 Congress Street, #401<br> Salem, MA 01970</span>
                            <a class='contact-get-directions' href='' target='_blank' rel='noopener'>Get Directions</a>
                            <a class='contact-phone' href='tel:+18002003120'><span class='brown-dark'>P</span> &nbsp;(800) 200-3120</a>
                        </div>
                    </div>
                    <div class='contact-info-col'>
                        <span class='contact-title'>BOSTON OFFICE</span>
                        <div class='contact-info-col-inner'>
                            <span class='contact-address'>27 Congress Street, #401<br> Salem, MA 01970</span>
                            <a class='contact-get-directions' href='' target='_blank' rel='noopener'>Get Directions</a>
                            <a class='contact-phone' href='tel:+18002003120'><span class='brown-dark'>P</span> &nbsp;(800) 200-3120</a>
                        </div>
                    </div>
                </div>
                <div id='contact-social-media-wrapper'>
                    <span>STAY CONNECTEd</span>
                    <div id='contact-social-media'>
                        <a href='' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_g.svg'); ?>
                        </a>
                        <a href='' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_fb.svg'); ?>
                        </a>
                        <a href='' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_linked.svg'); ?>
                        </a>
                    </div>
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