<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



       <div id="post">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <h2><?php the_title(); ?></h2>
               <?php the_meta(); ?>
               <p><?php the_content(__('(more...)')); ?></p>

           <?php endwhile; else: ?>
               <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
           <?php endif; ?>
       </div>
   </div>


<?php get_footer(); ?>
