<?php
/**
 * The template for the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="front_hero">
				<div class="hero_logo">
				</div>
			</div>

			<div class="taxonomy_box_wrapper">
					<h1 class="home_titles">Shop Stuff</h1>
					<?php
					$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'hide_empty' => false,
						));
					?>
					<?php	foreach ( $terms as $term ): ?>
						<div class="home_taxonomy_box">
							<img class="home_taxonomy_img" src="wp-content/themes/inhabitent/images/product-type-icons/<?php echo $term->name . '.svg'; ?>" />
						  <p><?php	echo	$term->description; ?></p>
							<a class="home_taxonomy_link" href="#"><?php	echo	$term->name; ?></a>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
			</div>


			<h1 class="home_titles">Inhabitient Journal</h1>
			<?php
			 $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
			 $journal_posts = get_posts( $args );
				?>
				<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
					<?php
						  the_title();
						  the_date();
						  the_excerpt();
					 ?>
				<?php endforeach; wp_reset_postdata(); ?>





		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
