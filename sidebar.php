<aside>
    <div id="sidebar">
        <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/uniwien_logo_klein.png" style="width: 180px; margin: 20px 10px; ">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        <div id ="search" style="margin: 5px;">
            <?php
                get_search_form();
            ?>
        </div>
        <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/Logo_1608_200x280.jpg" style="margin-top: 30px;">
    </div>
</aside>


