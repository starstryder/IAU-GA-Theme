<html>
<head>
    <title>Astronomy 2018 Newspaper</title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/style.css">
</head>
<html>
<body>

<div id="header">
    <img src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/banner_IAUGA_s.jpg">
</div>

<section id="container">
    <aside>
        <?php get_sidebar(); ?>
    </aside>

    <div id = "content">

        <div style="max-width: 990px;">
            <p style="margin: 0 auto;">
                <img  class='news-banner' src="<?php echo site_url(); ?>/wp-content/themes/IAU-GA-Theme/images/IAU-NP-Header.png">
            </p>

        </div>

<?php wp_nav_menu( array( 'theme_location' => 'section-menu' ) ); ?>