<?php /**
 * Template Name: Category
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



<div id="post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <ul class="post-meta" style="margin:0;">
            <div class="home-excerpt">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" style="max-width:150px; margin:0 10px 10px 0; padding: 0; float: right;">
                    <?php endif; ?>
                    <?php
                    the_title('<h4>', '</h4>' );?>
                </a>
                <?php
                $author = get_post_custom_values("written by");
                echo "<li>written by: ". $author[0]. "</li>";
                $when = get_post_custom_values("when");
                if (strlen($when[0]) > 2)
                    echo "<li>when: ". $when[0]. " <span style='font-style: italic; font-weight: normal; font-size: 90%;'>&nbsp; &nbsp; &nbsp; check app for details.</span></li>";
                ?>
                <?php
                the_excerpt(); ?>
            </div>
        </ul>
        <div style="clear:both;"></div>


    <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>
</div>
</div>


<?php get_footer(); ?>
