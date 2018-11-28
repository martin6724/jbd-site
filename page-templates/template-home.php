<?php
/**
 *Template Name: Home Page
 *
 * This is the template that displays the home page by default.
 *
 *@link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *@package understrap
 *
 */
get_header();
?>
<!--  leading image -->

  <div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="home-parallax-container">
        <!-- Cover photo form div  -->
        <div class="container">
        <div class="row home-top-form">
          <div class="form-inner">
          <div class="col-xs-2">
            <h3>FIND A PROGRAM NEAR YOU</h3>
          </div>
          <div class="col-xs-10">
            <form class="form-inline" style="margin-top:10px;">
              <div class="form-group">
                <select class="form-control form-control-md dropdowns">
                  <option value="">Spring 2019</option>
                  <option value="">Summer 2019</option>
                  <option value="">Fall 2019</option>
                </select>
                <img class="select-dropdown" src="<?php echo get_template_directory_uri(); ?>/img/select-dropdown.png" alt="junior basketball development Miami search">
                <select class="form-control form-control-md dropdowns">
                  <option value="">Select School</option>
                  <option value="">Select School2</option>
                  <option value="">Select School3</option>
                  <option value="">Select School4</option>
                </select>
                <img class="select-dropdown" src="<?php echo get_template_directory_uri(); ?>/img/select-dropdown.png" alt="junior basketball development Miami search">
                <button type="submit" class="btn btn-custom">REGISTER NOW</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>

      <!--centering content within margins -->
      <!-- <div class="col-md-8"> -->

 <div class="container">
   <div class="row">
     <div class="col-xs-10">






  <!-- icon tab content   -->
        <div class="container home-tabs">
        <div class="row tabs col-md-offset-2">

          <div class="col-md-2 tab-box active" id="defaultOpen" onclick="showContent(event, 'coaching')">
              <img class="tab-icon" src="<?php echo get_template_directory_uri(); ?>/img/coaching.png">
              <p class="tab-name">Coaching</p>
          </div>

          <div class="col-md-2 tab-box" onclick="showContent(event, 'discipline')">
              <img class="tab-icon" src="<?php echo get_template_directory_uri(); ?>/img/discipline.png">
              <p class="tab-name">Discipline</p>
            </div>


          <div class="col-md-2 tab-box" onclick="showContent(event, 'programs')">
                <img class="tab-icon" src="<?php echo get_template_directory_uri(); ?>/img/programs.png">
                <p class="tab-name">Programs</p>
          </div>


          <div class="col-md-2 tab-box" onclick="showContent(event, 'find')">
                <img class="tab-icon" src="<?php echo get_template_directory_uri(); ?>/img/find.png">
                <p class="tab-name">Find Your School</p>
        </div>

          <div class="col-md-2 tab-box" onclick="showContent(event, 'meet')">
                  <img class="tab-icon" src="<?php echo get_template_directory_uri(); ?>/img/meet.png">
                  <p class="tab-name">Meet Our Team</p>
          </div>

        </div>
      </div>
<!-- </div> -->




<div class="container">
  <div class="row inner-tabs-content">

    <!-- coaching -->
    <div class="tab-content" id="coaching">
      <img src="<?php echo get_template_directory_uri();?>/img/coaching-img.png" alt="Miami Basketball Camp">
      <div class="corner-left"></div>
      <div class="corner-right"></div>

      <div class="container">
        <div class="row inner-tab-row">
          <div class="col-sm-8 description-left">
            <h1>Coaching, Communication & Curriculum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-sm-4 description-right">
            <h2>The Children's Experience</h2>
            <h4>Dedication to Our Brilliant Youth</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <h4>Setting Goals High</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>

<!-- Discipline  -->
<div class="tab-content" id="discipline" >
  <img src="<?php echo get_template_directory_uri();?>/img/discipline-img.png" alt="Miami Basketball Camp">
  <div class="corner-left"></div>
  <div class="corner-right"></div>

  <div class="container">
    <div class="row inner-tab-row">
      <div class="col-sm-8 description-left">
        <h1>Discipline, Work Ethic and Teamwork</h1>
      <p>test!</p>
      </div>
      <div class="col-sm-4 description-right">
        <h2>Encouraging Personal Growth</h2>
        <h4>Dedication to Our Brilliant Youth</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <h4>Setting Goals High</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<!-- Programs -->

<div class="tab-content" id="programs" >
  <img src="<?php echo get_template_directory_uri();?>/img/coaching-img.png" alt="Miami Basketball Camp">
  <div class="corner-left"></div>
  <div class="corner-right"></div>

  <div class="container">
    <div class="row inner-tab-row">
      <div class="col-sm-8 description-left">
        <h1>More About Our Programs</h1>
    <p>test2</p>
    </div>
      <div class="col-sm-4 description-right">
        <h3>The Children's Experience</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<!-- Find -->
<div class="tab-content" id="find" >
  <img src="<?php echo get_template_directory_uri();?>/img/discipline-img.png" alt="Miami Basketball Camp">
  <div class="corner-left"></div>
  <div class="corner-right"></div>

  <div class="container">
    <div class="row inner-tab-row">
      <div class="col-sm-8 description-left">
        <h1>Find a School Near You</h1>
      <p>
        test3
      </p>
      </div>
      <div class="col-sm-4 description-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>


<!-- Meet -->
<div class="tab-content" id="meet">
  <img src="<?php echo get_template_directory_uri();?>/img/discipline-img.png" alt="Miami Basketball Camp">
  <div class="corner-left"></div>
  <div class="corner-right"></div>

  <div class="container">
    <div class="row inner-tab-row">
      <div class="col-sm-8 description-left">
        <h1>Meet The Team</h1>
      <p>test4</p>
      </div>
      <div class="col-sm-4 description-right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>


  </div>
</div>


<div class="container">
  <div class="partner-schools">
    <h3>Partnered Schools</h3>

  <div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="9000">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item col-md-2 active">
              <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri();?>/img/logo1.png" alt="slide 1">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri();?>/img/logo2.png" alt="slide 2">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri();?>/img/logo3.png" alt="slide 3">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri();?>/img/logo4.png" alt="slide 4">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="<?php echo get_template_directory_uri();?>/img/logo5.png" alt="slide 5">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=7" alt="slide 7">
          </div>
          <div class="carousel-item col-md-2">
              <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=8" alt="slide 8">
          </div>
      </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <i class="fa fa-chevron-left fa-lg text-muted"></i>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
          <i class="fa fa-chevron-right fa-lg text-muted"></i>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</div>
</div>



</div>
</div>
</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); ?>
