<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="product-type-title-wrapper container">
				<?php
					the_archive_title( '<h1 class="page-title centered">', '</h1>' );
				?>
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'product-type',
						'hide_empty' => 0,
					));
					if ( ! empty( $terms ) ** ! is_wp_error( $terms)):
					?>
					<div class="flex-wrapper product-type-links container">
						<?php foreach ($terms as $term) : ?>
							<div class="product-type-block-wrapper shop-category">	
								<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> </a> </p>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<?php endif ?>

			
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => -1 ); $query = new WP_Query( $args );?>
					<div class="product-type-flex-wrapper container">
					<?php if ( $query->have_posts() ) : ?>
						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php get_template_part( 'template-parts/content-product-archive' ); ?>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
