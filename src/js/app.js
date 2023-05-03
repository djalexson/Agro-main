window.addEventListener('DOMContentLoaded', function () {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b623e0f (contacts page)
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
<<<<<<< HEAD
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
=======
	function tabs(elem) {
		const tabs = document.querySelectorAll(`.${elem}__tab`);
		const contents = document.querySelectorAll(`.${elem}__item`);
		for (let i = 0; i < tabs.length; i++) {
			tabs[i].addEventListener('click', (e) => {
				let tabsChildren = e.target.parentElement.children
				for (let j = 0; j < tabsChildren.length; j++) {
					tabsChildren[j].classList.remove(`${elem}__tab_active`);
=======
>>>>>>> b623e0f (contacts page)
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

<<<<<<< HEAD
	}
>>>>>>> fa18ee1 (add angar page)

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

<<<<<<< HEAD
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

=======
					socialsHTML = e.social.map((el, x) => `
					<div class="header__contacs">
						<a href="${e.sociallins[x]}" class="${e.socialClass[x]}">
							<p>${el}</p>
						</a>
					</div>`).join('');
				}

			});
		}

>>>>>>> b623e0f (contacts page)
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
<<<<<<< HEAD
=======
$(function () {
	const menu = document.querySelector('.mobile__menu'),
		menutitle = $('.nav__menu').attr("data-menu"),
		menuMobile = `<div class="menu">
	<span class="menu__title">${menutitle}</span>	

	<div class="hamburger hamburger--menu">
		<span>&nbsp;</span>
		<span>&nbsp;</span>
		<span>&nbsp;</span>
</div>

</div>` ,
		hamburger = document.querySelector('.hamburger');
	$(".nav__wrap").prepend(menuMobile)


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
>>>>>>> fa18ee1 (add angar page)
=======
>>>>>>> b623e0f (contacts page)
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
<<<<<<< HEAD

<<<<<<< HEAD
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
=======
	throttle("resize", "optimizedResize");
	window.addEventListener("optimizedResize", function () {
=======

			if (hamburger) {
				document.addEventListener("click", e => {
					if (e.target.classList.contains("hamburger")) {
						e.target.classList.toggle('hamburger_active');
						mobileMenu.classList.toggle('mobile_active');
>>>>>>> b623e0f (contacts page)

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



<<<<<<< HEAD
	});
>>>>>>> fa18ee1 (add angar page)



=======
>>>>>>> b623e0f (contacts page)
///// Angar tab
const angarItems = document.querySelector('.catalog__angar_prints--left');
const angarItem = angarItems.querySelectorAll('.catalog__angar_prints--item');

for (let i = 0; i < angarItem.length; i++) {
	angarItem[i].addEventListener('click', function () {
		let current = document.querySelectorAll('.catalog__angar_prints--item_active');
		current[0].className = current[0].className.replace(' catalog__angar_prints--item_active', '');
		this.className += ' catalog__angar_prints--item_active';
	})

}