</strong><?php
/**
 * Template Name: Programs Layout
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
  <div class="programs-parallax-container">
    <div class="col-md-12 programs-title">
      <div class="container">
        <div class="container">
        <h1> <?php echo get_the_title(); ?> </h1>
          <div class="summary">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="container">
		<div class="<?php echo esc_attr( $container ); ?>" id="content">

			<div class="row">

        <div class="col-md-4" id="mock-sidebar">
          <ul class="sticky-side-nav">
            <li><a class="side-btn" href="#mini" id="mini" onclick="toggle_visibility('mini-content');">Mini</a></li>
            <li><a class="side-btn" href="#classic" id="classic" onclick="toggle_visibility('classic-content');">Classic</a></li>
            <li><a class="side-btn" href="#premier" id="premier" onclick="toggle_visibility('premier-content');">Premier</a></li>
          </ul>
        </div>

				<div class="col-md-8 content-area" id="primary">
					<main class="site-main" id="main" role="main">

						<!-- <#?php while ( have_posts() ) : the_post(); ?>

							<#?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<#?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

					<#?php endwhile; // end of the loop. ?>-->

<!-- inserting custom programs with target ids -->

            <div class="container">
              <div class="container">

                <div>
                  <img  class="programs-img"  src="<?php echo get_template_directory_uri()?>/img/mini.png" alt="">
                  <h2>MINI</h2>
                  <div id="mini-content">
                    <p class="age-group"><strong>2 TO 3 YEAR OLDS</strong></p>
                    <p>Soccer Shots Mini is a high-energy program introducing children to fundamental soccer principles, such as using your feet, dribbling and the basic rules of the game.</p>
                    <p>Through fun games, songs and positive reinforcement, children will begin to experience the joy of playing soccer and being active.</p>
                  </div>
                </div>

                <div>
                  <img class="programs-img" src="<?php echo get_template_directory_uri()?>/img/classic.png" alt="">
                  <h2>CLASSIC</h2>
                  <div id="classic-content">
                    <p class="age-group"><strong>3 TO 5 YEAR OLDS (PRE-K)</strong></p>
                    <p>Soccer Shots Classic utilizes creative and imaginative games to focus on basic soccer skills like dribbling, passing and shooting.</p>
                    <p>We also highlight a positive character trait each session such as respect, teamwork and appreciation.</p>
                  </div>
                  </div>

                <div>
                  <img class="programs-img"  src="<?php echo get_template_directory_uri()?>/img/premier.png" alt="">
                  <h2>PREMIER</h2>
                  <div id="premier-content">
                    <p class="age-group"><strong>5 TO 8 YEAR OLDS (K-2ND GRADE)</strong></p>
                    <p>Soccer Shots Premier focuses on individual skill, fitness and sportsmanship, providing an opportunity for children to be challenged through fun games and team interaction.</p>
                    <p>Children will also be introduced to competition in a developmentally appropriate manner.</p>
                  </div>
                </div>

              </div>
            </div>
<!-- end inserting custom programs with target ids -->


					</main><!-- #main -->

      </div><!-- #primary -->

			</div><!-- .row -->

		</div><!-- Container end -->

	</div>


</div><!-- Wrapper end -->

<?php get_footer(); ?>
