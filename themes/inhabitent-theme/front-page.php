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

			<h3>Shop Stuff</h3>
				<div class="home-shop-flex-wrapper">	
					<div class="shop-category">
						<img src="./images/do.svg" alt="do">
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<button class="capitalize home-shop-button">Do Stuff</button>
					</div>

					<div class="shop-category">
						<img src="./images/eat.svg" alt="eat">
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats</p>
						<button class="capitalize home-shop-button">Eat Stuff</button>
					</div>

					<div class="shop-category">
						<img src="./images/sleep.svg" alt="sleep">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<button class="capitalize home-shop-button">Sleep Stuff</button>
					</div>

					<div class="shop-category">
						<img src="./images/wear.svg" alt="wear">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<button class="capitalize home-shop-button">Wear Stuff</button>
					</div>
				</div>
			</section>

		<section class="home-journal container centered">
			<h3>Inhabitent Journal</h3>
		</section>

			<section class="home-adventures container centered">
			<h3>Latest Adventures</h3>
		</section>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>