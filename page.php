<h1><?php echo the_field( 'title' ); ?></h1>
<h1><?php echo the_field( 'date' ); ?></h1>
<?php var_dump(get_field_objects('headline')); ?>
<?php $featured_posts = get_field('featured_posts');
?>
<?php 
// var_dump($terms);
$terms = get_field('tags');
?>

<?php if( $terms ): ?>
   <?php foreach( $terms as $term ): ?>
        <span><?= $term->name; ?></span>
    <?php endforeach; ?>
 <?php endif; ?> 
							</ul>
<img src=<?= the_field( 'image' );?> alt="">

