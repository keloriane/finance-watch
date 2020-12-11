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
    <div class="header-wrapper">

        <div class="inner-header d-grid l-col-21 d-col-21 t-col-21 m-grid ">
            <nav class="center">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-bar')) ?>
            </nav>
            |
        </div>
        <div class="sub-header">
            <div class="logo-main">
                <div class="logo-container">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-FW.svg" alt="">
                </div>
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
                <div class="search-input ">
                    <form action="http://financewatch.test/" action="get" >
                        <input type="text" placeholder="Search..." class="search-btn">
                        <input type="submit" class="submit-btn">
                    </form>
                </div>
                <div class="search-button">
                    <img src="<?php echo get_template_directory_uri() ?>/images/loupe.svg" alt="">
                </div>
                <button class="menu-call-to-action" id="menu-phone">
                    menu &#9578;
                </button>
                <button class="participate">
                    Participer
                </button>
                <button class="call-to-finance">
                    Vers Finance-Watch.org
                </button>


            </div>


        </div>
    </div>
</header>

<div class="hamburger-menu" id="hamburger-menu">
    <div class="menu-header">
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri() ?>/images/finance-watch-logo.svg" alt="logo">
        </div>
        <div class="form-container">
            <form action="">
                <input type="search">
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

    </div>
</div>


