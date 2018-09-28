<<<<<<< HEAD
/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});
var $s = {
	win: $('window'),
	body: $('body'),
	header: $('header'),
	nav: $('nav'),
	footer: $('footer'),
	navOpen: false,
	menuTrigger: $('.mt-trigger')
};

exports.$s = $s;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _build = __webpack_require__(2);

var _build2 = _interopRequireDefault(_build);

var _lazyload = __webpack_require__(3);

var _lazyload2 = _interopRequireDefault(_lazyload);

var _cta = __webpack_require__(4);

var _cta2 = _interopRequireDefault(_cta);

var _nav = __webpack_require__(5);

var _nav2 = _interopRequireDefault(_nav);

var _scroll = __webpack_require__(6);

var _scroll2 = _interopRequireDefault(_scroll);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _build2.default)();

(0, _lazyload2.default)();

(0, _cta2.default)();

(0, _nav2.default)();

(0, _scroll2.default)();

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $currentWelcomeParent = $('.sp-welcome-parent');
	var $currentWelcome = $('.current-name').text();
	var $spliter = $currentWelcome.split('');
	var $urlCheckDev = window.origin === "http://localhost:3000" ? true : false;

	console.log(window.origin);

	// if(!$urlCheckDev) {
	setTimeout(function () {
		_selectors.$s.body.addClass('is-ready');
	});
	setTimeout(function () {
		_selectors.$s.body.addClass('is-building');
	}, 500);
	// }


	var generateWrapper = function generateWrapper() {
		$currentWelcomeParent.html('');
		for (var i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append('\n\t\t\t\t<span class="letter">' + $spliter[i] + '</span>\n\t\t\t');
		}

		// if(!$urlCheckDev) {
		setTimeout(function () {
			_selectors.$s.body.addClass('is-built');
		}, 2100);

		setTimeout(function () {
			_selectors.$s.body.addClass('is-destroy');
		}, 3000);

		setTimeout(function () {
			_selectors.$s.body.addClass('is-complete');
		}, 3500);
		// }
	};

	// if($urlCheckDev) {
	// $s.body.addClass('is-ready')
	// $s.body.addClass('is-building')
	// $s.body.addClass('is-built')
	// $s.body.addClass('is-destroy')
	// $s.body.addClass('is-complete')
	// }

	_selectors.$s.win.onLoad = generateWrapper();
};

var _selectors = __webpack_require__(0);

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

