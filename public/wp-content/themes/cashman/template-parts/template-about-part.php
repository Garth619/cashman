<?php
$about = get_field('about_us');
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main id='about-wrapper' class='template-part-wrapper'>
            <?php
            get_template_part(
                'template-parts/selling',
                'points',
                array(
                    'acf-field' => $about,
                    'id' => 'about-selling-points',
                    'loading' => 'eager'
                )
            );
            get_template_part(
                'template-parts/content',
                'layout',
                array(
                    'acf-field' => $about
                )
            );
            get_template_part(
                'template-parts/logos',
                'slider',
                array(
                    'acf-field' => $about,
                    'id' => 'about-logos',
                )
            );
            ?>
        </main>
<?php
    endwhile;
endif; ?>