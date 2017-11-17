<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="page-title"><?php single_cat_title()?></h1>
			<p><?php the_archive_description() ?></p>
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