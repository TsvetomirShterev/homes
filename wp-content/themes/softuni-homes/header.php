<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>
        <?php wp_title(); ?>
    </title>

    <?php wp_head(); ?>
</head>

<body>
    <div class="site-wrapper">
        <header class="site-header">
            <h1 class="site-title"><a href="<?php echo home_url(); ?>">Properties Offers</a></h1>
        </header>
        <div class="nav-menu">
            <?php 
            if (has_nav_menu('primary_menu')) {
                wp_nav_menu(
                    array(
                    'theme_location'=>'primary_menu',
                    )
                    );
            }
            ?>
        </div>