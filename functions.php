<?php
require('components/CustomTheme.php');

CustomTheme::init();
CustomTheme::addStyle('university_main_styles',get_stylesheet_uri());
CustomTheme::addStyle('grid',get_theme_file_uri('styles.css'));
CustomTheme::addStyle('Custom-google-fonts','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
CustomTheme::addStyle('swiper-css','https://unpkg.com/swiper/swiper-bundle.min.css');
CustomTheme::addScript('swiper-js','https://unpkg.com/swiper/swiper-bundle.min.js', NULL, '1.0', true);
CustomTheme::addStyle('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
/*CustomTheme::addSupport("menus" , "header" , "menu-header");*/

CustomTheme::addScript('swiper-js','https://unpkg.com/swiper/swiper-bundle.min.js', NULL, '1.0', true);
CustomTheme::addScript('custom-script',get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);



function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


add_action( 'init', 'sennza_register_cpt_member' );
add_action( 'init', 'sennza_register_cpt_tags' );
add_action( 'init', 'sennza_register_cpt_post' );

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

function sennza_register_cpt_tags() {
    $args = array(
        'public' => true,
        'query_var' => 'pinned_tag',
        'rewrite' => array(
            'slug' => 'pinned_tags',
            'with_front' => false
        ),
        'supports' => array(
            'title',
            'revisions'
        ),
        'labels' => array(
            'name' => 'Pinned Tag',
            'singular_name' => 'Pinned Tags',
            'add_new' => 'Add New Tag',
            'add_new_item' => 'Add New Tag',
            'edit_item' => 'Edit Tag',
            'new_item' => 'New Tag',
            'view_item' => 'View Tag',
            'search_items' => 'Search Tags',
            'not_found' => 'No tags found',
            'not_found_in_trash' => 'No tags found in Trash',
        ),
    );
    register_post_type( 'pinned_tag', $args );
}

function sennza_register_cpt_post() {
    $args = array(
        'public' => true,
        'query_var' => 'pinned_post',
        'rewrite' => array(
            'slug' => 'pinned_posts',
            'with_front' => false
        ),
        'supports' => array(
            'title',
            'revisions'
        ),
        'labels' => array(
            'name' => 'Pinned Post',
            'singular_name' => 'Pinned Posts',
            'add_new' => 'Add New Post',
            'add_new_item' => 'Add New Post',
            'edit_item' => 'Edit Post',
            'new_item' => 'New Post',
            'view_item' => 'View Post',
            'search_items' => 'Search Posts',
            'not_found' => 'No posts found',
            'not_found_in_trash' => 'No posts found in Trash',
        ),
    );
    register_post_type( 'pinned_post', $args );
}

add_filter('acf/settings/google_api_key', function () {
    return 'AIzaSyDo77UBqCntbsSfn1gkYyRwuqgjToez-5A';
});





