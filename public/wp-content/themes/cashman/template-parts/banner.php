<?php
$global_banners = get_field('global_internal_banners', 'options');
$global_title = $global_banners['banner_text'];
$page_banners = get_field('internal_page_options_new');
$banner_title = $page_banners['banner_text'];
$blog_banner = get_field('blog_banners', 'options');
$bodyclass = get_body_class();
/**
 * Show banners except when disabled or on the blog post type
 */
if (!(ilaw_has_class('ilawyer-banner-disabled') || ilaw_has_class('ilawyer-blog'))) { ?>
    <section id='banner'>
        <div id='banner-content'>
            <?php
            /**
             * If the alternate banner layout option is selected
             */
            if (ilaw_has_class('ilawyer-alt-banner-layout')) { ?>
                <h1 id='banner-title'>
                    <?php echo text_wrap(get_the_title(), ' '); ?>
                </h1>
            <?php }
            /**
             * If the alternate banner layout option is selected not selected
             *
             * If the h1 in the banner is selected
             */
            elseif (ilaw_has_class('ilawyer-h1-in-banner')) { ?>
                <h1 id='banner-title' class='h1-banner-title'><?= text_wrap(get_the_title(), ' '); ?></h1>
            <?php }
            /**
             * Otherwise, show the banner text
             */
            else { ?>
                <span id='banner-title'>
                    <?php
                    /**
                     * 404 banner text
                     */
                    if (is_404()) {
                        echo text_wrap('Not Found', ' ');
                    }
                    /**
                     * All other pages except the 404 page
                     */
                    else {
                        /**
                         * If banner text is specific to the current page only
                         *
                         * Otherwise, show the global banner text act option under site options
                         */
                        if ($banner_title) {
                            echo text_wrap($banner_title, ' ');
                        } else {
                            echo text_wrap($global_title, ' '); ?>
                </span>
        <?php }
                    } ?>
        </span>
    <?php }
            /**
             * Show the banner button option except for the alternative banner layout option
             */
            if (!ilaw_has_class('ilawyer-alt-banner-layout')) {
                get_template_part('template-parts/button', null, array(
                    'acf-field' => $global_banners,
                    'button-classes' => 'banner-button internal-button button-one',
                ));
            } ?>
        </div>
        <?php
        /**
         * If on a page, and a page needs specific banner images
         */
        if (is_page()) {
            if (ilaw_has_class('ilawyer-internal-banner-images')) {
                $acf_field = $page_banners;
            }
            /**
             * If no specific banner images, then show the global banner images
             */
            if (ilaw_has_class('ilawyer-global-banner-images')) {
                $acf_field = $global_banners;
            }
        }
        /**
         * If on the 404 page, just show the global banners
         */
        if (is_404()) {
            $acf_field = $global_banners;
        }
        if (ilaw_has_class('ilawyer-alt-banner-layout')) { ?>
            <img class="internal-banner-image banner-img" src="<?php bloginfo('template_directory'); ?>/images/bg.jpg" alt="Black Background" width="1943" height="1497" loading="eager">
        <?php } else {
            /**
             * Gets the acf cloned template part - background images
             */
            get_template_part('template-parts/background-images', null, array(
                'class' => 'internal-banner-image',
                'acf-field' => $acf_field,
                'loading' => 'eager',
                'width' => '1920',
                'height' => '475',
            ));
        } ?>
    </section>
<?php } ?>