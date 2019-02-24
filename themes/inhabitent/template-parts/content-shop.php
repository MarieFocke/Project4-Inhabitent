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
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php endif; ?>
        <?php the_title( sprintf('<h1 class="entry-title"><a href="%s" rel"bookmark">', esc_url(get_permalink())),'</a></h1>' ); ?>
</header>
        <span><?php echo CFS()->get('product_price'); ?></span>
</article>