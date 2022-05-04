<?php
$section_three = get_field('section_three');
?>
<section id='section-three'>
    <?php
    get_template_part('template-parts/content', 'layout');
    get_template_part(
        'template-parts/logos',
        'slider',
        array(
            'acf-field' => $section_three,
            'id' => 'sec-three-logos',
        )
    ); ?>
</section>