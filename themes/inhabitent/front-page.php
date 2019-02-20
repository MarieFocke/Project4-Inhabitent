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
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" />
            </div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
        </main><!-- #main -->
            <div>
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

                <section class="adventures containers">
            </div>    

<?php get_sidebar(); ?>

<?php get_footer(); ?>
