<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri()?>/html_template/img/Key-Systems-Mini-Logo.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

    <title>Diseño Web KS</title>
    <link rel="icon" href="<?php echo get_template_directory_uri()?>/html_template/img/Key-Systems-Mini-Logo.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri()?>/html_template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo get_template_directory_uri()?>/html_template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri()?>/html_template/css/landing-page.css" rel="stylesheet">

    <!-- Style -->
    <!--<link href="<?php echo get_template_directory_uri()?>/html_template/css/cd.css" rel="stylesheet">-->
    <link href="<?php echo get_template_directory_uri()?>/html_template/css/style.css" rel="stylesheet">

    <!-- Custom styles for WordPress implementation -->
    <link href="<?php echo get_template_directory_uri()?>/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <!--<a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
      <div class="container collapse navbar-collapse" id="navbarNavDropdown">
      <?php
      $args = array(
        'theme_location' => 'header-menu',
        'menu_class' => 'navbar-nav',
        'menu_id' => 'header-menu',
        'depth' => 0,
        'container' => 'ul',
        'container_id' => 'top-nav',
        'container_class' => 'navbar-nav',
        'before' => '<li class="nav-item text-uppercase">',
        'after' => '</li>',
        'link_before' => '<span class="nav-link">',
        'link_after' => '</span>',
        'walker'  => new BootstrapNavMenuWalker()
        );
        wp_nav_menu($args);
      ?>
      </div>
    </nav>

    <!--
		<nav class="cd-stretchy-nav">
      <a class="cd-nav-trigger" href="#0">
        <span aria-hidden="true"></span>
      </a>
      <ul>
        <li>
        	<a href="#inicio">
        		<span class="icon-menu"><i class="fa fa-home" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#estilo">
        		<span class="icon-menu"><i class="fa fa-laptop" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#nuestro-trabajo">
        		<span class="icon-menu"><i class="fa fa-trophy" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#portafolio">
        		<span class="icon-menu"><i class="fa fa-star-o" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#temas">
        		<span class="icon-menu"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#quienes-somos">
        		<span class="icon-menu"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#pensamientos">
        		<span class="icon-menu"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#importancia">
        		<span class="icon-menu"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
        	</a>
        </li>
        <li>
        	<a href="#contacto">
        		<span class="icon-menu"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        	</a>
        </li>
      </ul>
      <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
     Header
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
          <h1>Landing Page</h1>
          <h3>A Template by Start Bootstrap</h3>
          <hr class="intro-divider">
          <ul class="list-inline intro-social-buttons">
            <li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg">
                <i class="fa fa-twitter fa-fw"></i>
                <span class="network-name">Twitter</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg">
                <i class="fa fa-github fa-fw"></i>
                <span class="network-name">Github</span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-secondary btn-lg">
                <i class="fa fa-linkedin fa-fw"></i>
                <span class="network-name">Linkedin</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header> -->
