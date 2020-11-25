<?php
require('components/Post.php');

$posts = new Post();
$posts->debug();
$posts->all();


?>

