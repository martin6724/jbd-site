<?php
/**
 * Template Name: Register Layout
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
          <h2>FIND YOUR SESSION!</h2>
          <div class="col">
            <h3>AGES</h3>
          </div>
          <div class="col">
            <h3>Available Season</h3>
          </div>
        </div>

				<div class="col-md-8 content-area" id="primary">
					<main class="site-main" id="main" role="main">
            <div class="park-program-container">
              <h2>Park Program</h2>
              Brickell Park at Key Point Academy
            </div>
            <div class="park-program-container">
              <h2>Park Program</h2>
              Brickell Park at Key Point Academy
            </div>
            <div class="park-program-container">
              <h2>Park Program</h2>
              Brickell Park at Key Point Academy
            </div>
            <div class="park-program-container">
              <h2>Park Program</h2>
              Brickell Park at Key Point Academy
            </div>
            <div class="park-program-container">
              <h2>Park Program</h2>
              Brickell Park at Key Point Academy
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
