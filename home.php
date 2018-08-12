<?php

/*
Template Name: Home
*/
define( 'WP_USE_THEMES', false ); get_header(); ?>

<section id="container">
    <aside>
        <?php get_sidebar(); ?>
    </aside>

    <div id = "content">

        <div style="max-width: 990px;">
            <p style="margin: 0 auto;">
                <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA/images/IAU-NP-Header.png" style="max-height: 75px; margin: 0 auto; width: 100%; ">
            </p>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'section-menu' ) ); ?>

        <div id="post">
            This is the home page
        </div>
    </div>



</section>

<?php get_footer(); ?>