<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<?php if ( has_post_thumbnail() ) : ?>
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php endif; ?>

  <div class="home-adventures-image-container" style="
        background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url('<?php echo $backgroundImg[0] ?>');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        ">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    	<header class="entry-header">
        <div class="home-adventures-container">
		      <?php the_title( sprintf( '<h2 class="entry-title"><a class="adventure-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
          <?php echo sprintf('<a class="adventure-link" href="%s">', esc_url( get_permalink() ) ) . '<button class="btn-white">Read More</button></a>';?>
        </div>
      </header><!-- .entry-header -->

    </article><!-- #post-## -->
  </div>