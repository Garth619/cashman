<footer>
    <div id='footer-inner'>
        <div id='consultation'>
            <span id='footer-form-title'>You are<br> our priority</span>
            <span id='footer-form-subtitle'>Free Case Evaluation</span>
            <span id='footer-form-descrip'>Rest assured a member of The Cashman Law Firm will be in touch with you shortly.</span>
            <?php gravity_form(1, false, false, false, '', true, 2323); ?>
        </div>
        <div id='footer-info'>
            <div class='footer-info-col'>
                <span id='contact-title'>Contact Us Today</span>
            </div>
            <div class='footer-info-col'>
                <span class='footer-title'>SaLEM OFFICE</span>
                <span class='footer-address'>27 Congress Street, # 401 Salem, MA 01970</span>
                <a class='get-directions' href='' target='_blank' rel='noopener'>Get Directions</a>
                <a href='tel:+18002003120'><span class='p-accent'>P</span> (800) 200-3120</a>
            </div>
            <div class='footer-info-col'>
                <span class='footer-title'>BOSTON OFFICE</span>
                <span class='footer-address'>27 Congress Street, # 401
                    Salem, MA 01970</span>
                <a class='get-directions' href='' target='_blank' rel='noopener'>Get Directions</a>
                <a href='tel:+18002003120'><span class='p-accent'>P</span> (800) 200-3120</a>
            </div>
            <div class='footer-info-col'>
                <div id='social-media'>
                    <a href='' target='_blank' rel='noopener'>
                        <?php echo file_get_contents(get_template_directory() . '/images/social_fb.svg'); ?>
                    </a>
                    <a href='' target='_blank' rel='noopener'>
                        <?php echo file_get_contents(get_template_directory() . '/images/social_g.svg'); ?>
                    </a>
                    <a href='' target='_blank' rel='noopener'>
                        <?php echo file_get_contents(get_template_directory() . '/images/social_linked.svg'); ?>
                    </a>
                </div>
            </div>
        </div>
        <img id='footer-bg' src='<?php bloginfo('template_directory'); ?>/images/bg.jpg' alt='altname' width='1943' height='1497' loading='lazy' />
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