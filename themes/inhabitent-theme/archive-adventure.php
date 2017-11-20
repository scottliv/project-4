<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
				<?php $args = array( 'post_type' => 'adventure', 'posts_per_page' => -1 ); $query = new WP_Query( $args );?>
					<div class="product-type-flex-wrapper container">
					<?php if ( $query->have_posts() ) : ?>
						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php get_template_part( 'template-parts/content-adventure-archive' ); ?>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
