<?php
/**
 * Template Name: Stories Layout
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
  <div class="stories-parallax-container">
    <div class="col-md-12 stories-title">
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
            <li><a class="side-btn2" href="#confidence" id="confidence" onclick="toggle_visibility('mini-content');">Confidence Both On and Off The Field</a></li>
            <li><a class="side-btn2" href="#learning" id="learning" onclick="toggle_visibility('classic-content');">Learning Soccer and Life Skills</a></li>
            <li><a class="side-btn2" href="#moving" id="moving" onclick="toggle_visibility('premier-content');">A Piece of home</a></li>
            <li><a class="side-btn2" href="#sports" id="sports" onclick="toggle_visibility('premier-content');">Pathway Into Sports</a></li>
            <li><a class="side-btn2" href="#respect" id="respect" onclick="toggle_visibility('premier-content');">Care, Respect, and Honor Children</a></li>
            <li><a class="side-btn2" href="#motorskills" id="motorskills" onclick="toggle_visibility('premier-content');">Improved Gross Motor Skills</a></li>
            <li><a class="side-btn2" href="#favorite" id="favorite" onclick="toggle_visibility('premier-content');">"JBD Review"</a></li>
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
                  <img  class="programs-img"  src="<?php echo get_template_directory_uri()?>/img/stories1.png" alt="">
                  <h2>Confidence Both On and Off The Court</h2>
                        <div id="confidence">
                          <p class="age-group"><strong>Confidence Both On and Off The Court</strong></p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                </div>

                <div>
                  <img class="programs-img" src="<?php echo get_template_directory_uri()?>/img/stories2.png" alt="">
                  <h2>Learning Basketball and Life Skills</h2>
                  <div id="learning">
                    <p class="age-group"><strong></strong></p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  </div>

                <div>
                  <img class="programs-img"  src="<?php echo get_template_directory_uri()?>/img/stories3.png" alt="">
                  <h2>A Piece of Home</h2>
                  <div id="moving">
                    <p class="age-group"><strong>A Piece of Home</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                  </div>
                </div>

                <div>
                  <img class="programs-img"  src="<?php echo get_template_directory_uri()?>/img/stories4.png" alt="">
                  <h2>A Pathway Into Sports</h2>
                  <div id="sports">
                    <p class="age-group"><strong>A Pathway Into Sports</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
