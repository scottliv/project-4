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
				<div class="home-shop-flex-wrapper">	
					<div class="shop-category">
						<!-- <img src="./images/do.svg" alt="do"> -->
						<div class="do-icon"></div>
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<button class="capitalize home-shop-button">Do Stuff</button>
					</div>

					<div class="shop-category">
						<!-- <img src="./images/eat.svg" alt="eat"> -->
						<div class="eat-icon"></div>
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats</p>
						<button class="capitalize home-shop-button">Eat Stuff</button>
					</div>

					<div class="shop-category">
						<!-- <img src="./images/sleep.svg" alt="sleep"> -->
						<div class="sleep-icon"></div>
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<button class="capitalize home-shop-button">Sleep Stuff</button>
					</div>

					<div class="shop-category">
						<!-- <img src="./images/wear.svg" alt="wear"> -->
						<div class="wear-icon"></div>
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<button class="capitalize home-shop-button">Wear Stuff</button>
					</div>
				</div>
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

						<?php /* Start the Loop */ ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>

							<?php get_template_part( 'template-parts/content-home-journal' ); ?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

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