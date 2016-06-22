<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron intro">
      <div class="container">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>

        <a href="#about" class="btn btn-circle page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
        </a>


      </div>

    </div>





    <div id="events" class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          
          <?php if ( dynamic_sidebar ( ' front-left' ) ); ?>

        </div>
        <div class="col-md-4">

        <?php if ( dynamic_sidebar ( ' front-center' ) ); ?>

       </div>
        <div class="col-md-4">

        <?php if ( dynamic_sidebar ( ' front-right' ) ); ?>

      </div>
    </div>
    </div>



    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">

              <?php if ( dynamic_sidebar( 'front-about' ) ); ?>

            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">

                <?php if ( dynamic_sidebar( 'front-contact' ) ); ?>


                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://facebook.com/hochneun" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map">
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALR-fKOehBUz5vQTl33w6pAYzSAzT6cjU&sensor=false"></script>
    </div>



  <div class="container">


  <?php get_footer(); ?>



