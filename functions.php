<?php
require('components/CustomTheme.php');

CustomTheme::init();
CustomTheme::addStyle('university_main_styles',get_stylesheet_uri());
CustomTheme::addStyle('grid',get_theme_file_uri('styles.css'));
CustomTheme::addStyle('Custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
CustomTheme::addStyle('swiper-css','https://unpkg.com/swiper/swiper-bundle.min.css');
CustomTheme::addStyle('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
CustomTheme::addSupport("menus" , "header" , "menu-header");
CustomTheme::addScript('swiper-js','https://unpkg.com/swiper/swiper-bundle.min.js', NULL, '1.0', true);
CustomTheme::addScript('custom-script',get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);

add_action( 'init', 'sennza_register_cpt_member' );

function sennza_register_cpt_member() {
    $args = array(
        'public' => true,
        'query_var' => 'member',
        'rewrite' => array(
            'slug' => 'members',
            'with_front' => false
        ),
        'supports' => array(
            'title',
            'revisions'
        ),
        'labels' => array(
            'name' => 'Members',
            'singular_name' => 'Member',
            'add_new' => 'Add New Member',
            'add_new_item' => 'Add New Member',
            'edit_item' => 'Edit Member',
            'new_item' => 'New Member',
            'view_item' => 'View Member',
            'search_items' => 'Search Members',
            'not_found' => 'No members found',
            'not_found_in_trash' => 'No members found in Trash',
        ),
    );
    register_post_type( 'member', $args );
}
?>

