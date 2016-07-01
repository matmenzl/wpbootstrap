
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title('', true, 'right'); ?>
      <?php bloginfo('name');?>
    </title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <?php wp_head() ?>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                         <i class="fa fa-bars"></i> Menu
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-rocket"></i>  <?php bloginfo( ' url' ); ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#info">Über die Raketebar</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#events">Events</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Öffnungszeiten</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

         <!--  
        <?php 
          $args = array(
            'menu'        =>  'header-menu',
            'menu_class'  =>  'nav navbar-nav',
            'container'   =>  'false'
          );
          wp_nav_menu( $args );
          ?> -->

        </div><!--/.navbar-collapse -->
      </div>
    </nav>