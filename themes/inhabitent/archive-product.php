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
		<!-- <?php $product_types=get_terms ?> -->
			<header class="page-header">
				<h1> Shop Stuff</h1>
			</header>
	<section class="products">
			<div>
				<?php $product_types = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => 0,
				)); ?>
				<?php foreach ( $product_types as $product_type ) : ?>
				<a href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?></a>
				<?php endforeach; wp_reset_postdata();?>
			</div>
	</section>
	<section>
		<div>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'shop' );?>
		</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'product' ); ?>
			<?php endif; ?>
	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
