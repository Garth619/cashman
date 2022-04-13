<?php
$footer = get_field('footer', 'option');
$footer_title = $footer['footer_title'];
$footer_form_title = $footer['footer_form_title'];
$footer_description = $footer['footer_description'];
$copyright = $footer['copyright'];

$contact = get_field('contact_information', 'option');
$contact_title_one = $contact['contact_title_one'];
$phone = $contact['phone'];
$contact_title_two = $contact['contact_title_two'];
$address = $contact['address'];
$get_directions_link = $contact['get_directions_link'];
$get_directions_verbiage = $contact['get_directions_verbiage'];
$social_media = $contact['social_media'];

?>
<footer>
    <div id='footer-inner'>
        <div id='consultation'>
            <?php if (!is_page_template('template-contact.php') && $footer_title) { ?>
                <span id='footer-form-title'><?= text_wrap($footer_title, ' '); ?></span>
            <?php }
            if ($footer_form_title) { ?>
                <span id='footer-form-subtitle'><?= $footer_form_title; ?></span>
            <?php }
            gravity_form(1, false, false, false, '', true, 2323); ?>
        </div>
        <?php if (!is_page_template('template-contact.php')) { ?>
            <div id='footer-info'>
                <?php if ($footer_description) { ?>
                    <span id='footer-description' style="--i: 200">
                        <?= $footer_description; ?>
                    </span>
                <?php }
                if ($contact_title_one) { ?>
                    <span class='footer-title' style="--i: 300"><?= $contact_title_one; ?></span>
                <?php }
                if ($phone) { ?>
                    <a id='footer-phone' href='tel:+1<?= str_replace(['-', '(', ')', ' '], '', $phone); ?>' style="--i: 400"><?= $phone; ?></a>
                <?php }
                if ($contact_title_two) { ?>
                    <span class='footer-title' style="--i: 500"><?= $contact_title_two; ?></span>
                <?php }
                if ($address) { ?>
                    <address id='footer-address' style="--i: 600"><?= $address; ?></address>
                <?php }
                if ($get_directions_link) { ?>
                    <a id='footer-get-directions' href='<?= $get_directions_link; ?>' target='_blank' rel='noopener' style="--i: 700"><?= $get_directions_verbiage; ?></a>
                <?php } ?>
            </div>
            <?php if ($social_media) { ?>
                <div id='social-media'>
                    <?php foreach ($social_media as $key => $value) {
                        $icon_file = $value['icon'];
                        $icon_name = $icon_file['name'];
                        $icon_url = $icon_file['url'];
                        $icon_link = $value['link'];
                        $auth = stream_context_create( // for demo site. privacy directory disables for some reason?
                            array(
                                'http' => array(
                                    'header' => "Authorization: Basic " . base64_encode("ilawyer:ilawyer")
                                ),
                            )
                        ) ?> <a id='<?= $icon_name; ?>' href='<?= $icon_link; ?>' target='_blank' rel='noopener' style='--i: <?= ($key + 1); ?>'>
                            <?= file_get_contents($icon_url, false, $auth); ?>
                        </a>
                    <?php } ?>
                </div>
        <?php }
        } ?>
    </div>
    <?php if ($copyright) { ?>
        <div id='copyright'>
            <div id='copyright-inner'>
                <ul>
                    <li>COPYRIGHT &copy; <?php echo date('Y'); ?> - <?= get_bloginfo('name'); ?></li>
                    <?php foreach ($copyright as $item) {
                        $list_item = $item['list_item'];
                        if ($list_item) {
                            foreach ($list_item as $post) {
                                setup_postdata($post); ?>
                                <li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
                        <?php }
                        }

                        ?>
                    <?php } ?>
                </ul>
                <a id='ilawyer-logo' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
                    <img src='<?php bloginfo('template_directory'); ?>/images/ilawyer.svg' alt='iLawyer Marketing Logo' width='230' height='16' loading='lazy' />
                </a>
            </div>
        </div>
    <?php } ?>
</footer>
<?php wp_footer(); ?>
<?php the_field('footer_scripts', 'option'); ?>
<?php if (get_field('live_chat', 'option')) { ?>
    <script type="text/javascript">
        function delayScript(src, timeout, attributes) {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    const scriptElem = document.createElement("script");
                    scriptElem.src = src;
                    for (const key in attributes) {
                        const attribute = key;
                        const value = attributes[key];
                        scriptElem.setAttribute(attribute, value ? value : "");
                    }
                    scriptElem.addEventListener("readystatechange", () => {
                        resolve();
                    });
                    document.head.appendChild(scriptElem);
                }, timeout);
            });
        }
        delayScript("<?php the_field('live_chat', 'option'); ?>", 2000);
    </script>
<?php } ?>
</body>

</html>