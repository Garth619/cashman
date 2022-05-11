<footer>
    <div id='footer-inner'>
        <div id='consultation'>
            <div id='consultation-content'>
                <span id='footer-form-title'>You are<br> our priority</span>
                <span id='footer-form-subtitle'>Free Case Evaluation</span>
                <span id='footer-form-descrip'>Rest assured a member of The Cashman Law Firm will be in touch with you shortly.</span>
            </div>
            <?php gravity_form(1, false, false, false, '', true, 2323); ?>
        </div>
        <?php if (!is_page_template('template-contact.php')) { ?>
            <div id='footer-info'>
                <div class='footer-info-col'>
                    <span id='footer-contact-title'>Contact Us Today</span>
                </div>
                <div class='footer-info-col'>
                    <span class='footer-title'>SaLEM OFFICE</span>
                    <div class='footer-info-col-inner'>
                        <span class='footer-address'>27 Congress Street, #401<br> Salem, MA 01970</span>
                        <a class='get-directions' href='https://www.google.com/maps/place/27+Congress+St+%23+401,+Salem,+MA+01970/@42.5182186,-70.8898749,17z/data=!3m1!4b1!4m5!3m4!1s0x89e31466c70a207f:0x78010c96584e8ac4!8m2!3d42.5182186!4d-70.8876862' target='_blank' rel='noopener'>Get Directions</a>
                        <a class='footer-phone' href='tel:+18002003120'><span class='brown-light'>P</span> &nbsp;(800) 200-3120</a>
                    </div>
                </div>
                <div class='footer-info-col'>
                    <span class='footer-title'>BOSTON OFFICE</span>
                    <div class='footer-info-col-inner'>
                        <span class='footer-address'>27 Congress Street, #401<br> Salem, MA 01970</span>
                        <a class='get-directions' href='https://www.google.com/maps/place/27+Congress+St+%23+401,+Salem,+MA+01970/@42.5182186,-70.8898749,17z/data=!3m1!4b1!4m5!3m4!1s0x89e31466c70a207f:0x78010c96584e8ac4!8m2!3d42.5182186!4d-70.887686' target='_blank' rel='noopener'>Get Directions</a>
                        <a class='footer-phone' href='tel:+18002003120'><span class='brown-light'>P</span> &nbsp;(800) 200-3120</a>
                    </div>
                </div>
                <div class='footer-info-col'>
                    <div id='social-media'>
                        <a href='//google.com' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_g.svg'); ?>
                        </a>
                        <a href='//facebook.com' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_fb.svg'); ?>
                        </a>
                        <a href='//linkedin.com' target='_blank' rel='noopener'>
                            <?php echo file_get_contents(get_template_directory() . '/images/social_linked.svg'); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <img id='footer-bg' src='<?php bloginfo('template_directory'); ?>/images/bg.jpg' alt='altname' width='1943' height='1497' loading='lazy' />
    </div>
    <div id='copyright'>
        <div id='copyright-inner'>
            <a id='ilawyer-logo' href='//ilawyermarketing.com' target='_blank' rel='noopener'>
                <img src='<?php bloginfo('template_directory'); ?>/images/ilawyer_logo.svg' alt='ilawyer Logo' width='228' height='19' loading='lazy' />
            </a>
            <ul>
                <li>COpYRIGHT &copy; <?php echo date('Y'); ?> - THE CASHMAN LAW FIRM</li>
                <li><a href='<?php the_permalink(169); ?>'>DISCLAIMER</a></li>
                <li><a href='<?php the_permalink(693); ?>'>SITEMAP</a></li>
            </ul>
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