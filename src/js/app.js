window.addEventListener('DOMContentLoaded', function () {
	let mobNav = () => {
		const doc = document.querySelectorAll(".header--col-5");
		let mobDATA = [];

		[...doc].forEach(e => {
			if (!e.classList.contains("header__logo")) {
				if (e.classList.contains("header__price")) {
					let price = {
						src: e.querySelector("img").src,
						alt: e.querySelector("img").alt,
						txt: e.querySelector("p").textContent,
					};
					mobDATA.push(price);
				}

				if (e.classList.contains("header__phones")) {
					let phone = [];
					let phonelins = [];
					e.querySelectorAll("a").forEach(elem => {
						phone.push(elem.textContent);
						phonelins.push(elem.href);
					});

					let phones = {
						phone: phone,
						phonelins: phonelins,
					};
					mobDATA.push(phones);
				}

				if (e.classList.contains("header__social")) {
					let social = [];
					let sociallins = [];
					let socialClass = [];
					e.querySelectorAll("a").forEach(elem => {
						social.push(elem.querySelector("p").textContent);
						socialClass.push(elem.className);
						sociallins.push(elem.href);
					});

					let socials = {
						social: social,
						sociallins: sociallins,
						socialClass: socialClass,
					};
					mobDATA.push(socials);
				}

				if (e.classList.contains("header__walb")) {
					let walb = {
						btnC: e.querySelector("button").textContent,
						btnClass: e.querySelector("button").className,
					};
					mobDATA.push(walb);
				}
			}
		});

		let src4 = '',
			alt4 = '',
			txt4 = '',
			btn4Class = '',
			btn4C = '',
			socialsHTML = '',
			phonesHTML = '';
		let mobNavH = '';
		if (mobDATA[0].src && mobDATA) {
			mobDATA.forEach(e => {
				if (e.src) src4 = e.src;
				if (e.alt) alt4 = e.alt;
				if (e.txt) txt4 = e.txt;
				if (e.btnClass) btn4Class = e.btnClass;
				if (e.btnC) btn4C = e.btnC;
				if (e.phone && e.phonelins) {
					phonesHTML = e.phone.map((el, x) => `<a href="${e.phonelins[x]}" class="phonetrack">${el}</a>`).join('');
				}

				if (e.social && e.sociallins && e.socialClass) {

					socialsHTML = e.social.map((el, x) => `
					<div class="header__contacs">
						<a href="${e.sociallins[x]}" class="${e.socialClass[x]}">
							<p>${el}</p>
						</a>
					</div>`).join('');
				}

			});
		}

		if (mobNavH.length === 0) {
			mobNavH = `
			<div class="mobile__menu">
			<div class="header__price mobile__item">
			<img src="${src4}" alt="${alt4}">
			<p>${txt4}</p>
			</div>
			<div class="header__phones mobile__item">
			${phonesHTML}
			</div>
				<div class="header__social mobile__item">
					${socialsHTML}
				</div>
				<button class="${btn4Class} btn_mobile mobile__item">
					${btn4C}
					</button>
					</div>
					<div class="hamburger">
					<span>&nbsp;</span>
					<span>&nbsp;</span>
					<span>&nbsp;</span>
					</div>
					`;
		}

		return mobNavH;
	};

	const mQuery = window.matchMedia('(max-width: 768px)');
	let mobileMenu = "",
		hamburger = "";
	const headerRow = document.querySelector('.header__row');
	function MobileResize(e) {
		//   // Check if the media query is true
		if (e.matches) {
			headerRow.insertAdjacentHTML('beforeend', mobNav());
			hamburger = document.querySelector('.hamburger');
			mobileMenu = document.querySelector('.mobile__menu');

			if (hamburger) {
				document.addEventListener("click", e => {
					if (e.target.classList.contains("hamburger")) {
						e.target.classList.toggle('hamburger_active');
						mobileMenu.classList.toggle('mobile_active');

					} else {
						mobileMenu.classList.remove('mobile_active');
						hamburger.classList.remove('hamburger_active');

					}

				}

				)
			}


		} else {
			if (hamburger) {

				hamburger.remove();
			}
			if (mobileMenu) {
				mobileMenu.remove();
			}
		}
	}
	//// Set up event listener 
	mQuery.addEventListener('change', MobileResize)
	MobileResize(mQuery)
	function tabs(elem) {
		const tabsin = document.querySelectorAll("." + elem);
		if (tabsin) {
			tabsin.forEach((e, c) => {
				const tab = document.querySelectorAll(`.${elem}__tabs`);
				const content = document.querySelectorAll(`.${elem}__wrap-tabs`);
				const tabs = tab[c].getElementsByTagName("li");
				const contents = content[c].querySelectorAll(`.${elem}__item`);
				Array.from(tabs).forEach((el, i) => {
					el.setAttribute("data-items", i);
					el.addEventListener("click", (e) => {
						const dataAttr = e.target.dataset.items;
						for (let j = 0; j < tabs.length; j++) {
							tabs[j].classList.remove(`${elem}__tab_active`);
							contents[j].classList.remove(`${elem}__item_active`);
						}
						tabs[dataAttr].classList.add(`${elem}__tab_active`);
						contents[dataAttr].classList.add(`${elem}__item_active`);
					});
				});


			});
		}
	}

	tabs("build");


	const sliders = document.querySelectorAll('.slider');
	const prevBtns = document.querySelectorAll('.prevBtn');
	const nextBtns = document.querySelectorAll('.nextBtn');

	let touchStartX = 0;
	let touchEndX = 0;
	let isTransitioning = false;
	let slideIndexes = [];
	if (sliders) {
		sliders.forEach((slider, index) => {
			const prevBtn = prevBtns[index];
			const nextBtn = nextBtns[index];
			let slideIndex = 0;
			slideIndexes[index] = slideIndex;

			// Обработчик нажатия на кнопку
			function handleButtonClick(event) {
				if (isTransitioning) return;

				const action = event.target.dataset.action;
				if (action === 'prev') {
					// Прокрутка слайдера влево
					scrollSlider(-1);
				} else if (action === 'next') {
					// Прокрутка слайдера вправо
					scrollSlider(1);
				}
			}

			// Обработчик начала касания
			function handleTouchStart(event) {
				touchStartX = event.touches[0].clientX;
			}

			// Обработчик окончания касания
			function handleTouchEnd(event) {
				touchEndX = event.changedTouches[0].clientX;

				const touchDiff = touchStartX - touchEndX;

				if (touchDiff > 0 && touchDiff > 100) {
					// Прокрутка слайдера вправо
					scrollSlider(1);
				} else if (touchDiff < 0 && touchDiff < -100) {
					// Прокрутка слайдера влево
					scrollSlider(-1);
				}
			}

			// Функция для прокрутки слайдера
			function scrollSlider(direction) {
				const slides = slider.querySelectorAll('li');
				const slideWidth = slides[0].offsetWidth;
				const visibleSlides = Math.floor(slider.offsetWidth / slideWidth);
				const maxSlideIndex = Math.max(0, slides.length - visibleSlides);
				slideIndexes[index] += direction;
				slideIndexes[index] = Math.max(0, Math.min(slideIndexes[index], maxSlideIndex));
				const targetScroll = slideIndexes[index] * slideWidth;

				isTransitioning = true;
				slider.style.scrollBehavior = 'smooth';
				slider.scrollTo({
					left: targetScroll,
					behavior: 'smooth'
				});

				setTimeout(() => {
					handleTransitionEnd();
				}, 100);
			}

			// Обработчик события transitionend
			function handleTransitionEnd() {
				const slides = slider.querySelectorAll('li');
				const slideWidth = slides[0].offsetWidth;
				const maxSlideIndex = Math.max(0, slides.length - Math.floor(slider.offsetWidth / slideWidth));

				if (prevBtn != null && nextBtn != null) {
					prevBtn.classList.remove('disabled');
					nextBtn.classList.remove('disabled');

					if (slideIndexes[index] === 0) {
						prevBtn.classList.add('disabled');
					}

					if (slideIndexes[index] === maxSlideIndex) {
						nextBtn.classList.add('disabled');
					}
				}

				isTransitioning = false;
				slider.style.scrollBehavior = 'auto';
			}

			// Добавляем обработчики событий для кнопок и касания
			if (prevBtn != null) prevBtn.addEventListener('click', handleButtonClick);
			if (nextBtn != null) nextBtn.addEventListener('click', handleButtonClick);
			if (slider != null) {
				slider.addEventListener('touchstart', handleTouchStart);
				slider.addEventListener('touchend', handleTouchEnd);
				// slider.addEventListener('transitionend', handleTransitionEnd);
			}
			handleTransitionEnd();
			var throttle = function (type, name, obj) {
				obj = obj || window;
				var running = false;
				var func = function () {
					if (running) { return; }
					running = true;
					requestAnimationFrame(function () {
						obj.dispatchEvent(new CustomEvent(name));
						running = false;
					});
				};
				obj.addEventListener(type, func);
			};


			throttle("resize", "optimizedResize");
			window.addEventListener("optimizedResize", function () {

				if (window.innerWidth < 1200) {
					handleTransitionEnd();
				}
			});

		});
	};
});

