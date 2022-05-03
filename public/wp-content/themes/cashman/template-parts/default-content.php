<article id='page-content'>
    <?php
    /**
     * Show h1 the_title() on all internal default pages except:
     *
     * If the h1 is selected to be in the banner or
     *
     * an alternate banner layout
     *
     * on the main blog post page, category and archive pages
     */
    if (
        !(ilaw_has_class('ilawyer-h1-in-banner') || is_home() || is_archive() || ilaw_has_class('ilawyer-alt-banner-layout'))
    ) { ?>
        <h1 class='page-title'>
            <?php the_title(); ?>
        </h1>
    <?php }
    /**
     * Show the internal button underneath the default h1 on all internal default pages
     *
     * Does not show on the blog post types or if the banner is disabled
     *
     * This shows only on mobile if the 'Mobile Banner Button Position' acf is selected to be in the content and is hidden on all other devices with css
     */
    if (
        !(ilaw_has_class('ilawyer-blog') || ilaw_has_class('ilawyer-banner-disabled') || ilaw_has_class('ilawyer-alt-banner-layout'))
    ) {
        /**
         * Global button ACF options under site options
         */
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