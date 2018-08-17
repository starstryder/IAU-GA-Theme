<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

    <section id="container">
        <aside>
            <?php get_sidebar(); ?>
        </aside>

        <div id = "content">

            <div style="max-width: 990px;">
                <p style="margin: 0 auto;">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/IAU-NP-Header.png" style="max-height: 75px; margin: 0 auto; width: 100%; ">
                </p>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'section-menu' ) ); ?>

            <div id="post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <h2><?php the_title(); ?></h2>
                        <h4>PUT THE SPECIAL TAG TIME HERE</h4>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>