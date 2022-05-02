<div class='content'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (is_home() || is_archive()) { ?>
                <div class='blog-post'>
                    <h2 class='blog-title'><a class='blog-heading-link' href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                    <?php get_template_part('template-parts/post-meta'); ?>
                    <?= wp_trim_words(get_the_content(), 70, '...'); ?>
                    <a class='blog-button button-one' href='<?php the_permalink(); ?>'>Read More</a>
                </div>
        <?php } else {
                if (is_single()) {
                    get_template_part('template-parts/post-meta');
                }
                the_content();
            }
        endwhile; ?>
</div>
<?php
        if (ilaw_has_class('ilawyer-blog')) {
            get_template_part('template-parts/pagination');
        }
    endif;
    if (!have_posts()) {
        if (is_404()) { ?>
    <p>This page does not exist. Please go <span class="go-back">BACK</span> or <a href="/">HOME</a></p>
<?php } else { ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php }
    }; ?>