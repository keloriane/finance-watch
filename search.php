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
    <div class="main-content search-result">
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
                    <div class="facebook-action">
                        <div class="card-facebook">
                            <div class="svg-container">
                                <img src="<?php echo get_template_directory_uri() ?>/images/planet.svg" alt="">
                            </div>
                            <div class="text-container">
                                <div class="subtitle">
                                    <h4>
                                        HEY !
                                    </h4>
                                    <p>
                                        vous voulez rejoindre la communauté des amis de la finance
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="" class="facebook-button">
                            <img src="<?php echo get_template_directory_uri()?>/images/f-thumb.svg" alt="">
                            rejoindre le group
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>



<?php get_footer(); ?>