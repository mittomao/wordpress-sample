<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Personal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header class="header" data-header>
            <div class="container">

                <div class="overlay" data-overlay></div>

                <?php dynamic_sidebar('logo-primary'); ?>

                <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <?php dynamic_sidebar('logo-primary'); ?>

                    <ul class="navbar-list">
                    <?php
                    if (has_nav_menu('topmenu')) {
                        wp_nav_menu(
                            array(
                                'container'  => 'nav',
                                'items_wrap' => '%3$s',
                                //'echo'            => false,
                                'container_class' => 'main-nav',
                                'theme_location' => 'topmenu',
                                'walker' => new MFS_Walker_Nav_Menu2
                            )
                        );
                    }
                    ?>
                    </ul>

                    <ul class="nav-action-list">

                        <li>
                            <button class="nav-action-btn">
                                <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

                                <span class="nav-action-text">Search</span>
                            </button>
                        </li>

                        <li>
                            <a href="#" class="nav-action-btn">
                                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                <span class="nav-action-text">Login / Register</span>
                            </a>
                        </li>

                        <li>
                            <button class="nav-action-btn">
                                <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

                                <span class="nav-action-text">Wishlist</span>

                                <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
                            </button>
                        </li>

                        <li>
                            <button class="nav-action-btn">
                                <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>

                                <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>

                                <data class="nav-action-badge" value="4" aria-hidden="true">4</data>
                            </button>
                        </li>

                    </ul>

                </nav>

            </div>
        </header>

        <div id="content" class="site-content">
            <div class="container-fluid">