<?php
/*
 * Template name: Custom Search
 */

?>
<?php
get_header(); ?>

<?php

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
$tags = get_tags();

    if($_GET['search_text'] && !empty($_GET['search_text']))
    {
        $text = $_GET['search_text'];
    }



?>

<main class="search-container">


    <?php
    $args = array(
    'post_per¨_page' => -1,
     's' => $text
    );
    $query = new WP_Query($args);


?>
    <div class="main-content">
        <div class="main-content-wrapper d-grid l-grid t-grid m-grid">
            <h2>Resultat de recherche</h2>
            <div class="main-content-columns">
                <div class="lasts-articles-list-wrapper d-col-15 l-col-15 t-col-24">
                    <div class="lasts-articles-list">
                        <?php $home->lastsArticles($query -> posts); ?>
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
                            <h3 class="pinned-tags-title">Tags épingles</h3>
                            <div class="content">
                                <?php echo $home->renderTagsSidebar($tags); ?>
                            </div>
                        </div>
                        <div class="most-used-tags">
                            <h3 class="most-used-tags-title">Tags épingles</h3>
                            <div class="content">
                                <?php echo $home->renderTagsSidebar($tags); ?>
                            </div>
                        </div>
                    </div>
                    <div class="bubble-facebook">
                        <img class="bubble-facebook-image" src=<?= get_theme_file_uri('/images/french-map.png'); ?> alt="">
                        <div class="bubble-facebook-text">
                            <h4 class="bubble-facebook-text-title">Hey !</h4>
                            <p class="bubble-facebook-text-content">vous voulez rejoindre la communauté des amis de Finance
                                Watch</p>
                        </div>
                        <div class="bubble-facebook-button"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="pinned-article-container">
                <div class="swiper-container">
                    <!--                <h3 class="pinned-article-container-title">ARTICLES "EPINGLES"</h3>-->
                    <div class="pinned-article-wrapper d-grid l-grid t-grid m-grid">
                        <?php $home->pinnedArticles($mostReadPosts); ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

    </div>



<?php get_footer(); ?>