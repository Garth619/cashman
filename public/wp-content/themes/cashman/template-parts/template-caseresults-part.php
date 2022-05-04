<?php
$caseresults = get_field('case_results');
$caseresults_group = $caseresults['case_results'];
$caseresults_repeater = $caseresults_group['case_results_repeater'];
if (have_posts()) : while (have_posts()) : the_post();
        if ($caseresults_repeater) { ?>
            <div id='caseresults-wrapper' class='case-results content'>
                <?php foreach ($caseresults_repeater as $single) {
                    $amount = $single['amount'];
                    $type = $single['type'];
                    $description = $single['description'];
                ?>
                    <div class='single-cr'>
                        <?php if ($amount) { ?>
                            <span class='single-cr-amount'><?= $amount; ?></span>
                        <?php }
                        if ($type) { ?>
                            <span class='single-cr-type'><?= $type; ?></span>
                        <?php }
                        if ($description) { ?>
                            <span class='single-cr-content'><?= $description; ?></span>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
<?php
    endwhile;
endif; ?>