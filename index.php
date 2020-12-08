<?php
/**
 * Template Name: Home Page
 */

require('components/HomePage.php');
$home = new HomePage();
$lastsPosts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'post',
    'order' => 'DESC',
));
$idMainHighlight = get_field('main_highlight')->ID;
$highlights = get_field('highlights');
$idFirstArticle = $highlights['first_article']->ID;
$idSecondArticle = $highlights['second_article']->ID;
$tags = get_tags();
?>

<?php get_header() ?>

<header class="highlights-container">
    <div class="highlights-title-wrapper d-grid l-grid t-grid m-grid">
        <h2>A LA UNE</h2>
    </div>
    <div class="highlights-wrapper l-grid t-grid m-grid">
        <div class="main-highlight-wrapper l-col-10 ">
            <?php $home->mainHighLight($idMainHighlight); ?>
        </div>
        <div class="secondary-highlights-wrapper l-col-12 t-col-22">
            <?php $home->highLights($highlights); ?>
        </div>
    </div>
</header>

<container>
    <div class="lasts-articles-container">
        <h2>Derniers articles</h2>
        <div class="lasts-articles-container-wrapper d-grid l-grid t-grid m-grid">
            <div class="lasts-articles-list l-col-15">
                <?php $home->lastsArticles($lastsPosts); ?>
            </div>
            <div class="homepage-sidebar d-col-7">
                  <div class="homepage-sidebar-tags">

                  </div>
            </div>
        </div>
    </div>
</container>

<?php



?>