exports.default = function () {
  var bgImage = $('.is-bg');
  var lazyImg = $('.lazy-image');

  // Lazy load background images
  var snagBgImages = function snagBgImages() {
    bgImage.each(function (i, img) {
      var $t = $(img);
      var bgSrc = $t.attr('data-bg-src');
      var imger = new Image();
      $(imger).attr('src', bgSrc).on('load', function () {
        $t.addClass('ready').css({ 'background-image': 'url(' + bgSrc + ')' });
        $t.parent().addClass('bg-is-set');
      });
    });
  };

  // Lazy load images 
  var injectSrc = function injectSrc() {
    lazyImg.each(function (i, img) {
      var $t = $(img);
      var srcVal = $t.attr('data-lazy');
      $t.attr('src', srcVal);
      $t.on('load', function () {
        return $t.parent().addClass('is-loaded');
      });
    });
  };

  $(window).on('load', function () {
    snagBgImages();
    injectSrc();
  });
};

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $cta = $('.cta');
	var $hdrCta = $('.hdr-cta');
	var $hdrEl = $('.header-bg');

	var createBtnsMarkup = function createBtnsMarkup() {

		$cta.each(function (i, btn) {
			var $t = $(btn);
			var $btnText = $t.text();
			var $splitText = $btnText.split('');

			$t.html('').append('\n\t\t\t\t<span class="btn-text-parent">\n\t\t\t\t\t<span class="wrap_text current-btn-text"></span>\n\t\t\t\t\t<span class="wrap_text buildin-btn-text"></span>\n\t\t\t\t</span>\n\t\t\t');

			for (var _i = 0; _i < $splitText.length; _i++) {
				$('.wrap_text').append('<span class="btn-letter">' + $splitText[_i] + '</span>');
			}
		});
	};

	var changeBgPosition = function changeBgPosition() {
		return $hdrEl.css({ 'transform': 'scale(1.1)' });
	};
	var changeBgPositionBack = function changeBgPositionBack() {
		return $hdrEl.css({ 'transform': 'scale(1)' });
	};

	$hdrCta.mouseenter(changeBgPosition);
	$hdrCta.mouseleave(changeBgPositionBack);
	window.onLoad = createBtnsMarkup();
};

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $navUl = $('.mobile-nav .menu-li');
	var $menuImg = $('.dk-nav .menu-li a');
	var $hdrBg = $('.is-transition-bg');
	var $nav = $('nav');

	var pullImages = function pullImages() {
		$menuImg.each(function (i, img) {
			var $t = $(img);
			var $grabSrc = $t.attr('data-image');
			var $newImg = new Image();
			$($newImg).attr('src', $grabSrc).on('load', function (e) {
				var $el = $(e.currentTarget);
				$hdrBg.append($el);
			});
		});
	};

	var changeImage = function changeImage(e) {

		$hdrBg.addClass('is-active');
		var $el = $(e.currentTarget);
		var $elImg = $el.attr('data-image');
		$hdrBg.css({ 'background-image': 'url(' + $elImg + ')' });
	};

	var resetImage = function resetImage(e) {
		$hdrBg.removeClass('is-active');
		var $el = $(e.currentTarget);
		var $elImg = $el.attr('data-image');
		$hdrBg.css({ 'background-image': 'url(' + $elImg + ')' });
	};

	$menuImg.on('mouseleave', resetImage);
	$menuImg.on('mouseenter', changeImage);

	$(window).on('load', pullImages);

	var checkifMobile = function checkifMobile() {
		var $mobileCheck = _selectors.$s.menuTrigger.is(':visible') ? true : false;
	};

	var toggleMenu = function toggleMenu() {
		if (!_selectors.$s.navOpen) {
			_selectors.$s.body.addClass('nav-is-open');
			_selectors.$s.navOpen = true;
			setTimeout(function () {
				return $navUl.addClass('is-active');
			}, 50);
		} else {
			_selectors.$s.body.removeClass('nav-is-open');
			_selectors.$s.navOpen = false;
			$navUl.removeClass('is-active');
		}
	};

	checkifMobile();

	var resizeTimeout = null;
	var doResizeTimeout = function doResizeTimeout() {
		resizeTimeout = setTimeout(function () {
			checkifMobile();
		}, 400);
	},
	    doResizeHandler = function doResizeHandler() {
		if (resizeTimeout !== null) {
			clearTimeout(resizeTimeout);
		}
		doResizeTimeout();
	};

	window.onresize = function () {
		return doResizeHandler();
	};

	_selectors.$s.menuTrigger.on('click', toggleMenu);
};

var _selectors = __webpack_require__(0);

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

