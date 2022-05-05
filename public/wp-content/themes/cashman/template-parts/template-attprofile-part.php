<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='attprofile-wrapper' class='template-part-wrapper'>
            <div id='attprofile-container'>
                <div id='attprofile-img-wrapper'>
                    <img src='<?php bloginfo('template_directory'); ?>/images/att_img.jpg' alt='altname' width='' height='' loading='eager' />
                </div>
                <div id='attprofile-content' class='content'>
                    <h2>While studying in law school, Mark’s father suffered a delay in diagnosis of lung cancer.</h2>
                    <p>He had a persistent cough for months before finally getting the test that discovered his terminal cancer. Having lived through the frustrations of the medical system and unnecessary delays has driven him to fight for victims of medical negligence. Prior to opening this firm, he worked as a Trial Lawyer at several nationally recognized plaintiff firms. Most recently, he served as head of the medical malpractice department. Mark’s first trained as a lawyer in the Boston office of the U.S. Attorney/Department of Justice. He was mentored by several elite civil prosecutors and FBI agents investigating health care fraud, illegal kickbacks, and off label marketing in violation of the federal false claims act. </p>
                    <p> Mark A. Cashman represents victims of medical negligence, dangerous and defective products, construction site injuries, motor vehicle negligence, and dangerous property/landlord negligence cases. He is licensed to practice in Massachusetts, New Hampshire, and Rhode Island.</p>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>