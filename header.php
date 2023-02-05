<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php

    $LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
    $LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
    $IfModifiedSince = false;

    if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
      $IfModifiedSince = strtotime(substr ($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));

    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
      $IfModifiedSince = strtotime(substr ($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));

    if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
      header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
      exit;
    }

    header('Last-Modified: '. $LastModified);

  ?>
  <?php wp_head(); ?>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>

<body class="bg-light single-post style-default style-rounded" <?php body_class(); ?>>
  
  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <?php
          wp_nav_menu(
              array(
                  'menu'  => '3',
                  'menu_class'=> 'nav__menu',
              )
          );
      ?>
    </nav>
  </header> <!-- end sidenav -->


  <main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
      <div class="container">
        <div class="row">

          <!-- Top menu -->
          <div class="col-lg-10 col-md-9 col-12">
            <div class="top-header">
              <div class="logo">
                <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.jpg" alt="Купить диплом Гознак в Санкт-Петербурге без предоплаты" title="Купить диплом Гознак в Санкт-Петербурге без предоплаты"></a>
                <div class="slogan">На нашем сайте вы можете приобрести любой тип документа. Без предоплаты. Доставка - бесплатно! </div>
              </div>
              <ul class="top-menu">
                <li><a href="tel:+78127483399">+7 (812) 748-33-99</a></li>
                <li><a href="mailto:zakaz@rus-docs.com">zakaz@rus-docs.com</a></li>
              </ul>
            </div>
          </div>

          <!-- Socials -->
          <div class="col-lg-2 col-md-3 col-12">
            <div class="socials nav__socials socials--nobase socials--white justify-content-end"> 
              <a href="https://wa.me/79523763899" class="social social-whatsapp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-whatsapp.png" alt="Купить срочно диплом в WhatsApp"></a>
              <a href="viber://add?number=79523763899" class="social social-viber" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-viber.png" alt="Купить срочно диплом в Viber"></a>
              <a href="https://t.me/DocumentovBot" class="social social-telegram" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-telegram.png" alt="Купить срочно диплом в Telegram"></a>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">
      <div class="nav__herologo">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-spb-3.png" alt="Купить диплом о высшем образовании срочно в Москве" title="Купить диплом о высшем образовании срочно в Москве"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> 

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">
                <?php
                    wp_nav_menu(
                        array(
                            'menu'  => '3',
                            'menu_class'=> 'nav__menu',
                        )
                    );
                ?>
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form" action="/" method="get">
                    <input type="text" name="s" id="search" class="nav__search-input" alue="<?php the_search_query(); ?>" placeholder="Поиск...">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>                
              </div>             

            </div> <!-- end nav right -->            
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->
      </div>
    </header> <!-- end navigation -->

    <!-- Breadcrumbs -->
    <div class="container">
    <?php
          if ( !is_page(10) ) :
            do_action('pretty_breadcrumb');
         else :
             echo '<div class="block-serp"></div>';
         endif;
    ?>

    </div>
