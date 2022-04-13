<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <ul id="padirectory-top-menu" class='template-part-wrapper'>
            <?php while (has_sub_field('practice_area_directory')) : ?>
                <li>
                    <a><?php the_sub_field('title'); ?></a>
                    <?php $obj = get_sub_field('pa_nav_menu');
                    wp_nav_menu(array('menu' => $obj->name)); ?>
                </li>
            <?php endwhile; ?>
        </ul>
<?php
    endwhile;
endif; ?>