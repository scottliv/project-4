<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
     
    <div class="adventures-archive-container">

      <?php if ( has_post_thumbnail() ) : ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

        <div class="adventures-image-container" style="
          background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url('<?php echo $backgroundImg[0] ?>');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         ">

		    <?php the_title( sprintf( '<h2 class="adventure-archive-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			  <?php echo sprintf('<a href="%s">', esc_url( get_permalink() ) ) . '<button class="btn-white">Read More</button></a>';?>

		  <?php endif; ?>
    </div>

  </header><!-- .entry-header -->

</article><!-- #post-## -->
