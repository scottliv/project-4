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
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	

		<div class="entry-content">
			<h1 class="single-product-title bold"><?php the_title()?></h1>
			<div class="single-product-price"><?php $meta_print_value=get_post_meta(get_the_ID(),'price',true); echo($meta_print_value); ?></div>
		<?php the_content(); ?>
		<?php
		?>
		<button class="product-social-button">Like</button>
		<button class="product-social-button">Tweet</button>
		<button class="product-social-button">Pin</button>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
