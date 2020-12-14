<?php

function sennza_register_cpt_member() {
    $args = array(
        'public' => true,
        'query_var' => 'tag',
        'rewrite' => array(
            'slug' => 'tags',
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
    register_post_type( 'tag', $args );
}

?>