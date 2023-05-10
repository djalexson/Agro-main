<?php

/**
 * The header for our WooCommerce theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * 
 * @version 5.2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta 
		name="viewport" 
		content="
		width=device-width, 
		initial-scale=1.0, 
		minimum-scale=1.0, 
		maximum-scale=1.0, 
		user-scalable=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons/ -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/imgfavicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/imgfavicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/imgfavicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/imgfavicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/<?php echo get_stylesheet_directory_uri(); ?>/assets/imgfavicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
	
	
  <?php wp_head(); ?>
	
	
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

	<header class="header">
        <div class="container">
            <div class="header__row"> 
					      <div class="header__logo header--col-5">
                    <a href="/" class="header__logo__link"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo.png" alt="logo"></a>
                </div>

                <div class="header__price header--col-5 header__hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cube.svg" alt="cube">
                    <p>Качество и приемлемая цена</p>
                </div>

                <div class="header__social header--col-5 header__hidden">
                    <div class="header__contacs">
                        <a href="#" class="header__contacs__link header__contacs__link--wsp">
                            <p>WhatsApp</p>
                        </a>
                    </div>
                		<div class="header__contacs">
                        <a href="mailto:mail@agro-teh.su"
                            class="header__contacs__link header__contacs__link--mail mailtrack">
                            <p>mail@agro-teh.su</p>
                        </a>
                    </div>
                </div>
                
								<div class="header__phones header--col-5 header__hidden">
                    <a href="tel:+89282122219" class="phonetrack">8-928-212-22-19</a>
                    <a href="tel:+89287789280" class="phonetrack">8-928-778-92-80</a>
                </div>
								
								<div class="header__walb header--col-5  header__hidden">
									<button class="btn btn_header">
											Заказать звонок
									</button>
								</div>

               <div class="mobile__menu">
                    <div class="header__price mobile__item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cube.svg" alt="cube">
                        <p>Качество и приемлемая цена</p>
                    </div>
                    <div class="header__phones mobile__item">
                        <a href="tel:+89282122219" class="phonetrack">8-928-212-22-19</a>
                        <a href="tel:+89287789280" class="phonetrack">8-928-778-92-80</a>
                    </div>
                    <div class="header__social mobile__item">
                        <div class="header__contacs">
                            <a href="#" class="header__contacs__link header__contacs__link--wsp">
                                <p>WhatsApp</p>
                            </a>
                        </div>
                        <div class="header__contacs mobile__item">
                            <a href="mailto:mail@agro-teh.su"
                                class="header__contacs__link header__contacs__link--mail mailtrack">
                                <p>mail@agro-teh.su</p>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn_header btn_mobile mobile__item">
                        Заказать звонок
                    </button>
                </div>

								<div class="hamburger">
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
          
							</div>

        </div>



        <nav class="nav">
            <div class="container">
							<div class="row">
								<div class="col-12 nav__wrap">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
								<?PHP  my_nav_menu( [ 'theme_location'  => 'main-menu' ],"My_Walker_Nav_Menu","nav__menu" );?>
=======
								<?PHP my_nav_menu( [ 'theme_location'  => 'main-menu' ],"My_Walker_Nav_Menu","nav__menu" );?>
>>>>>>> 4624431 (oк)
=======
									

=======
>>>>>>> 39033c2 (wp w2c)
								<?PHP  my_nav_menu( [ 'theme_location'  => 'main-menu' ],"My_Walker_Nav_Menu","nav__menu" );?>
>>>>>>> fd1596d (ок)
									</div>
							</div>
            </div>
        </nav>
       
    </header>

