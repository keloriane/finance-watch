<?php
require('components/CustomTheme.php');
CustomTheme::init();
CustomTheme::addStyle('grid',get_theme_file_uri('styles.css'));
CustomTheme::addStyle('Custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
CustomTheme::addStyle('swiper-css','https://unpkg.com/swiper/swiper-bundle.min.css');
CustomTheme::addStyle('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
CustomTheme::addScript('gsap' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js' );
CustomTheme::addScript('CssPlugin' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js' );
CustomTheme::addSupport("menus" , "header" , "menu-header");
CustomTheme::addScript('custom-script',get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
CustomTheme::addScript('swiper-js','https://unpkg.com/swiper/swiper-bundle.min.js', NULL, '1.0', true);
CustomTheme::addScript('custom-script',get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);



add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyDo77UBqCntbsSfn1gkYyRwuqgjToez-5A';
});


?>