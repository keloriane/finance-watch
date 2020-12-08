<?php
get_header();

require('components/Post.php');
$posts = new Post();
$posts->single();
?>
