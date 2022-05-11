<div id='internal-main'>
    <?php
    /**
     * If its a default page or black banner template, get the banner
     */
    if (ilaw_has_class('ilawyer-default-page') || ilaw_has_class('ilawyer-alt-banner-layout')) {
        get_template_part('template-parts/banner');
    } ?>
    <main id='page-container'>
        <?php
        /**
         * Show a centered h1 title if the template doesnt call for a banner
         */
        if (ilaw_has_class('ilawyer-no-banner-with-title-layout')) { ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap(get_the_title(), ' '); ?>
            </h1>
        <?php } ?>
        <?php
        /**
         * If blog posts page
         */
        if (is_home()) {
            $blog_title = get_the_title(get_option('page_for_posts', true)); ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap($blog_title, ' '); ?>
            </h1>
        <?php }
        /**
         * If category or archive page
         */
        elseif (is_archive()) { ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap(get_the_archive_title(), ' '); ?>
            </h1>
        <?php } ?>
        <div id='page-container-inner'>
            <?php
            /**
             * If its a default internal page, blog or 404 page, get the template part with a two col container
             */
            if (ilaw_has_class('ilawyer-two-col-layout')) {
                get_template_part('template-parts/default', 'content');
            }
            /**
             * If custom internal page template, use a template part with a single col container
             */
            if (ilaw_has_class('ilawyer-single-col-layout')) {
                /**
                 * ilaw_get_template() returns 'current template name' - 'part' (template files and template part files are named similarly)
                 */
                get_template_part('template-parts/' . ilaw_get_template() . '');
            } ?>
        </div>
    </main>
</div>