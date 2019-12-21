var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	paginationClickable: true,
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: 2500,
	autoplayDisableOnInteraction: false,
	loop:true
});

//var scrollFunc = function(e) {
//	e = e || window.event;
//	var os = document.querySelectorAll(".bar-ce-left");
//	var Ofset = document.querySelectorAll(".bar-ce-left")[0].offsetHeight;
//	// console.log(Ofset);
//	var scH = document.documentElement.scrollTop;
//	// console.log(scH);
//	var scre = window.innerHeight;
//	// console.log(scre);
//	var ul = document.querySelectorAll(".bar-img-anm")[0];
//	var ui = document.querySelectorAll(".bar-img-anm")[0].offsetTop+Ofset+450;
//	var scollH = scH + scre;
//	
//	if (e.wheelDelta) { //判断浏览器IE，谷歌滑轮事件
//		if (e.wheelDelta > 0) { //当滑轮向上滚动时
//			// console.log(scollH);
//			// console.log(e.wheelDelta);
//		}
//		if (e.wheelDelta < 0) { //当滑轮向下滚动时
//			// console.log(e.wheelDelta);
//			// console.log(scollH);
//			ul.style.width=0;
//			ul.style.opacity = 0;
//			for (var i = 0; i < 4; i++) {
//				let cs = i;
//				if (os[i].offsetTop <= scollH) {
//					os[i].style.transition = "all 1.5s";
//					os[cs].style.transitionDelay = cs / 4 + "s";
//					os[i].style.transform = "translateY(-150px)";
//					os[i].style.display = "block";
//					os[i].style.opacity = "1";
//				}
//			}
//			if(ui<= scollH){
//				ul.style.opacity = 1;
//				ul.style.width=90+"%";
//				ul.style.transformOrigin = "50% 50%";
//				ul.style.transition = "all 1.5s";
//				ul.style.transform = "scale(1)";
//			}
//			var ui_2 =document.querySelectorAll(".bar-img-anm_1 img")[0];
//			var ui_1 = document.querySelectorAll(".bar-img-anm_1 img")[0].offsetTop+Ofset+450;
//			console.log(document.querySelectorAll(".bar-img-anm_1 img")[0]);
//			ui_2.style.opacity =0;
//			ui_2.style.transform = "scale(-1)";
//			if(ui_1<= scollH){
//				ui_2.style.opacity = 1;
//				// ui_2.style.width=90+"%";
//				ui_2.style.transform = "scale(1)";
//				ui_2.style.transition = "all 1.5s";
//				
//			}
//			// console.log(ui);
//		}
//	}
//}
// //给页面绑定滑轮滚动事件
// if (document.addEventListener) { //火狐使用DOMMouseScroll绑定
// 	document.addEventListener('DOMMouseScroll', scrollFunc, false);
// }
// //其他浏览器直接绑定滚动事件
// window.onmousewheel = document.onmousewheel = scrollFunc;