exports.default = function () {
  ;(function ($) {
    var $windowOffset = $(window).scrollTop();
    var didScroll = false;
    var $svgRotate = $('.btn-svg-wrapper');

    var updateScrollState = function updateScrollState() {
      didScroll = true;
      $windowOffset = $(window).scrollTop();
    };

    var scrollTicker = function scrollTicker() {
      if (didScroll) {
        console.log($windowOffset);
        $svgRotate.css({
          'transform': 'rotate(' + $windowOffset / 15 + 'deg)'
        });
        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    };

    requestAnimationFrame(scrollTicker);
    $(window).on('scroll', updateScrollState);
  })(jQuery);
};

var _selectors = __webpack_require__(0);

/***/ })
/******/ ]);
=======
!function(n){var a={};function r(t){if(a[t])return a[t].exports;var e=a[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,r),e.l=!0,e.exports}r.m=n,r.c=a,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=1)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a={win:$("window"),body:$("body"),header:$("header"),nav:$("nav"),footer:$("footer"),navOpen:!1,menuTrigger:$(".mt-trigger")};e.$s=a},function(t,e,n){"use strict";var a=u(n(2)),r=u(n(3)),o=u(n(4)),s=u(n(5)),i=u(n(6));function u(t){return t&&t.__esModule?t:{default:t}}(0,a.default)(),(0,r.default)(),(0,o.default)(),(0,s.default)(),(0,i.default)()},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var e=$(".sp-welcome-parent"),n=$(".current-name").text().split("");window.origin;console.log(window.origin),setTimeout(function(){a.$s.body.addClass("is-ready")}),setTimeout(function(){a.$s.body.addClass("is-building")},500);a.$s.win.onLoad=function(){e.html("");for(var t=0;t<n.length;t++)e.append('\n\t\t\t\t<span class="letter">'+n[t]+"</span>\n\t\t\t");setTimeout(function(){a.$s.body.addClass("is-built")},2100),setTimeout(function(){a.$s.body.addClass("is-destroy")},3e3),setTimeout(function(){a.$s.body.addClass("is-complete")},3500)}()};var a=n(0)},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".is-bg"),e=$(".lazy-image");$(window).on("load",function(){t.each(function(t,e){var n=$(e),a=n.attr("data-bg-src"),r=new Image;$(r).attr("src",a).on("load",function(){n.addClass("ready").css({"background-image":"url("+a+")"}),n.parent().addClass("bg-is-set")})}),e.each(function(t,e){var n=$(e),a=n.attr("data-lazy");n.attr("src",a),n.on("load",function(){return n.parent().addClass("is-loaded")})})})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".cta"),e=$(".hdr-cta"),n=$(".header-bg");e.mouseenter(function(){return n.css({transform:"scale(1.1)"})}),e.mouseleave(function(){return n.css({transform:"scale(1)"})}),window.onLoad=void t.each(function(t,e){var n=$(e),a=n.text().split("");n.html("").append('\n\t\t\t\t<span class="btn-text-parent">\n\t\t\t\t\t<span class="wrap_text current-btn-text"></span>\n\t\t\t\t\t<span class="wrap_text buildin-btn-text"></span>\n\t\t\t\t</span>\n\t\t\t');for(var r=0;r<a.length;r++)$(".wrap_text").append('<span class="btn-letter">'+a[r]+"</span>")})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".mobile-nav .menu-li"),e=$(".dk-nav .menu-li a"),r=$(".is-transition-bg");$("nav");e.on("mouseleave",function(t){r.removeClass("is-active");var e=$(t.currentTarget).attr("data-image");r.css({"background-image":"url("+e+")"})}),e.on("mouseenter",function(t){r.addClass("is-active");var e=$(t.currentTarget).attr("data-image");r.css({"background-image":"url("+e+")"})}),$(window).on("load",function(){e.each(function(t,e){var n=$(e).attr("data-image"),a=new Image;$(a).attr("src",n).on("load",function(t){var e=$(t.currentTarget);r.append(e)})})});var n=function(){s.$s.menuTrigger.is(":visible")};n();var a=null,o=function(){null!==a&&clearTimeout(a),a=setTimeout(function(){n()},400)};window.onresize=function(){return o()},s.$s.menuTrigger.on("click",function(){s.$s.navOpen?(s.$s.body.removeClass("nav-is-open"),s.$s.navOpen=!1,t.removeClass("is-active")):(s.$s.body.addClass("nav-is-open"),s.$s.navOpen=!0,setTimeout(function(){return t.addClass("is-active")},50))})};var s=n(0)},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t,e,n,a,r;t=jQuery,e=t(window).scrollTop(),n=!1,a=t(".btn-svg-wrapper"),r=t(".video-card-text-transform"),requestAnimationFrame(function t(){n&&(a.css({transform:"rotate("+e/15+"deg)"}),r.css({transform:"translateY(-"+e/15+"%)"}),n=!1),requestAnimationFrame(t)}),t(window).on("scroll",function(){n=!0,e=t(window).scrollTop()})};n(0)}]);
>>>>>>> a5838ce915efb6b43555f4812b752057780690a2
