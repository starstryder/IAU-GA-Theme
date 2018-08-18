<?php /**
 * Template Name: Archive - Sym
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



    <div id="post">
        <?php the_post(); ?>
        <h2 class="entry-title"><?php the_title(); ?> Archive</h2>


        <H3>Archives by Day</H3>
        <ul>
            <?php wp_get_archives('type=daily', cat='4'); ?>
        </ul>

    </div>
    </div>


<?php get_footer(); ?>