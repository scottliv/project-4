<?php
/**
 * Template part for displaying products on the archive page.
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

		<div class="product-meta border-solid">

			<div class="product-name"><?php the_title()  ?></div>
			
			<div class="product-price"><?php $meta_print_value=get_post_meta(get_the_ID(),'price',true); echo($meta_print_value); ?></div>
	
			<div class="dots">..........................................................</div>
	
	</div>


	</header><!-- .entry-header -->

</article><!-- #post-## -->
