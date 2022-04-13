<article id='page-content'>
    <?php
    if (
        !(ilaw_has_class('ilawyer-h1-in-banner') ||
            ilaw_has_class('ilawyer-blog') ||
            ilaw_has_class('ilawyer-alt-banner-layout')
        )
    ) { ?>
        <h1 class='page-title <?= ilaw_has_class('ilawyer-mobile-button-in-banner') ? "" : "center"; ?>'>
            <?php the_title(); ?>
        </h1>
    <?php }
    if (
        !(ilaw_has_class('ilawyer-blog') ||
            ilaw_has_class('ilawyer-alt-banner-layout')
        )
    ) {
        $acf = get_field('global_internal_banners', 'option');
        get_template_part('template-parts/button', null, array(
            'acf-field' => $acf,
            'button-classes' => 'page-button internal-button button-one',
        ));
    }
    ?>
    <div id='page-inner-content'>
        <?php get_template_part('template-parts/loop'); ?>
    </div>
</article>
<?php get_sidebar(); ?>