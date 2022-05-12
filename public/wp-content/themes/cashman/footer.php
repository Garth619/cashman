<?php
$footer = get_field('footer', 'option');
$form_title = $footer['form_title'];
$form_subtitle = $footer['form_subtitle'];
$form_description = $footer['form_description'];
$contact_title = $footer['contact_title'];
$contact_info = get_field('contact_information', 'option'); ?>
<footer>
    <div id='footer-inner'>
        <div id='consultation'>
            <div id='consultation-content'>
                <?php if ($form_title) { ?>
                    <span id='footer-form-title'><?= $form_title; ?></span>
                <?php }
                if ($form_subtitle) { ?>
                    <span id='footer-form-subtitle'><?= $form_subtitle; ?></span>
                <?php }
                if ($form_subtitle) { ?>
                    <span id='footer-form-descrip'><?= $form_description; ?></span>
                <?php } ?>
            </div>
            <?php gravity_form(1, false, false, false, '', true, 2323); ?>
        </div>
        <?php if (!is_page_template('template-contact.php')) { ?>
            <?php if ($contact_title) { ?>
                <div id='footer-info'>
                    <div class='footer-info-col'>
                        <span id='footer-contact-title'><?= $contact_title; ?></span>
                    </div>
                <?php }
            get_template_part('template-parts/locations', null, array(
                'acf-field' => $contact_info,
                'template-location' => 'footer'
            )); ?>
                <div class='footer-info-col'>
                    <?php get_template_part('template-parts/social', 'media', array(
                        'acf-field' => $contact_info,
                        'template-location' => 'footer'
                    )); ?>
                </div>
                </div>
            <?php } ?>
            <img id='footer-bg' src='<?php bloginfo('template_directory'); ?>/images/bg_footer_test.jpg' alt='Background Image' width='1943' height='1497' loading='lazy' />
    </div>
    <div id='copyright'>
        <div id='copyright-inner'>
            <a id='ilawyer-logo' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
                <img src='<?php bloginfo('template_directory'); ?>/images/ilawyer_logo.svg' alt='ilawyer Logo' width='228' height='19' loading='lazy' />
            </a>
            <?php $copyright = $footer['copyright']; ?>
            <?php if ($copyright) : ?>
                <ul>
                    <li>COPYRIGHT &copy; <?php echo date('Y'); ?> - <?= get_bloginfo('name'); ?></li>
                    <?php foreach ($copyright as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
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