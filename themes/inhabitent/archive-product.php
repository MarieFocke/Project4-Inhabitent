<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
			</header>
	</div>
	<section class="products">
			<div>
				<?php $products_types= get_terms('product_type'); ?>
				<?php foreach ( $product_types as $product ) : setup_postdata( $product ); ?>
                <div>
					<a href=<?php echo get_term_link($product)?>> <?php echo $product->name?></a>
				</div>
				<?php endforeach; wp_reset_postdata();?>
			</div>
	</section>
	<section>
		<div>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'products' );?>
		</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
