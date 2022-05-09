<?php
$att = get_field('attorney_profile');
$img = $att['attorney_image'];
$img_url = $img['url'];
$img_alt = $img['alt'];
$acc_title = $att['accolades_title'];
$acc = $att['accolades'];
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='attprofile-wrapper' class='template-part-wrapper'>
            <div id='attprofile-container'>
                <div id='attprofile-img-wrapper'>
                    <?php if ($img) { ?>
                        <img src='<?= $img_url; ?>' alt='<?= $img_alt; ?>' width='641' height='872' loading='eager' />
                    <?php } else { ?>
                        <div class='attprofile-placeholder'>
                            <img src='<?php bloginfo('template_directory'); ?>/images/att_placeholder.png' alt='Attorney Image Placeholder' width='641' height='872' loading='eager' />
                        </div>
                    <?php } ?>
                </div>
                <div id='attprofile-content' class='content'>
                    <?php the_content(); ?>
                    <div id='att-accolades'>
                        <?php if ($acc_title) { ?>
                            <h2><?= $acc_title; ?></h2>
                        <?php } ?>
                        <?php if ($acc) {
                            foreach ($acc as $single) {
                                $title = $single['title'];
                                $list_items = $single['list_items']; ?>
                                <div class='single-accolade'>
                                    <div class='single-accolade-title'>
                                        <span><?= $title; ?></span>
                                        <?php echo file_get_contents(get_template_directory() . '/images/att-arrow.svg'); ?>
                                    </div>
                                    <div class='single-accolade-content'>
                                        <ul>
                                            <?php foreach ($list_items as $list_item) {
                                                $bullet = $list_item['list_item'];
                                                $sub_list_items = $list_item['sub_list_items']; ?>
                                                <li><?= $bullet; ?>
                                                    <?php if ($sub_list_items) { ?>
                                                        <ul>
                                                            <?php foreach ($sub_list_items as $sub_list_item) {
                                                                $sub_bullet = $sub_list_item['sub_list_item']; ?>
                                                                <li><?= $sub_bullet; ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <?php
            get_template_part(
                'template-parts/logos',
                'slider',
                array(
                    'acf-field' => $att,
                    'id' => 'att-logos',
                )
            ); ?>
        </div>
<?php endwhile;
endif; ?>