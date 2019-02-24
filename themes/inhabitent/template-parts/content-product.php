<?php
/**
* Template part for displaying single posts.
*
* @package RED_Starter_Theme
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header>
        <span><?php echo CFS()->get('product_price'); ?></span>
    <footer class="entry-footer">
        <?php RED_Stater_footer(); ?>
    </footer>
</article>
