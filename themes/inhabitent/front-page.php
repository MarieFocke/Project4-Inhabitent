<?php
/**
 * The main template home-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="round logo" />
            </div>
        <section class="shop">
            <h1>Shop Stuff</h1>
            <div class="shop-menu">
                <?php $product_items= get_terms( 'product_type' ); ?>
                <?php foreach ( $product_items as $item ) : setup_postdata($item); ?>
                    <div class="each-type">
                        <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $item->slug . '.svg' ?> alt="icons">
                        <p><?php echo $item->description ?></p>
                        <a href=<?php echo get_term_link($item)?>> <?php echo $item->name ?> Stuff</a>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
            </div>
        </section>
        <section class="journal container">
            <div class="journal-posts">
                <h1>Inhabitent Journal</h1>
                <ul class="list-last-articles">
                        <?php $journal_posts = inhabitent_get_latest_posts(); ?>
                        <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
                    <li class="last-article">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <?php endif; ?>
                        <span class="date-comment"><?php the_date(); ?> / <?php echo comments_number(); ?></span>
                        <br>
                        <span class="title"><?php the_title();?></span>
                        <a href="<?php the_permalink(); ?>">Read Entry</a>
                        <?php endforeach; wp_reset_postdata();?>
                    </li>
                </ul>
            </div>
        </section>
        <section class="adventures container">
            <h1>Lastest Adventures</h1>
            <div class="lastest-stories">
                <div class="canoe-story">
                    <p class="canoe">Getting Back to Nature in a Canoe</p>
                    <a class="story" href="">Read More</a>
                </div>
                <div class="beach-story">
                    <p class="beach">A Night with Friends at the Beach</p>
                    <a class="story" href="">Read More</a>
                </div>
                <div class="mountain-story">
                    <p class="mountain">Taking in the View at Big mountain</p>
                    <a class="story" href="">Read More</a>
                </div>
                <div class="sky-story">
                    <p class="sky">Star-Gazing at the Night Sky</p>
                    <a class="story" href="">Read More</a>
                </div>
            </div>
            <a class="more" href="">More Adventures</a>
        </section>
        </main><!-- #main -->   
<?php get_footer(); ?>
