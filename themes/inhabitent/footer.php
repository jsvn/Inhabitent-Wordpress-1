<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<?php
					if(is_active_sidebar('footer')){
					dynamic_sidebar('footer');
					}
				?>

				<div class="site-info">
					<p>Copyright &copy; 2016 Inhabitent</p>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
