<?php /**
 * Template Name: Home
 *
 * @package WordPress
 */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

        <div id="post">

            <div class="IAU">
                <h1>Around IAU</h1>
                <?php
                $get_AroundIAU = new WP_Query( 'category_slug=IAU&posts_per_page=4' );

                while ( $get_AroundIAU->have_posts() ) : $get_AroundIAU->the_post(); ?>
                    <div class="home-FM-excerpt"> <?php
                        the_title('<h2>', '</h2>' );
                        the_excerpt(); ?>
                    </div> <?php
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

        </div>
<?php get_footer(); ?>