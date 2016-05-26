<?php
/**
 * The template for the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Hero logo -->
			<div class="front_hero">
				<div class="hero_logo">
				</div>
			</div>

			<!-- Taxonomy Boxes -->
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
							<img class="home_taxonomy_img"
								alt="logo"
								src="wp-content/themes/inhabitent/images/product-type-icons/<?php echo $term->slug . '.svg'; ?>" />
						  <p class="para_tax_box"><?php	echo	$term->description; ?></p>
							<div class="home_box_button">
								<a class="home_taxonomy_link" href="<?php echo get_term_link($term, '$product_type') ?>"><?php	echo	$term->name; ?> Stuff</a>
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<!-- Journal Posts -->
			<div class="home_journal_posts_wrapper">
				<h1 class="home_titles">Inhabitient Journal</h1>
					<?php
				 	$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
				 	$journal_posts = get_posts( $args );
					?>
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						<div class="journal_box">
							<?php	the_post_thumbnail(); ?>
							<span class="date_comments"><?php	the_date(); ?> / <?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
							<h3 class="journal_home_boxes">
								<?php the_title(); ?></h3>
								<div class="journal_box_button">
									<a href=<?php	the_permalink(); ?>>Read Entry</a>
								</div>
					 </div>
					<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<!-- Adventure Posts -->
				<h1 class="home_titles">Latest Adventures</h1>




		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
