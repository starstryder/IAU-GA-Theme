<?php define( 'WP_USE_THEMES', false ); get_header(); ?>



       <div id="post">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <h2><?php the_title(); ?></h2>
               <ul class="post-meta" style="margin:0 0 10px 0;">
                   <?php
                   $author = get_post_custom_values("written by");
                   echo "<li>written by: ". $author[0]. "</li>";
                   $when = get_post_custom_values("when");
                   echo "<li>when: ". $when[0]. " <span style='font-style: italic; font-weight: normal; font-size: 90%;'>&nbsp; &nbsp; &nbsp; check app for details</span></li>";
                   ?>
               </ul>

               <?php the_content(__('(more...)')); ?>

           <?php endwhile; else: ?>
               <?php _e('Sorry, no posts matched your criteria.'); ?>
           <?php endif; ?>
       </div>
   </div>


<?php get_footer(); ?>
