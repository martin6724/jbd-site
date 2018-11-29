<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer bg-primary" id="colophon">

					<div class="site-info">
						<div class="container">
							<div class="row">
								<div class="footer-link col-sm-10">
									<?php echo wp_nav_menu(array('theme_location' => 'secondary-menu'));?>
								</div>

									<!-- <div class="col-sm footer-link">
										<a href="#">Stories of Impact</a>
									</div>
									<div class="col-sm footer-link">
										<a href="#">Parent Resources</a>
									</div>
									<div class="col-sm footer-link">
										<a href="#">Contact</a>
									</div> -->
								<div class="col-sm-2">
									<div class="social">
										<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="social">
										<a href="https://www.facebook.com/Junior-Basketball-Development-237669323590761/"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="social">
										<a href="https://twitter.com/"><i class="fa fa-instagram"></i></a>
									</div>
								</div>


								</div>
								</div>
							</div>

						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
