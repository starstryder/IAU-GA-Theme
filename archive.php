<?php /**
 * Template Name: Archive
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



<div id="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php get_search_form(); ?>

        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>

        <h2>Archives by Subject:</h2>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
        <div style="clear:both;"></div>


    <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
