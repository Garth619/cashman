<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <div id='meetteam-wrapper' class='template-part-wrapper'>
            <div class='single-att'>
                <a href=''>
                    <div class='single-att-img-wrapper'>
                        <img src='<?php bloginfo('template_directory'); ?>/images/att_img.jpg' alt='altname' width='' height='' />
                        <div class='single-att-overlay'>
                            <span class='single-att-button button-one'>
                                View Profile
                            </span>
                        </div>
                    </div>
                    <span class='single-att-name'>Mark A. Cashman</span>
                    <span class='single-att-position'>AtTORNEY</span>
                </a>
            </div>
            <div class='single-att'>
                <a href=''>
                    <div class='single-att-img-wrapper'>
                        <img src='<?php bloginfo('template_directory'); ?>/images/att_img.jpg' alt='altname' width='' height='' />
                        <div class='single-att-overlay'>
                            <span class='single-att-button button-one'>
                                View Profile
                            </span>
                        </div>
                    </div>
                    <span class='single-att-name'>Mark A. Cashman</span>
                    <span class='single-att-position'>AtTORNEY</span>
                </a>
            </div>
            <div class='single-att'>
                <a href=''>
                    <div class='single-att-img-wrapper'>
                        <img src='<?php bloginfo('template_directory'); ?>/images/att_img.jpg' alt='altname' width='' height='' />
                        <div class='single-att-overlay'>
                            <span class='single-att-button button-one'>
                                View Profile
                            </span>
                        </div>
                    </div>
                    <span class='single-att-name'>Mark A. Cashman</span>
                    <span class='single-att-position'>AtTORNEY</span>
                </a>
            </div>
            <div class='single-att'>
                <a href=''>
                    <div class='single-att-img-wrapper'>
                        <img src='<?php bloginfo('template_directory'); ?>/images/att_img.jpg' alt='altname' width='' height='' />
                        <div class='single-att-overlay'>
                            <span class='single-att-button button-one'>
                                View Profile
                            </span>
                        </div>
                    </div>
                    <span class='single-att-name'>Mark A. Cashman</span>
                    <span class='single-att-position'>AtTORNEY</span>
                </a>
            </div>
        </div>
<?php
    endwhile;
endif; ?>