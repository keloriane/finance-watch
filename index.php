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

$mostReadPosts = get_posts(array(
    'posts_per_page' => 3,
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

<div class="highlights-container">
    <div class="highlights-title-wrapper d-grid l-grid t-grid m-grid">
        <h2>A LA UNE</h2>
    </div>
    <div class="highlights-wrapper l-grid t-grid m-grid">
        <div class="main-highlight-wrapper l-col-10 t-col-24">
            <?php $home->mainHighLight($idMainHighlight); ?>
        </div>
        <div class="secondary-highlights-wrapper l-col-12 t-col-24">
            <?php $home->highLights($highlights); ?>
        </div>
    </div>
</div>


<div class="main-content">
    <div class="main-content-wrapper d-grid l-grid t-grid m-grid">
        <h2>Derniers articles</h2>
        <div class="main-content-columns">
            <div class="lasts-articles-list-wrapper d-col-15 l-col-15 t-col-24">
                <div class="lasts-articles-list">
                    <?php $home->lastsArticles($lastsPosts); ?>
                </div>
            </div>
            <div class="homepage-sidebar-wrapper d-col-7 l-col-7 t-col-24">
                <div class="most-read-articles-list">
                    <h2 class="most-read-articles-list-title">ARTICLES LES PLUS LUS</h2>
                    <?php $home->mostReadArticles($mostReadPosts); ?>
                </div>
                <div class="homepage-sidebar-tags">
                    <h2 class="most-read-articles-list-title">NAVIGATION</h2>
                    <div class="pinned-tags">
                        <h3 class="title">Tags épingles</h3>
                        <div class="content">
                            <?php echo $home->renderTagsSidebar($tags); ?>
                        </div>
                    </div>
                    <div class="most-used-tags">
                        <h3 class="title">Tags épingles</h3>
                        <div class="content">
                            <?php echo $home->renderTagsSidebar($tags); ?>
                        </div>
                    </div>
                </div>
                <div class="bubble-facebook">
                    <img class="bubble-facebook-image" src=<?= get_theme_file_uri('/images/french-map.png');?> alt="">
                    <div class="bubble-facebook-text">
                        <h4 class="bubble-facebook-text-title">Hey !</h4>
                        <p class="bubble-facebook-text-content">vous voulez rejoindre la communauté des amis de Finance Watch</p>
                    </div>
                    <div class="bubble-facebook-button"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ?>

