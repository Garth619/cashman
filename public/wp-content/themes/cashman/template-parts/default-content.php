<article id='page-content'>
    <?php
    if (
        !(ilaw_has_class('ilawyer-h1-in-banner') ||
            is_home() ||
            is_archive() ||
            ilaw_has_class('ilawyer-alt-banner-layout')
        )
    ) {

        // analyze from here
    ?>
        <h1 class='page-title'>
            <?php the_title(); ?>
        </h1>
    <?php }
    if (
        // does this apply to new site?
        !
        // (
        ilaw_has_class('ilawyer-blog')
        // ||
        // ilaw_has_class('ilawyer-alt-banner-layout'
        // )
        // )
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