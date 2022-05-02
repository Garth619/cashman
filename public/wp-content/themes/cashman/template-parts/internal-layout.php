<div id='internal-main'>
    <?php get_template_part('template-parts/banner'); ?>
    <main id='page-container'>
        <?php
        if (ilaw_get_template() && ilaw_has_class('ilawyer-banner-disabled')) { ?>
            <h1 class='page-title'><?= text_wrap(get_the_title(), ' '); ?></h1>
        <?php  } elseif (ilaw_has_class('ilawyer-blog')) {
            if (
                is_home()
            ) {
                $blog_title = get_the_title(get_option('page_for_posts', true));
                echo text_wrap($blog_title, ' ');
            } elseif (is_archive()) {
                echo text_wrap(get_the_archive_title(), ' ');
            } elseif (
                is_single()
                // ||
                // ilaw_has_class('ilawyer-alt-banner-layout')
            ) {
                echo text_wrap(get_the_title(), ' ');
            }
        } ?>
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