<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id='attprofile-wrapper'>
            <aside id='sidebar-wrapper' class='att-sidebar'>
            </aside>
        </div>
<?php endwhile;
endif; ?>