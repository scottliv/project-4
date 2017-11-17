<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="product-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="product-image-wrapper">
				<?php echo sprintf('<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ); ?>
					<?php the_post_thumbnail( 'large' ); ?>
      	</a>
			</div>
		<?php endif; ?>

		<p class="product-price border-solid"><?php the_title()  ?>.....<span class=“price-meta”>......<?php $meta_print_value=get_post_meta(get_the_ID(),'price',true); echo($meta_print_value); ?></span>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="product-meta">
			
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
