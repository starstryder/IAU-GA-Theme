<?php /**
 * Template Name: Archive - Vienna
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



    <div id="post">
        <?php the_post(); ?>
        <h2 class="entry-title" style="margin-bottom: 20px"><?php the_title(); ?> Archive</h2>

        <ul>
            <?php wp_get_archives('type=alpha', 'cat=7'); ?>
        </ul>

    </div>
    </div>


<?php get_footer(); ?>