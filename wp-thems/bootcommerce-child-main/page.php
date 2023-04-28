<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
    <main>
        <section class="hero">
            <div class="container">
                <div class="row hero__wrapper">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-8 col-8">
                            <h1 class="hero__title">ИДЕАЛЬНЫЕ АНГАРЫ ЗАВОДСКОГО ИЗГОТОВЛЕНИЯ</h1>
                            <p class="hero__subtitle">
                                (Ангары, Бороны, Опрыскиватели, Сельхозтехника, Запчасти)
                            </p>
                            <ul class="hero__list">
                                <li class="hero__item">напрямую от производителя</li>
                                <li class="hero__item">абсолютно любых размеров</li>
                            </ul>
                            <form action="#" class="form">
                                <h2 class="form__title">
                                    получить консультацию:
                                </h2>
                                <p class="form__phone">Ваш телефон<span>*</span></p>
                                <div class="form__wrap">
                                    <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
                                        class="teltrack">
                                    <button class="btn btn_submit buttontrack">
																			<span>

																				Отправить
																			</span>
                                    </button>
                                    <a href="tel:+89282122219" class="btn btn_phone">
                                        8 928 212 22 19</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
        </section>

				<section class="build">
					<div class="container">
							<div class="row">
									<div class="col-12 main-txt">
											<h2 class="main-txt__title">
													Что строим
											</h2>
									</div>
							</div>
							<ul class="build__tabs">
									<li class="build__tab build__tab_active"><span>Ангары бескаркасные</span></li>
									<li class="build__tab"><span>Каркасные ангары</span></li>
									<li class="build__tab"><span>Ангары тентовые</span></li>
									<li class="build__tab"><span>Ремонт и реконструкция ангаров</span></li>
									<li class="build__tab"><span>Изготовление металлоконструкций</span></li>
							</ul>
							<div class="build__wrap-tabs">

									<div class="row justify-content-xl-center build__item build__item_active">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_1.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Ангары бескаркасные</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_1.jpg" alt="build__img" class="build__img">
													</div>	
													<div class="row">
															<div class="col-sm-12 col-lg-11">
																	<ul class="build__item-lists">
																			<li class="build__item-list"><a href="#">Бескаркасные ангары-свинарники</a></li>
																			<li class="build__item-list"><a href="#">Бескаркасные зернохранилища</a>
																			</li>
																			<li class="build__item-list"><a href="#">Бескаркасные склады, гаражи</a>
																			</li>
																			<li class="build__item-list"><a href="#">Производственные бескаркасные
																							сооружения</a></li>
																			<li class="build__item-list"><a href="#">Бескаркасные навесы</a></li>
																			<li class="build__item-list"><a href="#">Бескаркасные овощехранилища</a></li>
																			<li class="build__item-list"><a href="#">Ангары для животноводства</a></li>
																			<li class="build__item-list"><a href="#">Авиационные ангары</a></li>
																	</ul>
															</div>
													</div>

													<div class="build__item-specs">
															<div class="build__item-spec">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/height.svg" alt="spec">
																	<p>От 12 до 28 метров</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/thermometer.svg" alt="spec">
																	<p>Утепление пенополиуретаном</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/fan.svg" alt="spec">
																	<p>Монтаж системы вентиляции</p>
															</div>
													</div>
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Преимущества бескаркасных ангаров:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">Быстрая окупаемость проекта</li>
																	<li class="build__item-advs-adv">Скорость строительства (20 дней)</li>
																	<li class="build__item-advs-adv">Герметичность и прочность конструкции</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_2.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Каркасные ангары</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_2.jpg" alt="build__img" class="build__img">
													</div>	
													<div class="row">
															<div class="col-sm-12 col-lg-11">
																	<ul class="build__item-lists">
																			<li class="build__item-list"><a href="#">Каркасные ангары</a></li>
																			<li class="build__item-list"><a href="#">Тока, каркасные навесы</a></li>
																			<li class="build__item-list"><a href="#">Прямостенные ангары</a></li>
																			<li class="build__item-list"><a href="#">Автомойки и автосервисы</a></li>
																			<li class="build__item-list"><a href="#">Магазины</a></li>
																			<li class="build__item-list"><a href="#">Навесы</a></li>
																	</ul>
															</div>
													</div>

													<div class="build__item-specs">
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/height.svg" alt="spec">
																	<p>От 10 до 48 метров</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/sewage.svg" alt="spec">
																	<p>Монтаж системы водоотлива (опционально)</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/drain.svg" alt="spec">
																	<p>Зашивка боковых стен (опционально)</p>
															</div>
													</div>
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Каркасные навесы:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">Скорость строительства (от 25 дней)</li>
																	<li class="build__item-advs-adv">Заказчик может выбрать цвет зашивки стен</li>
																	<li class="build__item-advs-adv">Возможность утепления закрытого сооружения</li>
																	<li class="build__item-advs-adv">Удобство загрузки и выгрузки продукции за счёт
																			широких проездов</li>
																	<li class="build__item-advs-adv">Возможность выбора профиля зашивки кровли и боковых
																			стен в зависимости от назначения</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_3.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Тентовые ангары</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_3.jpg" alt="build__img" class="build__img">
													</div>	

													<div class="build__item-specs">
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/height.svg" alt="spec">
																	<p>От 12 до 14 метров</p>
															</div>
													</div>
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Тентовые ангары – наиболее оптимальный вариант строительства, если:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">Вам нужно выставочное помещение</li>
																	<li class="build__item-advs-adv">Вам нужна временная и мобильная постройка</li>
																	<li class="build__item-advs-adv">У Вас ограниченный бюджет и поджимают сроки</li>
																	<li class="build__item-advs-adv">Нужна постройка на охраняемой территории</li>
																	<li class="build__item-advs-adv">Материал тента максимально устойчив к воздействиям
																			окружающей среды, в т.ч., солнечного излучения, морозов, сильных ветров и
																			осадков</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_4.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Изготовление металлоконструкций</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_4.jpg" alt="build__img" class="build__img">
													</div>	

													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs build__item-advs-mt">
															Широкий спектр производственных услуг по изготовлению деталей:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">гибка листового металла</li>
																	<li class="build__item-advs-adv">порошковая покраска в любой цвет</li>
																	<li class="build__item-advs-adv">раскрой листового металла</li>
																	<li class="build__item-advs-adv">слесарные, сборочные и сварочные работы</li>
																	<li class="build__item-advs-adv">токарные работы по чертежам</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_5.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Ремонт и реконструкция ангаров</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_5.jpg" alt="build__img" class="build__img">
													</div>	

													<div class="build__item-specs">
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/height.svg" alt="spec">
																	<p>От 12 до 28 метров</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/sewage.svg" alt="spec">
																	<p>Утепление пенополиуретаном</p>
															</div>
															<div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/drain.svg" alt="spec">
																	<p>Монтаж системы вентиляции</p>
															</div>
													</div>
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															В зависимости от назначения сооружения, могут быть выполнены следующие виды работ:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">Установка естественного освещения</li>
																	<li class="build__item-advs-adv">Монтаж естественной системы вентиляции</li>
																	<li class="build__item-advs-adv">Монтаж приточной и принудительной систем вентиляции
																	</li>
																	<li class="build__item-advs-adv">Утепление сооружения</li>
																	<li class="build__item-advs-adv">Какие-либо другие виды работ, требуемые Заказчиком
																	</li>
															</ul>
													</div>
											</div>
									</div>

							</div>
					</div>
			</section>

			<section class="build">
					<div class="container">
							<div class="row">
									<div class="col-12 main-txt">
											<h2 class="main-txt__title">
													Что производим
											</h2>
									</div>
							</div>
							<ul class="build__tabs">
									<li class="build__tab build__tab_active"><span> Бороны </span></li>
									<li class="build__tab"><span> Опрыскиватели </span></li>
									<li class="build__tab"><span> Разбрасыватели удобрений </span></li>
									<li class="build__tab"><span> Прочая сельхозтехника </span></li>
									<li class="build__tab"><span> Запчасти и комплектующие </span></li>
							</ul>
							<div class="build__wrap-tabs">

									<div class="row justify-content-xl-center build__item build__item_active">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_1.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Бороны</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_1.jpg"  alt="build__img" class="build__img">
													</div>	
												
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Применение:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">обработки почвы до стадии появления всходов и
																			после;</li>
																	<li class="build__item-advs-adv">работ по сохранению нормальной влажности почвы;
																	</li>
																	<li class="build__item-advs-adv">для выравнивания верхнего почвенного слоя;</li>
																	<li class="build__item-advs-adv">для борьбы с сорняками на их ранней (ниточковой)
																			фазе.</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_2.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Опрыскиватели</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_2.jpg"  alt="build__img" class="build__img">
													</div>	
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Надежность и долговечность:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">в основе машины – прочная и надежная сварная рамная
																			конструкция</li>
																	<li class="build__item-advs-adv">на бункер и раму нанесено химически стойкое
																			полимерное покрытие</li>
																	<li class="build__item-advs-adv">все крепежные элементы, отбойный короб, рабочие
																			тарелки и лопатки сделаны из нержавеющей стали</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_3.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Разбрасыватели удобрений</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_3.jpg"  alt="build__img" class="build__img">
													</div>	
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Функциональность и удобство эксплуатации:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">удобная подача разбрасываемого материала и низкая
																			высота загрузки</li>
																	<li class="build__item-advs-adv">доступная и простая система для регулирования
																			расхода гранул</li>
																	<li class="build__item-advs-adv">Ещё одной важной функцией МВУ является посев семян
																			трав и зерновых. Для этого такое оборудование и используется на мелкоконтурных
																			полях</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_4.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Прочая сельхозтехника</h2>
													<div class="build__img-wrap lg__hidden">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_4.jpg"  alt="build__img" class="build__img">
													</div>	
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															Продукция компании эргономична и современна:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">процесс подготовки её к работе занимает минимум
																			времени и не требует специальных навыков</li>
																	<li class="build__item-advs-adv">вся продукция компании выверена отечественными
																			ГОСТами, отвечает мировым стандартам качества и действующим нормативам ГНУ ВИЗР
																	</li>
															</ul>
													</div>
											</div>
									</div>

									<div class="row justify-content-xl-center build__item">
												<div class="col-6 build__hidden">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_5.jpg" alt="build__img" class="build__img">
												</div>
												<div class="col-sm-12 col-lg-12 col-xl-8 col-xxl-6">
													<h2 class="build__text">Запчасти и комплектующие</h2>
													<div class="build__img-wrap lg__hidden">

														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_5.jpg"  alt="build__img" class="build__img">
													</div>	
													<p class="build__item-descr">
															Цена рассчитывается индивидуально по согласованному техническому заданию
													</p>
													<form action="#" class="form form_build">
															<h2 class="form__title form__title_build">
																	Получить расчет:
															</h2>
															<p class="form__phone form__phone_build">Ваш телефон<span>*</span></p>
															<div class="form__wrap">
																	<input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
																			class="phonetrack">

																	<button class="btn btn_submit buttontrack">
																		<span>Отправить</span>
																	</button>
																	<a href="tel:+89282122219" class="btn btn_phone phonetrack">
																			8 928 212 22 19</a>
															</div>
													</form>
													<div class="build__item-advs">
															У нас Вы можете найти запчасти и комплектующие на сельхозтехнику:
															<ul class="build__item-advs-list">
																	<li class="build__item-advs-adv">разбрасыватели удобрений</li>
																	<li class="build__item-advs-adv">штанговые (полевые) и вентиляторные (садовые)
																			опрыскиватели</li>
																	<li class="build__item-advs-adv">бороны кольчатые и пружинные и многое другое</li>
															</ul>
													</div>
											</div>
									</div>

							</div>
					</div>
			</section>

    <section class="find">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 main-txt">
                        <h2 class="main-txt__title">Не нашли, что искали?</h2>
                        <p class="main-txt__descr main-txt__descr--full">Отправьте заявку — подберем необходимое
                            оборудование или комплектующие,
                            рассчитаем стоимость постройки или производства!</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 ">
                        <form action="#" class="form">
                            <p class="form__phone form__phone_find">Ваш телефон<span>*</span></p>
                            <div class="form__wrap">
                                <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number"
                                    class="teltrack find__input">
                                <button class="btn btn_submit btn_find buttontrack">
																	<span>
																		Заказать расчет

																	</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 main-txt">
                        <h2 class="main-txt__title ">
                            О нас
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-12 col-xxl-7">
                        <p class="about__descr">ООО “АГРО-ТЕХ” было создано с целью удовлетворения потребностей
                            отечественных сельхозпроизводителей в надежной и практичной технике. В настоящее время это
                            успешно развивающаяся компания с внушительным опытом работы в производственной и
                            строительной сфере.
                        </p>
                        <p class="about__descr">ООО “АГРО-ТЕХ” уже на протяжении длительного времени является одной из
                            наиболее заметных компаний изготовителей на рынке сельскохозяйственной техники. Основная
                            сфера нашей деятельности это – ангары и сельхозтехника от производителя.</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_1.jpg" alt="photo" class="about__img lg__hidden">
                        <div class="about__feat">
                            <div class="about__feat-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/achievement.svg" alt="feat">
                                <div class="about__wrapper">
                                    <h3 class="about__feat-item__title">Качество и приемлемая цена</h3>
                                    <p class="about__feat-item__descr">предприятие создает столь же качественные,
                                        недорогие и адаптированные к российским реалиям отечественные аналоги
                                        сельскохозяйственной техники.</p>
                                </div>
                            </div>
                            <div class="about__feat-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/file.svg" alt="feat">
                                <div class="about__wrapper">
                                    <h3 class="about__feat-item__title">СЕРТИФИКАТЫ</h3>
                                    <p class="about__feat-item__descr">все предлагаемые машины сертифицированы, во
                                        многих из них используются собственные запатентованные разработки.</p>
                                </div>
                            </div>
                            <div class="about__feat-item">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cooperation.svg" alt="feat">
                                <div class="about__wrapper">
                                    <h3 class="about__feat-item__title">Партнерство</h3>
                                    <p class="about__feat-item__descr">компания имеет десятки фирм-партнеров как на
                                        территории России, так и в странах ближнего и дальнего зарубежья.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 about__hidden">
                        <div class=" row about__img-right">
                            <div class="col-12 mb-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_1.jpg" alt="photo">
                            </div>

                            <div class="col-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_2.jpg" alt="photo">

                            </div>
                            <div class="col-6">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_3.jpg" alt="photo">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row about__img-bottom about__hidden">

                    <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_1.jpg" alt="photo"></div>
                    <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_2.jpg" alt="photo"></div>
                    <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_3.jpg" alt="photo"></div>
                    <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_4.jpg" alt="photo"></div>

                </div>

                <div id="carouselExampleIndicators" class="carousel slide d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"> &nbsp; </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2">&nbsp;</button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3">&nbsp;</button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4">&nbsp;</button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_1.jpg" class="d-block w-100" alt="photo">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_2.jpg" class="d-block w-100" alt="photo">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_3.jpg" class="d-block w-100" alt="photo">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_4.jpg" class="d-block w-100" alt="photo">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>

        <section class="advantage">
            <div class="container">
                <div class="row">
                    <div class="col-12 main-txt mb-3">
                        <h2 class="main-txt__title">Наши преимущества</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/guarantee.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Гарантия</h3>
                                <p class="advantage__item-descr">На каждый наш объект мы даем гарантию на несущие
                                    конструкции</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/worker.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Опытные бригады</h3>
                                <p class="advantage__item-descr">Мы не набираем "непонятные" бригады из интернета. Наши
                                    люди
                                    более 5 лет работают с нами</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cogwheel-setting.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">СРО</h3>
                                <p class="advantage__item-descr">Мы саморегулируемая организация и у нас есть
                                    соответствующий допуск. Гарантия надёжности</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/wallet.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Без скрытых платежей</h3>
                                <p class="advantage__item-descr">В отличие от конкурентов, мы гарантируем, что цена в
                                    договоре неизменна при любых обстоятельствах</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/engineering.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Своя база и техника</h3>
                                <p class="advantage__item-descr">Мы обеспечиваем низкие цены за счёт того что у нас своя
                                    производственная база со всем необходимым оборудованием и спец.техникой</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/mechanics.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Под ключ</h3>
                                <p class="advantage__item-descr">Выполняем полный комплекс работ - от проектирования до
                                    сдачи в эксплуатацию, помогаем с благоустройством, оформляем документы</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
