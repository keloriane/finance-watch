<?php
/**
 * Template Name: Tag Post
 */

require('components/HomePage.php');
$home = new HomePage();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$tag = get_queried_object();
$currentTag = $tag->slug;

$lastsPosts = get_posts(array(
    'tag' => $currentTag,
    'posts_per_page' => 7,
    'post_type' => 'post',
    'paged' => $paged,
    'order' => 'DESC',
));

$mostReadPosts = get_posts(array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'meta_key' => 'vues',
    'orderby' => 'meta_value',
    'order' => 'DESC'
));


$tags = get_tags();
$argsPostMembers = array('post_type' => 'member');
$membersQuery = new WP_Query($argsPostMembers);
$members = $membersQuery->posts;


?>

<?php get_header() ?>


<div class="main-content">
    <div class="main-content-wrapper d-grid l-grid t-grid m-grid">
        <br><br>
        <h2><?= $currentTag ?> articles</h2>
        <div class="main-content-columns">
            <div class="lasts-articles-list-wrapper d-col-15 l-col-15 t-col-24">
                <div class="lasts-articles-list">
                    <?php $home->lastsArticles($lastsPosts); ?>
                    <h1>PAGINATION</h1>
                    <?php the_posts_pagination(); ?>
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
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>


