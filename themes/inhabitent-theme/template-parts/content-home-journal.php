<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
      <div class="home-journal-image-wrapper">
			  <?php the_post_thumbnail( 'large' ); ?>
      </div>
		<?php endif; ?>

    <div class="home-journal-title-wrapper">
	  	<?php if ( 'post' === get_post_type() ) : ?>  
		    <div class="entry-meta">
		    	<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		    </div><!-- .entry-meta -->
	  	<?php endif; ?>

		  <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php echo sprintf('<a class="button-home-read-more" href="%s">', esc_url( get_permalink() ) ) . '<button>Read More</button></a>';?>
     </div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
