<?php
/**
 * Template Name: About Layout
 *
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">
  <div class="parallax-container" style="background:linear-gradient(#00000045,rgba(0,0,0,0), rgba(0,0,0,0), rgba(0,0,0,0), rgba(0,0,0,0)), url('<?php echo get_the_post_thumbnail_url(); ?>');background-attachment: fixed;background-position: bottom center;">>
    <div class="col-md-12 contact-title">
      <div class="container">
        <div class="container">
        <h1> <?php echo get_the_title(); ?> </h1>
          <div class="summary">
						<div class="summary">
							<p> <?php echo get_post_meta($post->ID,'summary', true) ?></p>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="container">
		<div class="<?php echo esc_attr( $container ); ?>" id="content">
			<div class="row">
        <div class="col-md-4" id="mock-sidebar">
      		<h3>Register Here</h3>
        </div>


				<div class="col-md-8 content-area" id="primary">
					<main class="site-main" id="main" role="main">
			   <div class="container">
						<div class="row">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

									<?php endwhile; // end of the loop. ?>
						</div>
			    </div>
				</main>
        </div>
			</div>
		</div>
</div>


<?php get_footer(); ?>
