<?php
/**
 * The front page template.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="home-hero">
			<div class="home-hero-image"></div>
		</section>

		<section class="home-shop container centered">

			<h2 class="section-header">Shop Stuff</h2>
			<?php
				$terms = get_terms( array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0,
				));
				if ( ! empty( $terms ) ** ! is_wp_error( $terms)):
					?>
						<div class="home-shop-flex-wrapper">	

							<?php foreach ($terms as $term) : ?>

								<div class="product-type-block-wrapper">
									<img src="<?php echo get_template_directory_uri().'/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name ; ?>" />
									<p><?php echo $term->description; ?></p>
									<p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a> </p>
								</div>
							<?php endforeach; ?>
						</div>
				<?php endif ?>

			</section>

			

		<section class="home-journal container centered">
			<h2 class="section-header">Inhabitent Journal</h2>

			<div class="home-journal-flex-wrapper">
				
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query( $args );?>

					<?php if ( $query->have_posts() ) : ?>
						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php get_template_part( 'template-parts/content-home-journal' ); ?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

			</div>
		</section>

			<section class="home-adventures container centered">
			<h2 class="section-header">Latest Adventures</h2>
		</section>
		
	

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>