<?php
/* Template Name: Home */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('template-parts/homepage/section', '1');
        get_template_part('template-parts/homepage/section', '2');
        get_template_part('template-parts/homepage/section', '3');
        get_template_part('template-parts/homepage/section', '4');
        get_template_part('template-parts/homepage/section', '5');
        get_template_part('template-parts/homepage/section', '6');
        get_template_part('template-parts/homepage/section', '7');
    endwhile;
endif;
get_footer();
