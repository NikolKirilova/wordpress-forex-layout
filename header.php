<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>


  <header>
  <nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">

      

          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="img-fluid logo">
          </a>

          <div class="button-mobile">
            <a href="http://localhost/Forex/registration/" type="button" class="btn btn-primary disapear">Open account</button>
          </div>
          <a href="http://localhost/Forex/registration/"  class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <!-- these spans become the three lines -->
            <span> </span>
            <span> </span>
            <span> </span>
          </a>
           

<?php wp_nav_menu(

  array(

  'theme_location' => 'top-menu',
  'depth'             => 2,
  'container'         => 'div',
  'container_class'   => 'collapse navbar-collapse',
  'container_id'      => 'navbarResponsive',
  'menu_class'        => 'navbar-nav',
  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
  'walker'            => new WP_Bootstrap_Navwalker(),
    )
     ); ?>
         
          <ul class="nav navbar-nav navbar-links">
            <li class="search-icon"><i class="fas fa-search"></i></li>
            <li class="login-button">
              <button type="button" class="btn btn-primary login">Login</button>
            </li>
            <li><button type="button" class="btn btn-primary disapear">Open account</button> </li>
          </ul>

        
      </div>
    </nav>
  </header>