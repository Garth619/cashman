<div id='internal-main'>
    <?php get_template_part('template-parts/banner'); ?>
    <main id='page-container'>

        <?php if (ilaw_get_template() && ilaw_has_class('ilawyer-banner-disabled')) { ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap(get_the_title(), ' '); ?>
            </h1>
        <?php } ?>
        <?php if (is_home()) {
            $blog_title = get_the_title(get_option('page_for_posts', true)); ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap($blog_title, ' '); ?>
            </h1>
        <?php } elseif (is_archive()) { ?>
            <h1 class='page-title no-banner-title'>
                <?php echo text_wrap(get_the_archive_title(), ' '); ?>
            </h1>
        <?php } ?>
        <div id='page-container-inner'>
            <?php if (ilaw_has_class('ilawyer-single-col-layout')) {
                get_template_part('template-parts/' . ilaw_get_template() . '');
            }
            if (ilaw_has_class('ilawyer-two-col-layout')) {
                get_template_part('template-parts/default', 'content');
            } ?>
        </div>
    </main>
</div>