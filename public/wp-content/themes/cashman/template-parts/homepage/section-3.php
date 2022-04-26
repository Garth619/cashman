<?php
$section_three = get_field('section_three');
$disable_logos = $section_three['disable_logos'];
$logos_slider = $section_three['logos_slider'];
$logos = $logos_slider['logos'];
print_r($logos);
?>
<section id='section-three'>
    <div id='sec-three-inner' class='content'>
        <div id='sec-three-top'>
            <div class='sec-three-content'>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac gravida libero. Cras felis dolor, porta at lectus in, rhoncus laoreet enim.</h2>
                <p>Nunc non posuere nunc, vel commodo nunc. Nulla at orci sit amet massa aliquam fermentum et eget diam. Aliquam eu imperdiet nulla. Donec vitae erat in lacus euismod vulputate. Proin mattis, augue ac laoreet aliquet, libero leo elementum dui, non varius lectus dui id tellus. Nam porttitor, sapien at tincidunt suscipit, nisl risus feugiat metus, id gravida nunc purus sed sem. Nunc id ante lacus. Vivamus blandit arcu in aliquet auctor. Suspendisse potenti. </p>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac gravida libero. Cras felis dolor, porta at lectus in, rhoncus laoreet enim.</h2>
                <p>Cras felis dolor, porta at lectus in, rhoncus laoreet enim. Nunc non posuere nunc, vel commodo nunc. Nulla at orci sit amet massa aliquam fermentum et eget diam. Aliquam eu imperdiet nulla. Donec vitae erat in lacus euismod vulputate. Proin mattis, augue ac laoreet aliquet, libero leo elementum dui, non varius lectus dui id tellus. Nam</p>
            </div>
            <div class='sec-three-image-wrapper'>
                <div class='img-wrapper'>
                    <img src='<?php bloginfo('template_directory'); ?>/images/content_img_2.jpg' alt='altname' width='386' height='468' loading='lazy' />
                </div>
                <div class='img-wrapper'>
                    <img src='<?php bloginfo('template_directory'); ?>/images/content_img_1.jpg' alt='altname' width='521' height='632' loading='lazy' />
                </div>
            </div>
        </div>
        <div id='sec-three-blockquote'>
            <blockquote>
                <p>Nunc non posuere nunc, vel commodo nunc. Nulla at orci sit amet massa aliquam fermentum et eget diam aliquam.</p>
            </blockquote>
        </div>
        <div id='sec-three-bottom'>
            <div class='sec-three-image-wrapper'>
                <div class='img-wrapper'>
                    <img src='<?php bloginfo('template_directory'); ?>/images/content_img_3.jpg' alt='altname' width='614' height='747' loading='lazy' />
                </div>
                <a class='sec-three-learn-more' href='<?php bloginfo('bloginfo'); ?>/'>
                    <span class='link'>LeARN MORE ABOUT MARK </span>
                    <span class='arrow'>
                        <?php echo file_get_contents(get_template_directory() . '/images/learn_about_arrow.svg'); ?>
                        <?php echo file_get_contents(get_template_directory() . '/images/learn_about_arrow_2.svg'); ?>
                    </span>
                </a>
            </div>
            <div class='sec-three-content'>
                <h2>While studying in law school, Mark’s father suffered a delay in diagnosis of lung cancer.</h2>
                <p>He had a persistent cough for months before finally getting the test that discovered his terminal cancer. Having lived through the frustrations of the medical system and unnecessary delays has driven him to fight for victims of medical negligence.</p>
                <p>Prior to opening this firm, he worked as a Trial Lawyer at several nationally recognized plaintiff firms. Most recently, he served as head of the medical malpractice department. Mark’s first trained as a lawyer in the Boston office of the U.S. Attorney/Department of Justice. He was mentored by several elite civil prosecutors and FBI agents investigating health care fraud, illegal kickbacks, and off label marketing in violation of the federal false claims act.</p>
                <p>Attorney Mark A. Cashman represents victims of medical negligence, dangerous and defective products, construction site injuries, motor vehicle negligence, and dangerous property/landlord negligence cases. He is licensed to practice in Massachusetts, New Hampshire, and Rhode Island.</p>
            </div>
        </div>
    </div>

    <div id='sec-three-logos'>
        <?php

        foreach ($logos as $logo) {
            $img = $logo['logo'];
            $img_url = $img['url'];
            $img_alt = $img['alt'];
            $img_name = $img['name'];
            $img_class = (str_replace(' ', '-', strtolower($img_name)));
        ?>
            <div class='sec-three-logo <?= $img_class; ?>'>
                <div class='sec-three-logo-inner'>
                    <img src='<?= $img_url; ?>' alt='<?= $img_alt; ?>' loading='lazy' />
                </div>
            </div>
        <?php } ?>

    </div>

</section>