<?php
$sec_six = get_field('section_six');
$title = $sec_six['title'];
$case_results = $sec_six['case_results']; ?>
<section id='section-six'>
    <div id='sec-six-inner'>
        <?php if ($title) { ?>
            <span id='sec-six-title'><?= text_wrap($title, ' '); ?></span>
        <?php } ?>
        <?php get_template_part('template-parts/button', null, array(
            'acf-field' => $sec_six,
            'button-id' => 'sec-six-button',
            'button-classes' => 'button-one',
        )); ?>
        <?php if ($case_results) { ?>
            <div id='sec-six-case-results' class='case-results content'>
                <?php foreach ($case_results as $cr) {
                    $amount = $cr['amount'];
                    $type = $cr['type'];
                    $description = $cr['description'];
                    $page_link = $cr['page_link'];
                ?>
                    <div class='single-cr'>
                        <a href='<?= $page_link; ?>'>
                            <?php if ($amount) { ?>
                                <span class='single-cr-amount'><?= $amount; ?></span>
                            <?php } ?>
                            <?php if ($type) { ?>
                                <span class='single-cr-type'><?= $type; ?></span>
                            <?php } ?>
                            <?php if ($description) { ?>
                                <span class='single-cr-content'><?= $description; ?></span>
                            <?php } ?>
                            <span class='single-cr-button'>Read More</span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>