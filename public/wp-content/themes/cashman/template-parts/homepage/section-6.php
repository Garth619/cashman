<?php
$sec_six = get_field('section_six');
$title = $sec_six['title']; ?>
<section id='section-six'>
    <div id='sec-six-inner'>
        <?php if ($title) { ?>
            <span id='sec-six-title'><?= text_wrap($title, ' '); ?></span>
        <?php } ?>
        <a id='sec-six-button' class='button-one' href=''>View all results</a>
        <div id='sec-six-case-results' class='case-results content'>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$3.5M</span>
                    <span class='single-cr-type'>SeTTLEMENT</span>
                    <span class='single-cr-content'>botched surgery and delay of diagnosis</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$2.8M</span>
                    <span class='single-cr-type'>Verdict</span>
                    <span class='single-cr-content'>delay in diagnosis of prostate cancer</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$1M</span>
                    <span class='single-cr-type'>Verdict</span>
                    <span class='single-cr-content'>failure to recognize and treat retinal detachment leading to blindness</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$900k</span>
                    <span class='single-cr-type'>SeTTLEMENT</span>
                    <span class='single-cr-content'>delay in diagnosis of breast cancer.</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$1.5M</span>
                    <span class='single-cr-type'>SeTTLEMENT</span>
                    <span class='single-cr-content'>botched surgery and delay of diagnosis</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
            <div class='single-cr'>
                <a href=''>
                    <span class='single-cr-amount'>$5.5M</span>
                    <span class='single-cr-type'>SeTTLEMENT</span>
                    <span class='single-cr-content'>botched surgery and delay of diagnosis</span>
                    <span class='single-cr-button'>Read More</span>
                </a>
            </div>
        </div>
    </div>
</section>