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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header class="header" data-header>
            <div class="container">

                <div class="overlay" data-overlay></div>

                <a href="#" class="logo page-logo">
                    <img src="./assets/images/logo.png" alt="Mao Shop logo">
                </a>

                <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

                <nav class="navbar" data-navbar>

                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <a href="#" class="logo page-logo">
                        <img src="./assets/images/logo.png" alt="Mao Shop logo">
                    </a>

                    <ul class="navbar-list">

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">Home</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">About</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">Products</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">Shop</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">Blog</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#" class="navbar-link">Contact</a>
                        </li>

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
            <div class="container">
                <div class="row">