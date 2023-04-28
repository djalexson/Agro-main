
window.addEventListener('DOMContentLoaded', function () {
	function tabs(elem) {
		const tabs = document.querySelectorAll(`.${elem}__tab`);
		const contents = document.querySelectorAll(`.${elem}__item`);
		for (let i = 0; i < tabs.length; i++) {
				tabs[i].addEventListener('click', (e) => {
						let tabsChildren = e.target.parentElement.children
						for (let j = 0; j < tabsChildren.length; j++) {
							tabsChildren[j].classList.remove(`${elem}__tab_active`);
						}
						
						tabs[i].classList.add(`${elem}__tab_active`);
						
						let tabContentChildren = e.target.parentElement.nextElementSibling.children;
						
						
						for (let k = 0; k < tabContentChildren.length; k++) {
							tabContentChildren[k].classList.remove(`${elem}__item_active`);
						}

						contents[i].classList.add(`${elem}__item_active`);
				})
		}
}

tabs('build');

/// hamburger


});

$(function(){
	const menu = document.querySelector('.mobile__menu'),
	 menutitle = $('.nav__menu').attr("data-menu") ,
	menuMobile =`<div class="menu">
	<span class="menu__title">${menutitle}</span>	

	<div class="hamburger hamburger--menu">
		<span>&nbsp;</span>
		<span>&nbsp;</span>
		<span>&nbsp;</span>
</div>

</div>` ,
hamburger = document.querySelector('.hamburger');
$(".nav__wrap").prepend(menuMobile)


var throttle = function(type, name, obj) {
	obj = obj || window;
	var running = false;
	var func = function() {
		if (running) { return; }
		running = true;
		requestAnimationFrame(function() {
			obj.dispatchEvent(new CustomEvent(name));
			running = false;
		});
	};
	obj.addEventListener(type, func);
};


throttle("resize", "optimizedResize");
window.addEventListener("optimizedResize", function() {
	
	if (window.innerWidth < 769 ) {
		if(!$(".nav__wrap").find(".menu").hasClass('menu')){
		$(".nav__wrap").prepend(menuMobile)
	
	}
	}
	if (window.innerWidth > 768 ) {
		$( ".menu").remove()

		menu.classList.remove('mobile_active');
		$( ".nav__dropdown").removeAttr("style")
		$( ".nav__menu").removeAttr("style")
		$(".hamburger--menu").removeClass('hamburger_active');
		$(".hamburger").removeClass('hamburger_active');
		$( ".nav__dropdown").removeClass("active")
	}
});

$(document).on("click",function (e) {
	if($(e.target).attr('class') === "hamburger" || $(e.target).attr('class') === "hamburger hamburger_active"){
		hamburger.classList.toggle('hamburger_active');
		menu.classList.toggle('mobile_active');
		
	}else{
		hamburger.classList.remove('hamburger_active');
		menu.classList.remove('mobile_active');

	}
	if($(e.target).find(".nav__menu__link").hasClass('nav__menu__link--triangle')){
		$( ".nav__dropdown").slideToggle(400)
		$( ".nav__dropdown").toggleClass("active")
		
	}		
	if($(e.target).hasClass('menu')){
		$(e.target).find(".hamburger").toggleClass('hamburger_active');
		$(".nav__menu").slideToggle(400)
    
	}
	
});


});