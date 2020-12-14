<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<header>
    <!--<div class="header-wrapper">

        <div class="inner-header d-grid l-col-21 d-col-21 t-col-21 m-grid ">
            <nav class="center">
                <?php /*wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-bar')) */?>
                <ul class="social-list">
                    <li class="social-item">
                        <a href="#">
                            <img src="<?php /*echo get_template_directory_uri() */?>/images/youtube.svg" alt="">
                        </a>
                    </li>
                    <li class="social-list" >
                        <a href="#">
                            <img src="<?php /*echo get_template_directory_uri() */?>/images/facebook-w.svg" alt="">
                        </a>
                    </li>
                </ul>
            </nav>


            |
        </div>
        <div class="sub-header">
            <div class="inner-header-sub">
            <div class="logo-main">
                <a href="<?php /*echo home_url(); */?>" class="logo-container">
                    <img src="<?php /*echo get_template_directory_uri() */?>/images/logo-FW.svg" alt="">
                </a>
                <div class="header-title">
                    <h2>
                        Changer la finance
                    </h2>
                    <h3>
                        Un blog des membres et des amis de Finance Watch en France
                    </h3>

                </div>
            </div>
            <div class="header-action">

                <form action="<?php /*get_site_url();*/?>/FW-BLOG/search/"  class="search-form" method="get">
                    <input type="submit" value="" class="search-submit">
                    <input aria-label="search" type="search" name="search_text" class="search-text" placeholder="Search..." autocomplete="on">
                </form>


            </div>

            </div>


        </div>
    </div>-->
    <div class="main-header">
        <div class="navigation">
            <ul>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-bar')) ?>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri()?>/images/youtube.svg " alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri()?>/images/facebook-w.svg " alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="hamburger-menu" id="hamburger-menu">
    <div class="menu-header">
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri() ?>/images/finance-watch-logo.svg" alt="logo">
        </div>
        <div class="form-container-burger">
            <form action="<?php get_site_url();?>/FW-BLOG/search/"  class="search-form" method="get">
                <input type="submit" value="" class="submit-burger">
                <img src="<?php echo get_template_directory_uri() ?>/images/loupe-w.svg" alt="">
                <input aria-label="search" type="search" name="search_text" class="search-burger" placeholder="Search..." autocomplete="on">
            </form>
            <button class="menu-handle" id="menu-handler">
                close X
            </button>

        </div>

    </div>

    <div class="menu-body d-col-21 l-col-21">
        <div class="who menu-grid  d-col-7 l-col-7">
            <h4>Qui sommes nous </h4>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-bar')) ?>

        </div>
        <div class="implication menu-grid d-col-7 l-col-7">
            <h4>S'impliquer</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra.
            </p>
            <button>
                participer
            </button>
        </div>
        <div class="finance-watch menu-grid d-col-7 l-col-7">
            <h4>Finance Watch</h4>
            <a href="">Finance-watch.org</a>
        </div>

        <div class="menu-line">

        </div>
        <div class="social-mobile-menu">
            <div class="news-letter">
                <h3>
                    Newsletter
                </h3>
                <p>
                    inscrivez pour rester informé
                </p>
                <a href="">
                    s'inscrire
                </a>
            </div>
            <div class="follow-us">

            </div>
        </div>
    </div>
</div>


