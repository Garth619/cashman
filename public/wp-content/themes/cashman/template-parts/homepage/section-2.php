<?php
$section_two = get_field('section_two');
?>
<section id='section-two'>
    <div id='sec-two-inner'>
        <div id='sec-two-sp'>
            <?php get_template_part('template-parts/selling', 'points', array(
                'acf-field' => $section_two,
                'id' => 'sec-two-selling-points',
                'loading' => 'eager'
            )); ?>
            <div id='sec-two-content'>
                <div id='sec-two-content-left'>
                    <h1>Massachusett’s Medical Negligence & Serious Personal Injury Attorney</h1>
                </div>
                <div id='sec-two-content-right' class='content'>
                    <div id='sec-two-content-right-inner'>
                        <p>Attorney Mark A. Cashman represents victims of medical negligence, dangerous and defective products, construction site injuries, motor vehicle negligence, and dangerous property/landlord negligence cases. He is licensed to practice in Massachusetts, New Hampshire, and Rhode Island.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img id='sec-two-background' src='<?php bloginfo('template_directory'); ?>/images/bg.jpg' alt='altname' width='1943' height='1497' loading='lazy' />
</section>