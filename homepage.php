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

$mostReadPosts = new WP_Query(array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'meta_key' => 'customArticle_vues',
    'orderby' => 'meta_value',
    'order' => 'DESC'
));

$mostReadPostsByViews =  $mostReadPosts->posts;

$idMainHighlight = get_field('main_highlight')->ID;
$highlights = get_field('highlights');
$idFirstArticle = $highlights['first_article']->ID;
$idSecondArticle = $highlights['second_article']->ID;
$tags = get_tags();

$argsPostMembers = array('post_type'=> 'member');
$membersQuery = new WP_Query( $argsPostMembers );
$members = $membersQuery->posts;



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
                <div class="side-card most-read-articles-list">
                    <h2 class="most-read-articles-list-title">ARTICLES LES PLUS LUS</h2>
                    <?php $home->mostReadArticles($mostReadPostsByViews); ?>
                </div>
                <div class=" side-card homepage-sidebar-tags">
                    <h2 class="most-read-articles-list-title">NAVIGATION</h2>
                    <div class="pinned-tags">
                        <h3 class="pinned-tags-title">Tags épingles</h3>
                        <div class="content">
                            <?php echo $home->renderTagsSidebar($tags); ?>
                        </div>
                    </div>
                    <div class="side-card most-used-tags">
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
    <div class="pinned-article-container">
        <div class="swiper-container">
            <h3 class="pinned-article-container-title">ARTICLES éPINGLéS</h3>
            <div class="swiper-wrapper pinned-article-wrapper d-grid l-grid t-grid m-grid">
                <?php $home->pinnedArticles($mostReadPosts); ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="member-testimonials-container">
        <div class="swiper-testimonials l-col-14 d-col-14 t-grid m-grid">

            <div class="swiper-wrapper pinned-article-wrapper d-grid l-grid t-grid m-grid">
                    <?php $home->members($members); ?>
            </div>


        </div>
    </div>

    <div class="learn-more-wrapper">
        <div class="text-wrapper">
            Vous souhaitez en savoir plus sur nos membres
        </div>
        <a class="btn btn-arrow btn-border btn-a-propos">
            <span> <span class="arrow">&gt;</span>  A propos <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
        </a>
    </div>

    <div class="card-layer l-col-18 d-col-18 t-grid m-grid">
        <div class="card-homepage">

        </div>
    </div>
</div>
<?php get_footer() ?>

