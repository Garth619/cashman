<div id='internal-main'>
    <?php get_template_part('template-parts/banner'); ?>
    <main id='page-container'>
        <?php
        if (ilaw_get_template() && ilaw_has_class('ilawyer-banner-disabled') && (!ilaw_has_class('template-contact'))) {
        ?>
            <h1 class='page-title'><?= text_wrap(get_the_title(), ' '); ?></h1>
        <?php }
        if (ilaw_has_class('ilawyer-single-col-layout')) {
            get_template_part('template-parts/' . ilaw_get_template() . '');
        }
        if (ilaw_has_class('ilawyer-two-col-layout')) {
            get_template_part('template-parts/default', 'content');
        } ?>
    </main>
</div>