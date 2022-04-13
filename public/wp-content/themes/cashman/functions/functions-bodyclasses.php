<?php

/**
 * Add Body Classes to various templates and acfs for conditional internal layout shifts
 */
function body_classes($classes)
{
    /**
     * Exclude front page
     */
    if (!is_front_page()) {
        /**
         *  Blog
         */
        $is_blog = is_home() || is_archive() || is_single();
        if ($is_blog) {
            $classes[] = 'ilawyer-blog';
        }
        /**
         * Default Page Template
         */
        $default_template = is_page() && !is_page_template();
        if ($default_template) {
            $classes[] = 'ilawyer-default-page';
        }
        /**
         * Internal Page Template
         *
         * adds a template name if not on the blog or default page template. Also cleaner than default "page-template-template-testimonials"
         */
        if (!($is_blog || $default_template)) {
            $page_slug = get_page_template_slug();
            $page_name = str_replace(['.php'], '', $page_slug);
            $classes[] = $page_name;
        }
        /**
         * Single Column and Two Column Layouts
         *
         * Determines which layouts to use on internal pages
         */
        if ($is_blog || $default_template || is_404()) {
            $classes[] = 'ilawyer-two-col-layout';
        } else {
            $classes[] = 'ilawyer-single-col-layout';
        }
        /**
         * Internal Page Options
         */
        $page_banners = get_field('internal_page_options_new');
        $banner_title = $page_banners['banner_text'];
        $banner_h1 = $page_banners['h1_in_banner'];
        $banner_disable = $page_banners['disable_banner'];
        $mobile_banner_button = $page_banners['mobile_banner_button_position'];
        $alt_banner_layout = $page_banners['alternative_banner_layout'];
        $internal_disable_images = $page_banners['banner_background_images']['disable_images'];

        if ($banner_h1) {
            $classes[] = 'ilawyer-h1-in-banner';
        }
        if ($banner_disable) {
            $classes[] = 'ilawyer-banner-disabled';
        }
        if ($mobile_banner_button) {
            $classes[] = 'ilawyer-mobile-button-in-banner';
        } else {
            $classes[] = 'ilawyer-mobile-button-in-content';
        }
        if ($alt_banner_layout) {
            $classes[] = 'ilawyer-alt-banner-layout';
        }
        if ($internal_disable_images) {
            $classes[] = 'ilawyer-global-banner-images';
        } else {
            $classes[] = 'ilawyer-internal-banner-images';
        }
        /**
         * Add classes to style the header differently with no banner or on page scroll
         */
        if (
            $banner_disable
            //&& !is_front_page()
        ) {
            $classes[] = 'white-header';
            $classes[] = 'no-banner';
        }
        /**
         * Page Template Page Titles when banner is disabled
         */
        if ($banner_disable) {
            if (
                is_page_template(
                    array(
                        'template-attprofile.php',
                        'template-about.php',
                    )
                )
            ) {
                $classes[] = 'page-title-blue-no-banner';
            } elseif (
                is_page_template(
                    array(
                        'template-testimonials.php',
                        'template-padirectory.php',
                        'template-caseresults.php',
                        'template-meetteam.php',
                        'template-contact.php',
                    )
                )
            ) {
                $classes[] = 'page-title-gold-no-banner';
            }
        }
    }
    return $classes;
}

add_filter('body_class', 'body_classes');
/**
 * Function to simplify checking for a body class. Loads template parts, conditionals, and layouts  in template files
 *
 * Replaces in_array($class, get_body_class())
 */
function ilaw_has_class($class)
{
    if (in_array($class, get_body_class())) {
        return true;
    } else {
        return false;
    }
}
/**
 *  Get internal template name other than blog or default template
 *
 * Returns name of the template + 'part'
 */
function ilaw_get_template()
{
    $is_blog = is_home() || is_archive() || is_single();
    $default_template = is_page() && !is_page_template();
    if (!($is_blog || $default_template)) {
        $page_slug = get_page_template_slug();
        $page_name = str_replace(['.php'], '', $page_slug);
        return $page_name . '-part';
    } else {
        return;
    }
}
