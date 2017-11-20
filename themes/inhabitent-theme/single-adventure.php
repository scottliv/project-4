<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="<?php the_ID(); ?>" <?php post_class();?>>

					<header class="entry-header custom-hero"></header>

				<div class="container">
					<div class="entry-content">

						<?php the_title( '<h1 class="entry-title">', '</h1>');?>
			
						<?php
							echo CFS()->get( 'adventure_content' );
						?>
						<a href="http://facebook.com">
							<button class="btn-alt"><i class="fa fa-facebook" aria-hidden="true"></i>Like</button>
						</a>
						<a href="http://twitter.com">
							<button class="btn-alt"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</button>
						</a>
						<a href="http://pinterest.com">
							<button class="btn-alt"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</button>
						</a>
						
					</div>
				</div>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>
