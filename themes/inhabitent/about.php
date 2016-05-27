<?php
/**
 * The template for displaying the about page.
 *
 * @package RED_Starter_Theme
 * Template Name: About Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="about_hero">
        <h2 class="about_hero_text">About</h1>
      </div>

			<div class="about_content_wrapper">
	      <h1>Our Story</h1>
	      <p><?php echo CFS()->get( 'our_story' ); ?></p>
	      <h1>Our Team</h1>
	      <p><?php echo CFS()->get( 'our_team' ); ?></p>
  		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
