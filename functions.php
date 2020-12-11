<?php
require('components/CustomTheme.php');

CustomTheme::init();
CustomTheme::addStyle('university_main_styles',get_stylesheet_uri());
CustomTheme::addStyle('grid',get_theme_file_uri('styles.css'));

CustomTheme::addStyle('Custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
CustomTheme::addStyle('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
CustomTheme::addScript('custom-script',get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);

CustomTheme::addSupport("menus" , "header" , "menu-header");


?>