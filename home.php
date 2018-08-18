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
                $get_AroundIAU = new WP_Query( 'category_name=IAU&posts_per_page=4' );

                while ( $get_AroundIAU->have_posts() ) : $get_AroundIAU->the_post(); ?>
                    <div class="home-excerpt"> <?php
                        the_title('<h3>', '</h3>' );
                        the_excerpt(); ?>
                    </div> <?php
                endwhile;
                ?>

                <h1>Around Vienna</h1>
                <?php
                $get_AroundVienna = new WP_Query( 'category_name=vienna&posts_per_page=4' );

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
                $get_featured = new WP_Query( 'category_name=featured&posts_per_page=4' );

                $i = 0;
                while ( $get_featured->have_posts() ) : $get_featured;

                    if ( has_post_thumbnail() && $i == 0 ) {
                        ?> <div class="home-excerpt"> <?php
                            the_post_thumbnail($size= 'thumbnail' );
                            $i++;
                            the_title('<h2>', '</h2>' );
                            the_excerpt();
                            ?> </div> <?php
                        } else {
                        ?> <div class="home-excerpt"> <?php
                            the_title('<h2>', '</h2>' );
                            the_excerpt();
                            ?> </div> <?php
                        }
                endwhile;
                ?>
            </div>


            <div class="weather" style="float:right;">
                <a href="https://www.accuweather.com/en/at/vienna/31868/weather-forecast/31868" class="aw-widget-legal">
                    <!--
                    By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
                    -->
                </a><div id="awcc1534122270664" class="aw-widget-current"  data-locationkey="31868" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1534122270664"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>        </div>
            </div>
            <div id="photos">
                Photos Here
            </div>

        </div>
<?php get_footer(); ?>