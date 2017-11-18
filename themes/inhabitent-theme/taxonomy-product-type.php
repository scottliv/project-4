<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<div class="product-type-title-wrapper">
				<h1 class="page-title centered"><?php single_cat_title()?></h1>
				<div class="product-type-description centered"><?php the_archive_description() ?></div>
			</div>
		<div class="product-type-flex-wrapper">
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'template-parts/content-product-archive' ); ?>
	
				<?php endwhile; ?>
	
				<?php the_posts_navigation(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
	
			<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>