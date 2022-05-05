<?php
$att = get_field('attorney_profile');
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
                    <div id='att-accolades'>
                        <h2>Lorem Ipsum dolor</h2>
                        <div class='single-accolade'>
                            <div class='single-accolade-title'>
                                <span>AREAS OF PRACTICe</span>
                                <?php echo file_get_contents(get_template_directory() . '/images/att-arrow.svg'); ?>
                            </div>
                            <div class='single-accolade-content'>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        <ul>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                        </ul>
                                    </li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                </ul>
                            </div>
                        </div>
                        <div class='single-accolade'>
                            <div class='single-accolade-title'>
                                <span>AREAS OF PRACTICe</span>
                                <?php echo file_get_contents(get_template_directory() . '/images/att-arrow.svg'); ?>
                            </div>
                            <div class='single-accolade-content'>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        <ul>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                        </ul>
                                    </li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                </ul>
                            </div>
                        </div>
                        <div class='single-accolade'>
                            <div class='single-accolade-title'>
                                <span>AREAS OF PRACTICe</span>
                                <?php echo file_get_contents(get_template_directory() . '/images/att-arrow.svg'); ?>
                            </div>
                            <div class='single-accolade-content'>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        <ul>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                            <li> Lorem ipsum dolor sit amet, consectetur adipisicing </li>
                                        </ul>
                                    </li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                    <li> Lorem ipsum dolor sit amet, consectetur adipisicing</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            get_template_part(
                'template-parts/logos',
                'slider',
                array(
                    'acf-field' => $att,
                    'id' => 'att-logos',
                )
            ); ?>
        </div>
<?php endwhile;
endif; ?>