//////////  Swiper 

function swiper(elem) {
	const swiperEl = document.querySelector(`.${elem}`);
	Object.assign(swiperEl, {
		slidesPerView: 1,
		spaceBetween: 10,
		pagination: {
			clickable: true,
		},
		breakpoints: {
			"@0.00": {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			"@0.75": {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			"@1.00": {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			"@1.50": {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		},
	});

	swiperEl.initialize();
}
if (document.querySelector('.mySwiper_1')) {
	swiper('mySwiper_1');
	swiper('mySwiper_2');
	swiper('mySwiper_3');
	swiper('mySwiper_4');
	swiper('mySwiper_5');
	swiper('mySwiper_6');
}


///// Angar tab

const angarTabs = () => {
	const angarItems = document.querySelector('.catalog__angar_prints--left');
	const angarItem = angarItems.querySelectorAll('.catalog__angar_prints--item');
	const img = document.querySelector('.catalog__angar');

	for (let i = 0; i < angarItem.length; i++) {
		angarItem[i].addEventListener('click', function () {
			let current = document.querySelectorAll('.catalog__angar_prints--item_active');
			current[0].className = current[0].className.replace(' catalog__angar_prints--item_active', '');
			this.className += ' catalog__angar_prints--item_active';


			if (angarItem[i].classList.contains('catalog__angar_prints--item_active') && (angarItem[i].id === "photo")) {
				img.src = 'img/build_1.jpg';
			}
			if (angarItem[i].classList.contains('catalog__angar_prints--item_active') && (angarItem[i].id === "plan")) {
				img.src = 'img/angar_1.jpg';
			}
			if (angarItem[i].classList.contains('catalog__angar_prints--item_active') && (angarItem[i].id === "saw")) {
				img.src = 'img/angar_3.jpg';
			}
		})
	}
}

if (document.querySelector('.catalog__angar_prints--left')) {
	angarTabs();
}

//////  Cards
const items = document.querySelectorAll('.cards__item');

window.addEventListener('resize', () => {
	let width = window.innerWidth;

	if (width <= 768 && width > 576) {
		items.forEach((item, index) => {
			if (index > 7) {
				item.style.display = 'none';
			}
		})
	}

	if (width > 768) {
		items.forEach((item, index) => {
			if (index > 7) {
				item.style.display = 'block';
			}
		})
	}

	if (width > 0 && width <= 576) {
		items.forEach((item, index) => {
			if (index > 3 && index <= 7) {
				item.style.display = 'none';
			}
		})
	}

	if (width > 576 && width <= 768) {
		items.forEach((item, index) => {
			if (index > 3 && index <= 7) {
				item.style.display = 'block';
			}
		})
	}
})

///////// Menu

function menu() {
	const list = document.querySelector('.catalog__list');

	list.insertAdjacentHTML('afterbegin', `
		<div class="accordion accordion-flush" id="accordionExample">
		<div class="accordion-item">
			<a href="#" class="accordion-header" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse"
					data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					АНГАРЫ
				</button>
			</a>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					СЕЛЬХОЗТЕХНИКА
				</button>
			</h2>
			<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
				data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<ul class="catalog__list_hide">
						<li class="catalog__item"><a href="#">Бороны</a></li>
						<li class="catalog__item"><a href="#">Модернизированный УАЗ</a></li>
						<li class="catalog__item"><a href="#">Опрыскиватели</a></li>
						<li class="catalog__item"><a href="#">Подвоз жидкости, ЖКУ, КАС</a></li>
						<li class="catalog__item"><a href="#">Прочая сельхозтехника</a></li>
						<li class="catalog__item"><a href="#">Разбрасыватели удобрений</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#collapseThree" aria-expanded="false"
					aria-controls="collapseThree">
					Запчасти и комплектующие
				</button>
			</h2>
			<div id="collapseThree" class="accordion-collapse collapse"
				aria-labelledby="headingThree" data-bs-parent="#accordionExample">
				<div class="accordion-body">
					<ul class="catalog__list_hide">
						<li class="catalog__item"><a href="#">Для вентиляторных опрыскивателей</a>
						</li>
						<li class="catalog__item"><a href="#">Для разбрасывателей минеральных
								удобрений</a>
						</li>
						<li class="catalog__item"><a href="#">Для штанговых опрыскивателей</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<a href="#" class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#collapseFour" aria-expanded="false"
					aria-controls="collapseFour">
					УСЛУГИ
				</button>
			</a>
		</div>
	</div>
	`)
}

menu();

/////// Photo popup
$(document).ready(function () {
	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});
});