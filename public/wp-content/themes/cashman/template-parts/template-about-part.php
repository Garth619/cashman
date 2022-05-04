<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main id='about-wrapper'>
            <?php
            get_template_part('template-parts/selling', 'points');
            get_template_part('template-parts/content', 'layout');
            // get_template_part(
            //     'template-parts/logos',
            //     'slider',
            //     array(
            //         'acf-field' => $section_three,
            //         'id' => 'sec-three-logos',
            //     )
            // );
            ?>
        </main>
<?php
    endwhile;
endif; ?>