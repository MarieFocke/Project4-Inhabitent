<?php
/**
 * The main template home-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" />
            </div>
        <section class="shop">
            <div class="shop-menu">
                <?php $product_items= get_terms( 'product_type' ); ?>
                <?php foreach ( $product_items as $item ) : setup_postdata($item); ?>
                    <div class="each-type">
                        <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $item->slug . '.svg' ?>>
                        <p><?php echo $item->description ?></p>
                        <a href=<?php echo get_term_link($item)?>> <?php echo $item->name ?> Stuff</a>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
            <div>
        </section>
        <section class="journal">
            <div class="journal-posts">
                <h1>Inhabitent Journal</h1>
                <?php $journal_posts = inhabitent_get_latest_posts(); ?>
                <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                    <div>
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>">Read Entry</a>

                        <?php the_date(); echo comments_number(); the_title();
                        endforeach; 
                        wp_reset_postdata();
                        ?>
                    </div>
            </div>
        </section>
        </main><!-- #main -->   
<?php get_footer(); ?>
