<?php
$head;
$addres;
$list;
if ( get_field('header_head') && get_field('header_addres') && get_field('header_list_txt')){
	$list=get_field('header_list_txt');
	$addres=get_field('header_addres'); 
	$head=get_field('header_head');
	
}else{
	
	$list= "Какой-то из полей пустое  проверьте";	
	$addres="Какой-то из полей пустое  проверьте"; 
	$head="Какой-то из полей пустое  проверьте";

} 

?>
<section class="hero">
            <div class="container">
                <div class="hero__wrapper">
                    <div class="row">
                        <div class="col-7">
                            <h1 class="hero__title"><?=$head;?></h1>
                            <p class="hero__subtitle">
														<?=$addres;?>
                            </p>
                            <ul class="hero__list">
                                <li class="hero__item"><?=$list;?></li>
                                <li class="hero__item">абсолютно любых размеров</li>
                            </ul>
                            <form action="#" class="form">
                                <h2 class="form__title">
                                    получить консультацию:
                                </h2>
                                <p class="form__phone">Ваш телефон<span>*</span></p>
                             <div class="form__wrap">

															 <input name="phone" required placeholder="+7 ( ___ ) ___ - __ - __" type="number">
															 <button class="btn btn_submit">Отправить
															</button>
															<img src="icons/telegram.svg" alt="telegram">
															<a href="tel:+89282122219" class="btn btn_phone">	
																8 928 212 22 19</a>

														 </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>