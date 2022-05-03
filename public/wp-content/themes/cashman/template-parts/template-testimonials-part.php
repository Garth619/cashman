<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='testimonials-wrapper' class='template-part-wrapper'>
            <div id='testimonials-feature'>
                <img class='stars' src='<?php bloginfo('template_directory'); ?>/images/stars_1.svg' alt='Stars Icon' width='157' height='26' />
                <span class='intro'>The most comforting part was how easily I could reach him. Mark responded to my emails and calls promptly I would highly recommend him.</span>
                <p>My name is Marianne I am a RN who was heading home from a 12 hr shift working in the Er I was stopped at a red light waiting to turn when I was hit head on by a truck . I had a displaced sternal fracture which kept me out of work for 3 1/2 months I had Mark represent me thru a very complicated legal process…</p>
                <span class='name'>MaRIANNE - CLIENT</span>
            </div>
            <div id='testimonials-list'>

            </div>

        </div>
<?php
    endwhile;
endif; ?>