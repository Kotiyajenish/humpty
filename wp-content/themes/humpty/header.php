<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package humpty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>
        window.__resources = {};
    </script>
    <script src="blob:null/00890473-06a7-4358-8b19-d25e37a51ace"></script>
    <script src="https://unpkg.com/react@18.3.1/umd/react.production.min.js" integrity="sha384-DGyLxAyjq0f9SPpVevD6IgztCFlnMF6oW/XQGmfe+IsZ8TqEiDrcHkMLKI6fiB/Z" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/react-dom@18.3.1/umd/react-dom.production.min.js" integrity="sha384-gTGxhz21lVGYNMcdJOyq01Edg0jhn/c22nsx0kyqP0TxaV5WVdsSH1fSDUf5YJj1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" data-dc-tpl="1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'humpty'); ?></a>

        <header id="masthead" class="site-header">
            <div class="top-notice">
    MOCKUP: design exploration for
    <span>home page</span>
    · content and copy carried over from the live site
</div>
<nav class="site-header">
    <div class="container">

        <div class="logo-area">
            <img src="http://localhost/humpty/wp-content/uploads/2026/07/download.png" alt="Soul2Sole" class="logo">

            <div class="logo-divider"></div>

            <div class="logo-text">SOUL2SOLE</div>
        </div>

        <div class="main-menu">

            <div class="menu-item has-dropdown">
                <a href="#">
                    About
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <div class="dropdown-menu">
                    <a href="#">About Us</a>
                    <a href="#">FAQ</a>
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>

            <a href="#">Classes &amp; Programs</a>
            <a href="#">Events</a>
            <a href="#">Hire Us</a>
            <a href="#">Contact &amp; Locations</a>

            <div class="menu-item has-dropdown">
                <a href="#">
                    Join Our Team
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <div class="dropdown-menu">
                    <a href="#">Apply Now</a>
                    <a href="#">Ambassador Program</a>
                </div>
            </div>

        </div>

        <div class="header-actions">
            <a href="#" class="login-link">Student Login</a>
            <a href="#register" class="register-btn">Register</a>
        </div>

    </div>
</nav>

        </header><!-- #masthead -->