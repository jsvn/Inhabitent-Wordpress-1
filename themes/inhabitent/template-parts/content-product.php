<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post_top_wrap">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium') ?>
			<?php endif; ?>

		<div class="product_archive_info">
			<?php the_title( sprintf( '<h2 class="product_title_archives"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<h2 class="price_title_archives"><?php echo CFS()->get( 'price' ); ?></h2>
		</div>


		</div>

		<?php if ( 'post' === get_post_type() ) : ?>


		<div class="entry-meta">
		</div><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->
</article><!-- #post-## -->
