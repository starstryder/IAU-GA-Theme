<?php /**
 * Template Name: Home
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

        <div id="post">

            <!---- Sections: Around IAU ------------------------------------------------>
            <div class="Around">
                <h1>Around IAU</h1>
                <?php
                $get_AroundIAU = new WP_Query( 'category_name=IAU&posts_per_page=3' );

                while ( $get_AroundIAU->have_posts() ) : $get_AroundIAU->the_post(); ?>
                    <div class="home-excerpt"> <?php
                        the_title('<h3>', '</h3>' );
                        the_excerpt(); ?>
                    </div> <?php
                endwhile;
                ?>

                <h1>Around Vienna</h1>
                <?php
                $get_AroundVienna = new WP_Query( 'category_name=vienna&posts_per_page=3' );

                while ( $get_AroundVienna->have_posts() ) : $get_AroundVienna->the_post(); ?>
                    <div class="home-excerpt"> <?php
                        the_title('<h3>', '</h3>' );
                        the_excerpt(); ?>
                    </div> <?php
                endwhile;
                ?>
            </div>

            <!---- Sections: Highlights ------------------------------------------------>
            <div class="Highlights">
                <h1>Highlights</h1>
                <?php
                    $get_featured = new WP_Query( 'cat=9' );

                while ( $get_featured->have_posts() ) : $get_featured->the_post(); ?>
                    <div class="home-excerpt">
                        <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <p><img src="<?php echo $image[0]; ?>" style="max-width:190px; margin:0; padding: 0;"></p>
                        <?php endif; ?>

                            <?php the_title('<h3>', '</h3>' ); ?>
                        </a>
                        <?php the_excerpt(); ?>
                    </div> <?php
                endwhile;
                ?>
                <div style="clear: both;"></div>


                <!---- Sections: Focus Meetings ------------------------------------------------>
                <div class="FM-bar">
                <h1>Focus Meetings</h1>
                <?php
                $get_fm = new WP_Query( 'cat=5,-9' );

                while ( $get_fm->have_posts() ) : $get_fm->the_post(); ?>
                    <div class="home-excerpt">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                <p><img src="<?php echo $image[0]; ?>" style="max-width:135px; margin:0 1em 0 0; padding: 0;"></p>
                            <?php endif; ?>

                            <?php the_title('<h3>', '</h3>' ); ?>
                        </a>
                        <?php the_excerpt(); ?>
                    </div> <?php
                endwhile;
                ?>
                </div>

                <div style="clear: both;"></div>
                <div class="FM-bar">
                    <h1>Symposia</h1>
                    <?php
                    $get_sym = new WP_Query( 'cat=4,-9' );

                    while ( $get_sym->have_posts() ) : $get_sym->the_post(); ?>
                        <div class="home-excerpt">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <p><img src="<?php echo $image[0]; ?>" style="max-width:135px; margin:0 1em 0 0; padding: 0;"></p>
                                <?php endif; ?>

                                <?php the_title('<h3>', '</h3>' ); ?>
                            </a>
                            <?php the_excerpt(); ?>
                        </div> <?php
                    endwhile;
                    ?>
                </div>

            </div>

            <!---- Sections: Focus Meetings ------------------------------------------------>




            <!---- Sections: Weatehr ------------------------------------------------>
            <div id="right-sidebar" style="float:right; max-width:90px;">
                <div class="weather" style="float:right;">
                    <a href="https://www.accuweather.com/en/at/vienna/31868/weather-forecast/31868" class="aw-widget-legal">
                        <!--
                        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
                        -->
                    </a>
                    <div id="awcc1534122270664" class="aw-widget-current"  data-locationkey="31868" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1534122270664"></div>
                    <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                </div>

                <!---- Sections: Weather ------------------------------------------------>
                <div id="photos" style="float:right;">
                    <h1>Photo Stories</h1>
                    <?php
                    $get_photos = new WP_Query( 'category_name=photo&posts_per_page=3' );

                    while ( $get_photos->have_posts() ) : $get_photos->the_post(); ?>
                        <div class="photo-excerpt">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $image[0]; ?>" style="max-width:90px; margin:0; padding: 0;">
                                <?php endif; ?>

                                <?php the_title('<span style="font-size: small">', '</span>' ); ?>
                            </a>
                        </div> <?php
                    endwhile;
                    ?>
                </div>
                </div>
             </div>

        </div>
<?php get_footer(); ?>