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

									<ul class="nav__menu" data-menu="Меню">
											<li class="nav__menu__item active" ><a href="#" class="nav__menu__link">Ангары </a></li>
											<li class="nav__menu__item"><a href="#" class="nav__menu__link">Сельхозтехника</a></li>
											<li class="nav__menu__item"><a href="#" class="nav__menu__link">Запчасти </a></li>
											<li class="nav__menu__item"><a href="#" class="nav__menu__link">Услуги </a></li>
											<li class="nav__menu__item"><a href="#" class="nav__menu__link">О компании </a></li>
											<li class="nav__menu__item"><a href="#" class="nav__menu__link">Контакты </a></li>
											<li class="nav__menu__item">
													<a href="#" class="nav__menu__link nav__menu__link--triangle">Наши
															работы
													</a>
													<ul class="nav__dropdown">
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Ангары
																			бескаркасные</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Тентовые ангары</a>
															</li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Навесы и тока</a>
															</li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Авиационные
																			ангары</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Каркасные ангары</a>
															</li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Бороны</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Разбрасыватели
																			удобрений</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Опрыскиватели</a>
															</li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Прочая
																			сельхозтехника</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Запчасти и
																			комплектующие</a></li>
															<li class="nav__dropdown__item"><a href="#" class="nav__dropdown__link">Услуги</a></li>
													</ul>
											</li>
									</ul>
								</div>
							</div>
            </div>
        </nav>
       
    </header>

