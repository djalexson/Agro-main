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
<?php the_post(); ?>
            <!-- Title -->
            <?php bootscore_post_thumbnail(); ?>
            <!-- .entry-header -->
            <?php the_content(); ?>
            <!-- .entry-content -->
            <?php wp_link_pages(array(
              'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
              'after'  => '</div>',
            ));
            ?>
      
 
<section class="hero">
            <div class="container">
                <div class="hero__wrapper">
                    <div class="row">
                        <div class="col-7">
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
                                <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number">
                                <button class="btn btn_submit">Отправить
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/telegram.svg" alt="telegram">
                                </button>
                                <button class="btn btn_phone">8 928 212 22 19</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="build">
            <div class="container">
                <h2 class="build__title">
                    Что строим
                </h2>
                <ul class="build__tabs">
                    <li class="build__tab build__tab_active">Ангары бескаркасные</li>
                    <li class="build__tab">Каркасные ангары</li>
                    <li class="build__tab">Ангары тентовые</li>
                    <li class="build__tab">Ремонт и реконструкция ангаров</li>
                    <li class="build__tab">Изготовление металлоконструкций</li>
                </ul>
                <div class="row">
                    <div class="build__item">
                        <div class="col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/build_1.jpg" alt="build__img" class="build__img">
                        </div>
                        <div class="col-6 build__ml">
                            <h2 class="build__text">Ангары бескаркасные</h2>
                            <div class="build__wrapper">
                                <div class="col-6">
                                    <ul class="build__item-lists">
                                        <li class="build__item-list"><a href="#">Бескаркасные ангары-свинарники</a></li>
                                        <li class="build__item-list"><a href="#">Бескаркасные зернохранилища</a></li>
                                        <li class="build__item-list"><a href="#">Бескаркасные склады, гаражи</a></li>
                                        <li class="build__item-list"><a href="#">Производственные бескаркасные
                                                сооружения</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="build__item-lists">
                                        <li class="build__item-list"><a href="#">Бескаркасные навесы</a></li>
                                        <li class="build__item-list"><a href="#">Бескаркасные овощехранилища</a></li>
                                        <li class="build__item-list"><a href="#">Ангары для животноводства</a></li>
                                        <li class="build__item-list"><a href="#">Авиационные ангары</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="build__item-specs">
                                <div class="build__item-spec"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/height.svg" alt="spec">
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
                                <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number">
                                <button class="btn btn_build">
                                    <div class="btn__text">
                                        Отправить
                                    </div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/telegram.svg" alt="telegram">
                                </button>
                                <button class="btn btn_build btn_bg">8 928 212 22 19</button>
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

                </div>
            </div>
        </section>

        <section class="prod">
            <div class="container">
                <h2 class="prod__title">
                    Что производим
                </h2>
                <ul class="prod__tabs">
                    <li class="prod__tab prod__tab_active">Бороны</li>
                    <li class="prod__tab">Опрыскиватели</li>
                    <li class="prod__tab">Разбрасыватели удобрений</li>
                    <li class="prod__tab">Прочая сельхозтехника</li>
                    <li class="prod__tab">Запчасти и комплектующие</li>
                </ul>
                <div class="row">
                    <div class="prod__item">
                        <div class="col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/prod_1.jpg" alt="build__img" class="prod__img">
                        </div>
                        <div class="col-6 prod__ml">
                            <h2 class="prod__text">Бороны</h2>
                            <p class="prod__item-descr">
                                Цена рассчитывается индивидуально по согласованному техническому заданию
                            </p>
                            <form action="#" class="form form_prod">
                                <h2 class="form__title form__title_prod">
                                    Получить расчет:
                                </h2>
                                <p class="form__phone form__phone_prod">Ваш телефон<span>*</span></p>
                                <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number">
                                <button class="btn btn_prod">
                                    <div class="btn__text">
                                        Отправить
                                    </div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/telegram.svg" alt="telegram">
                                </button>
                                <button class="btn btn_prod btn_bg">8 928 212 22 19</button>
                            </form>
                            <div class="prod__item-advs">
                                Применение:
                                <ul class="prod__item-advs-list">
                                    <li class="prod__item-advs-adv">обработки почвы до стадии появления всходов и
                                        после;</li>
                                    <li class="prod__item-advs-adv">работ по сохранению нормальной влажности почвы;
                                    </li>
                                    <li class="prod__item-advs-adv">для выравнивания верхнего почвенного слоя;</li>
                                    <li class="prod__item-advs-adv">для борьбы с сорняками на их ранней (ниточковой)
                                        фазе.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="find">
            <div class="container">
                <h2 class="find__title">Не нашли, что искали?</h2>
                <p class="find__descr">Отправьте заявку — подберем необходимое оборудование или комплектующие,
                    рассчитаем стоимость постройки или производства!</p>
                <div class="row">
                    <div class="offset-2 col-8">
                        <form action="#" class="form form_find">
                            <p class="form__phone form__phone_find">Ваш телефон<span>*</span></p>
                            <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number">
                            <button class="btn btn_find">
                                <div class="btn__text">
                                    Заказать расчет
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/telegram.svg" alt="telegram">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <h2 class="about__title">
                    О нас
                </h2>
                <div class="row">
                    <div class="col-7">
                        <p class="about__descr">ООО “АГРО-ТЕХ” было создано с целью удовлетворения потребностей
                            отечественных сельхозпроизводителей в надежной и практичной технике. В настоящее время это
                            успешно развивающаяся компания с внушительным опытом работы в производственной и
                            строительной сфере.
                        </p>
                        <p class="about__descr">ООО “АГРО-ТЕХ” уже на протяжении длительного времени является одной из
                            наиболее заметных компаний изготовителей на рынке сельскохозяйственной техники. Основная
                            сфера нашей деятельности это – ангары и сельхозтехника от производителя.</p>
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
                    <div class="col-5">
                        <div class="about__img-right">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_1.jpg" alt="photo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_2.jpg" alt="photo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_3.jpg" alt="photo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about__img-bottom">
                        <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_1.jpg" alt="photo"></div>
                        <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_2.jpg" alt="photo"></div>
                        <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_3.jpg" alt="photo"></div>
                        <div class="col-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about_b_4.jpg" alt="photo"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="advantage">
            <div class="container">
                <h2 class="advantage__title">Наши преимущества</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/guarantee.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Гарантия</h3>
                                <p class="advantage__item-descr">На каждый наш объект мы даем гарантию на несущие
                                    конструкции</p>
                            </div>
                        </div>
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/worker.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Опытные бригады</h3>
                                <p class="advantage__item-descr">Мы не набираем "непонятные" бригады из интернета. Наши
                                    люди
                                    более 5 лет работают с нами</p>
                            </div>
                        </div>
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/cogwheel-setting.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">СРО</h3>
                                <p class="advantage__item-descr">Мы саморегулируемая организация и у нас есть
                                    соответствующий допуск. Гарантия надёжности</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/wallet.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Без скрытых платежей</h3>
                                <p class="advantage__item-descr">В отличие от конкурентов, мы гарантируем, что цена в
                                    договоре неизменна при любых обстоятельствах</p>
                            </div>
                        </div>
                        <div class="advantage__item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/engineering.svg" alt="adv">
                            <div class="advantage__wrapper">
                                <h3 class="advantage__item-title">Своя база и техника</h3>
                                <p class="advantage__item-descr">Мы обеспечиваем низкие цены за счёт того что у нас своя
                                    производственная база со всем необходимым оборудованием и спец.техникой</p>
                            </div>
                        </div>
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
        </div>
    </main>


<?php
get_footer();
