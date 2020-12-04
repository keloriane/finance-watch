<?php 
/**
 * Template Name: Home Page
 */

require('components/HomePage.php');

$home = new HomePage();

$lastsPosts = get_posts(array(
	'posts_per_page'	=> -1,
  'post_type'			=> 'post',
  'order' => 'DESC',
));

$highlights = get_field('highlights');
$idMainHighlight = get_field('main_highlight')->ID;
$idFirstArticle = $highlights['first_article']->ID;
$idSecondArticle = $highlights['second_article']->ID;
?>

<?php get_header() ?>



<div class="highlights">
    <?php $home->mainHighLight($idMainHighlight);?> 
  <div class='secondary-highlights'>
    <?php $home->highLights($highlights);?> 
  </div>
</div>
 


<h2>Derniers articles</h2>

<?php
if($lastsPosts): ?>
	<div class='lasts_articles'>
    <?php foreach( $lastsPosts as $post ): setup_postdata($post);?>
      <article class='article'>
        <?php $customFields = get_field('custom_article',get_the_ID()); ?>
        <?php $tags = $customFields['tags']; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php if( $tags ): ?>
          <?php foreach( $tags as $tag ): ?>
              <span><?= esc_html( $tag->name ); ?></span>
          <?php endforeach; ?>
        <?php endif; ?>
        <h6><?= $customFields['date']; ?></h6>
      </article>
      <hr>
    <?php endforeach; ?>
	</div>  
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer() ?>
