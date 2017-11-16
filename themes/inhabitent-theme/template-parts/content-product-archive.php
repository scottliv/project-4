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
    <?php echo sprintf('<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ); ?>
			<?php the_post_thumbnail( 'large' ); ?>
      </a>

		<?php endif; ?>

		<?php the_title( )?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="product-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
