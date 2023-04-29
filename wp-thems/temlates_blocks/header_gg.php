<?php
$head;
$addres;
$list;
$list2;
$img= get_field("header__img") ? get_field("header__img"):  get_stylesheet_directory_uri()."assets/img/hero_bg.jpg";
if ( get_field('header_head') && get_field('header_addres') && get_field('header_list_txt')){
	$list=get_field('header_list_txt');
	$list2=get_field('header_list_txt2');
	$addres=get_field('header_addres'); 
	$head=get_field('header_head');
	
}else{
	
	$list= "Какой-то из полей пустое  проверьте";	
	$list2= "Какой-то из полей пустое  проверьте";	
	$addres="Какой-то из полей пустое  проверьте"; 
	$head="Какой-то из полей пустое  проверьте";

} 

?>
				<section class="hero" style="background: url('<?=$img?>') center center/cover no-repeat; ">
            <div class="container">
                <div class="row hero__wrapper">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-8 col-8">
                            <h1 class="hero__title"><?=$head;?></h1>
                            <p class="hero__subtitle">
														<?=$addres;?>
                            </p>
                            <ul class="hero__list">
                                <li class="hero__item"><?=$list;?></li>
                                <li class="hero__item"><?=$list2;?></li>
                            </ul>

														<?php if( get_field("header_phone")): ?>
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
														<?php endif; ?>
                        </div>
											</div>

                </div>
        </section>