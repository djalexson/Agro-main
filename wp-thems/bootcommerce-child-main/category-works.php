<?php

get_header();  ?>

<main>
	
	<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="catalog">
			<div class="container">
    <!--<h1><?php //the_title(); ?></h1>-->

		<?PHP
		$desc= (get_field('woks_desc', get_the_ID()))?get_field('woks_desc', get_the_ID()): "Поля пустое";
		$desc_all= (get_field('works_desc_all', get_the_ID()))?get_field('works_desc_all', get_the_ID()): "Поля пустое";
		$title= (get_field('works_in_head', get_the_ID()))?get_field('works_in_head', get_the_ID()): "Поля пустое";
		$short= (get_field('works_short', get_the_ID()))? do_shortcode(get_field('works_short', get_the_ID())): "Поля пустое";
		$img= (get_field('works_img_title', get_the_ID()))?get_field('works_img_title', get_the_ID()): "/wp-content/uploads/2023/05/nophoto.png";
		$list_head= (get_field('works_list_head', get_the_ID()))?get_field('works_list_head', get_the_ID()): "Поля пустое";
		$list_hiddin= get_field('works_list_hidden', get_the_ID());
		$list= get_field('works_list', get_the_ID());
		$icon_hidden= get_field('works_icons_hidden', get_the_ID());
		$icons= get_field('works_icons', get_the_ID());
		$tabs_hidden= get_field('works_tabs_hildden', get_the_ID());
		$tabs= get_field('works_tab', get_the_ID());
		?>
		
		   <div class="row">
                    <div class="col-sm-12 col-xl-12 col-xxl-9 card__col">
                        <div class="float-wrapper">
                            <h2 class="catalog__title"><?=$title?></h2>
                            <p class="catalog__text"><?=$desc_all?></p>
                        </div>
                    </div>
                    <div class="col-3 catalog__hidden">
									<?PHP wp_bootstrap_accordion_menu("bootstrap-accordion-menu"); ?>

									</div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-12 col-xxl-6 card__col">
                        <div class="catalog__angar_prints">
                            <div class="catalog__angar_prints--left">
                                <div class="catalog__angar_prints--item catalog__angar_prints--item_active">
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 18C1.45 18 0.979 17.8043 0.587 17.413C0.195667 17.021 0 16.55 0 16V2C0 1.45 0.195667 0.979 0.587 0.587C0.979 0.195667 1.45 0 2 0H10C10.2833 0 10.521 0.0956666 10.713 0.287C10.9043 0.479 11 0.716667 11 1C11 1.28333 10.9043 1.52067 10.713 1.712C10.521 1.904 10.2833 2 10 2H2V16H16V8C16 7.71667 16.096 7.479 16.288 7.287C16.4793 7.09567 16.7167 7 17 7C17.2833 7 17.5207 7.09567 17.712 7.287C17.904 7.479 18 7.71667 18 8V16C18 16.55 17.8043 17.021 17.413 17.413C17.021 17.8043 16.55 18 16 18H2ZM15 6C14.7167 6 14.4793 5.904 14.288 5.712C14.096 5.52067 14 5.28333 14 5V4H13C12.7167 4 12.4793 3.90433 12.288 3.713C12.096 3.521 12 3.28333 12 3C12 2.71667 12.096 2.479 12.288 2.287C12.4793 2.09567 12.7167 2 13 2H14V1C14 0.716667 14.096 0.479 14.288 0.287C14.4793 0.0956666 14.7167 0 15 0C15.2833 0 15.5207 0.0956666 15.712 0.287C15.904 0.479 16 0.716667 16 1V2H17C17.2833 2 17.5207 2.09567 17.712 2.287C17.904 2.479 18 2.71667 18 3C18 3.28333 17.904 3.521 17.712 3.713C17.5207 3.90433 17.2833 4 17 4H16V5C16 5.28333 15.904 5.52067 15.712 5.712C15.5207 5.904 15.2833 6 15 6ZM4 14H14C14.2 14 14.35 13.9083 14.45 13.725C14.55 13.5417 14.5333 13.3667 14.4 13.2L11.65 9.525C11.55 9.39167 11.4167 9.325 11.25 9.325C11.0833 9.325 10.95 9.39167 10.85 9.525L8.25 13L6.4 10.525C6.3 10.3917 6.16667 10.325 6 10.325C5.83333 10.325 5.7 10.3917 5.6 10.525L3.6 13.2C3.46667 13.3667 3.45 13.5417 3.55 13.725C3.65 13.9083 3.8 14 4 14ZM2 8V16V2V8Z" />
                                    </svg>
                                    <p>Фото</p>
                                </div>
                                <div class="catalog__angar_prints--item">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.77778 2.22222V7.77778H6.66667V2.22222H2.22222V11.1111H6.66667V10H7.77778V15.5556H6.66667V12.2222H2.22222V17.7778H10V15.5556H11.1111V17.7778H17.7778V15.5556H20V20H0V0H20V13.3333H17.7778V7.77778H11.1111V13.3333H10V6.66667H17.7778V2.22222H7.77778Z" />
                                    </svg>
                                    <p>План</p>
                                </div>
                                <div class="catalog__angar_prints--item">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.5181 8.42977L11.0075 0.397857L10.9979 0.389346C10.7244 0.13891 10.3671 0 9.99628 0C9.62548 0 9.26814 0.13891 8.99469 0.389346L8.98512 0.397857L0.474483 8.42977C0.323951 8.56992 0.204078 8.73973 0.122419 8.9285C0.0407591 9.11726 -0.000917294 9.3209 1.53128e-05 9.52657V19.3617C1.53128e-05 19.7567 0.15693 20.1355 0.436239 20.4148C0.715548 20.6941 1.09437 20.851 1.48938 20.851H6.59576C6.99076 20.851 7.36958 20.6941 7.64889 20.4148C7.9282 20.1355 8.08512 19.7567 8.08512 19.3617V14.2553C8.08512 14.1989 8.10753 14.1447 8.14743 14.1048C8.18734 14.0649 8.24145 14.0425 8.29788 14.0425H11.7021C11.7586 14.0425 11.8127 14.0649 11.8526 14.1048C11.8925 14.1447 11.9149 14.1989 11.9149 14.2553V19.3617C11.9149 19.7567 12.0718 20.1355 12.3511 20.4148C12.6304 20.6941 13.0093 20.851 13.4043 20.851H18.5106C18.9056 20.851 19.2845 20.6941 19.5638 20.4148C19.8431 20.1355 20 19.7567 20 19.3617V9.52657C20 9.32035 19.9571 9.11638 19.8742 8.92758C19.7912 8.73878 19.67 8.56926 19.5181 8.42977ZM18.7234 19.3617C18.7234 19.4181 18.701 19.4722 18.6611 19.5121C18.6212 19.552 18.5671 19.5744 18.5106 19.5744H13.4043C13.3478 19.5744 13.2937 19.552 13.2538 19.5121C13.2139 19.4722 13.1915 19.4181 13.1915 19.3617V14.2553C13.1915 13.8603 13.0346 13.4815 12.7553 13.2022C12.476 12.9228 12.0971 12.7659 11.7021 12.7659H8.29788C7.90288 12.7659 7.52405 12.9228 7.24474 13.2022C6.96544 13.4815 6.80852 13.8603 6.80852 14.2553V19.3617C6.80852 19.4181 6.7861 19.4722 6.7462 19.5121C6.7063 19.552 6.65218 19.5744 6.59576 19.5744H1.48938C1.43295 19.5744 1.37883 19.552 1.33893 19.5121C1.29903 19.4722 1.27661 19.4181 1.27661 19.3617V9.52657C1.27655 9.49696 1.28266 9.46766 1.29457 9.44055C1.30648 9.41344 1.32391 9.38911 1.34576 9.36913L1.35533 9.36062L9.85958 1.33083C9.89834 1.29701 9.94804 1.27838 9.99948 1.27838C10.0509 1.27838 10.1006 1.29701 10.1394 1.33083L18.6447 9.36168L18.6532 9.37019C18.6752 9.39008 18.6929 9.41437 18.705 9.44148C18.7171 9.4686 18.7233 9.49795 18.7234 9.52764V19.3617Z" />
                                    </svg>
                                    <p>Разрез</p>
                                </div>
                            </div>
                            <div class="catalog__angar_prints--right">
                                <div class="catalog__angar_prints--item">
                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17 5H3C1.34 5 0 6.34 0 8V12C0 13.1 0.9 14 2 14H4V16C4 17.1 4.9 18 6 18H14C15.1 18 16 17.1 16 16V14H18C19.1 14 20 13.1 20 12V8C20 6.34 18.66 5 17 5ZM13 16H7C6.45 16 6 15.55 6 15V11H14V15C14 15.55 13.55 16 13 16ZM17 9C16.45 9 16 8.55 16 8C16 7.45 16.45 7 17 7C17.55 7 18 7.45 18 8C18 8.55 17.55 9 17 9ZM15 0H5C4.45 0 4 0.45 4 1V3C4 3.55 4.45 4 5 4H15C15.55 4 16 3.55 16 3V1C16 0.45 15.55 0 15 0Z" />
                                    </svg>
                                    <p>Печать</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row catalog__angar_item">
                    <div class="col-6 build__hidden">
                        <img src="<?=$img?>" alt="build__img" class="build__img catalog__angar">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 card__col">
                        <div class="build__img-wrap lg__hidden">
                            <img src="<?=$img?>" alt="build__img" class="build__img catalog__angar">
                        </div>

                        <div class="build__item-specs">
                        <?php if($icon_hidden):?>   
                        <?php foreach($icons as $key => $icon ):?>   
													<div class="build__item-spec catalog__spec">
													<?php $txt =$icon['works_icon_txt'] ? $icon['works_icon_txt'] :"Пустое поля " ; if($icon['works_icon']):?>	
														<img src="<?=$icon['works_icon']?>" alt="<?=$txt?>">
														<?php else:?>	
															<img  src="/wp-content/uploads/2023/05/nophoto.png" style="width: 15px;   height: auto;" alt="<?=$txt?>">
															<?php endif;?>	
														
														<p><?=$txt?></p>
													</div>
													<?php endforeach; endif;?>   

                        <p class="build__item-descr">
												<?=$desc?>
                        </p>
												<?=$short?> 
												<?php if($list_hiddin):?>
													<div class="build__item-advs">
														<?=$list_head?>
                            <ul class="build__item-advs-list">
														<?php if($list):?>
															<?php foreach($list as $key => $txt):?>
																<li class="build__item-advs-adv"><?=$txt["works_li"]?></li>
																<?php endforeach; else:?>
																	<li class="build__item-advs-adv">нет списка</li>
																<?php  endif;?>
																
															</ul>
													</div>
													<?php endif;?>
												</div>
											</div>
											
										</div>
										
									</section>
									
									<?php if($tabs_hidden):?>
										<section class="build build_catalog">
											<div class="container">
												<ul class="build__tabs slider">
													<?php if($tabs):?>
													<?php foreach($tabs as $key => $tab ):  
														$active = $key == 0 ? "build__tab_active": "";
														$head = $tab["works_tab_name"] ? $tab["works_tab_name"] : "Поля пустое";
														?>
														<li class="build__tab catalog__tab <?=$active?> "><span><?=$head?></span></li>
														<?php endforeach; else:?>
															<li class="build__tab catalog__tab build__tab_active"><span>Табы пустые</span></li>
															<?php endif;?>
														</ul>
														<div class="button-container">
															<button id="prevBtn" class="prevBtn" data-action="prev">
																<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
																	<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" stroke="1" />
																</svg>
															</button>
															<button id="nextBtn" class="nextBtn" data-action="next">
																<svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
																	<path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L15.17 12z" stroke="1" />
																</svg>
															</button>
														</div>
														
														<div class="build__wrap-tabs">
															
															<?php if($tabs):?>
																<?php foreach($tabs as $key => $tab ):  
														$active = $key == 0 ? " build__item_active": "";
														$html = $tab["works_tab_html"] ? $tab["works_tab_html"] : "Поля пустое";
														?>
												
																<div class="row justify-content-xl-center build__item <?=$active?>">
																<?=do_shortcode($html)?>																	
																	</div>
																	<?php endforeach; else:?>
																		<div class="row justify-content-xl-center build__item build__item_active">
																			Табы пустые
																		</div>
																		<?php endif;?>
										
                    
									</div>
            </div>
        </section>
				<?php endif;?>

				<?php endwhile; ?>
<?php else: ?>
	нет  поста
<?php endif; ?>

</main>
<?php get_footer(); ?>