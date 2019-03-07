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
                <a href="<?php echo get_permalink() ?>">
                <?php the_post_thumbnail( 'medium large' ); ?></a>
                <?php endif; ?>
        </header>
        <div class="intro-product">
                <?php the_title( sprintf('<h2 class="entry-title">', esc_url(get_permalink())),'</h2>' ); ?>
                <span><?php echo CFS()->get('product_price'); ?></span>
        </div>
</article>