<html>
<head>
    <title>Astronomy 2018 Newspaper</title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/style.css">
</head>
<html>
<body>

<div id="header">
    <a href="https://astronomy2018.univie.ac.at/">
        <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/banner_IAUGA_s.jpg">
    </a>
</div>

<section id="container">
    <aside>
        <?php get_sidebar(); ?>
    </aside>

    <div id = "content">

        <div style="max-width: 990px;">
            <p style="margin: 0 auto;">
                <a href="http://astronomy2018.cosmoquest.org/newspaper/">
                <img  class='news-banner' src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/IAU-NP-Header.png">
                </a>
            </p>

        </div>

<?php wp_nav_menu( array( 'theme_location' => 'section-menu' ) ); ?>