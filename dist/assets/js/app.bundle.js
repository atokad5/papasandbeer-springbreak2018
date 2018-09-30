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

var _lineup = __webpack_require__(7);

var _lineup2 = _interopRequireDefault(_lineup);

var _slider = __webpack_require__(8);

var _slider2 = _interopRequireDefault(_slider);

var _header = __webpack_require__(9);

var _header2 = _interopRequireDefault(_header);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _build2.default)();

(0, _lazyload2.default)();

(0, _cta2.default)();

(0, _nav2.default)();

(0, _scroll2.default)();

(0, _lineup2.default)();

(0, _slider2.default)();

(0, _header2.default)();

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

	if (!$urlCheckDev) {
		setTimeout(function () {
			_selectors.$s.body.addClass('is-ready');
		});
		setTimeout(function () {
			_selectors.$s.body.addClass('is-building');
		}, 500);
	}

	var generateWrapper = function generateWrapper() {
		$currentWelcomeParent.html('');
		for (var i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append('\n\t\t\t\t<span class="letter">' + $spliter[i] + '</span>\n\t\t\t');
		}

		if (!$urlCheckDev) {
			setTimeout(function () {
				_selectors.$s.body.addClass('is-built');
			}, 2100);

			setTimeout(function () {
				_selectors.$s.body.addClass('is-destroy');
			}, 3000);

			setTimeout(function () {
				_selectors.$s.body.addClass('is-complete');
			}, 3500);
		}
	};

	if ($urlCheckDev) {
		_selectors.$s.body.addClass('is-ready');
		_selectors.$s.body.addClass('is-building');
		_selectors.$s.body.addClass('is-built');
		_selectors.$s.body.addClass('is-destroy');
		_selectors.$s.body.addClass('is-complete');
	}

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
				$t.find('.wrap_text').append('<span class="btn-letter">' + $splitText[_i] + '</span>');
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
    var $recapCard = $('.video-card-text-transform');
    var $imageView = $('.is-reveal-sleeve-img-group');
    var $contentElements = $('.content-area p');
    var $checkHeader = $('.content-area h1');
    var $checkMiniHeader = $('.content-area h2');
    var $sectionCta = $('.section-cta');
    var $hr = $('.hr-splitter');
    var $miniSplitter = $('.mini-spliter');

    // content area 


    $.fn.inView = function () {
      var win = $(window);
      var obj = $(this);
      var scrollPosition = win.scrollTop();
      var visibleArea = win.scrollTop() + win.height();
      var objEndPos = obj.offset().top + obj.outerHeight();
      return visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false;
    };

    var checkImgView = function checkImgView($imageElement) {
      $imageElement.each(function (i, img) {
        var $t = $(img);
        if ($t.inView()) {
          $t.parent().addClass('in-view');
        }
      });
    };

    var checkElement = function checkElement($element) {
      $element.each(function (i, element) {
        var $t = $(element);
        if ($t.inView()) {
          $t.addClass('in-view');
        }
      });
    };

    var updateScrollState = function updateScrollState() {
      didScroll = true;
      $windowOffset = $(window).scrollTop();
    };

    var recapElements = function recapElements() {
      $svgRotate.css({
        'transform': 'rotate(' + $windowOffset / 15 + 'deg)'
      });
      $recapCard.css({
        'transform': 'translateY(-' + $windowOffset / 15 + '%)'
      });
    };

    var scrollTicker = function scrollTicker() {
      if (didScroll) {

        // home page
        recapElements();
        checkImgView($imageView);
        checkElement($hr);
        checkElement($contentElements);
        checkElement($checkHeader);
        checkElement($checkMiniHeader);
        checkElement($sectionCta);
        checkElement($miniSplitter);

        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    };

    requestAnimationFrame(scrollTicker);
    $(window).on('scroll', updateScrollState);
  })(jQuery);
};

var _selectors = __webpack_require__(0);

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $lineupTrigger = $('.lineup-year');
	var $elementImage = $('.element-lineup');

	var toggleImage = function toggleImage(e) {
		var $t = $(e.currentTarget);

		if ($t.hasClass('active')) return;

		$lineupTrigger.removeClass('active');
		$t.addClass('active');
		var $index = $t.index();
		$elementImage.removeClass('active-image');
		$elementImage.find('img').removeClass('is-active');
		$elementImage.eq($index).addClass('active-image');
		setTimeout(function () {
			return $elementImage.eq($index).find('img').addClass('is-active');
		}, 20);
	};

	$lineupTrigger.on('click', toggleImage);
};

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $sliderParent = $('.slider_parent');
	var $sliderBtn = $('.slider_btn');

	$sliderParent.flickity({
		cellAlign: 'left',
		pageDots: false,
		prevNextButtons: false,
		wrapAround: true
	});

	var slideSlider = function slideSlider(e) {
		var $btn = $(e.currentTarget);
		if ($btn.hasClass('next')) {
			$sliderParent.flickity('next');
		} else {
			$sliderParent.flickity('previous');
		}
	};

	$sliderBtn.on('click', slideSlider);
};

/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $nav = $('nav');
	var $headerContent = $('.hdr-container');
	var $header = $('header,  .hdr-inner');
	var theHeight = 0;

	var calcHeight = function calcHeight() {
		theHeight = $nav.outerHeight() + $headerContent.outerHeight();
	};

	var $headerMinHeight = function $headerMinHeight() {
		$header.css({
			'min-height': theHeight
		});
	};

	var resizeTimeout = null;
	var doResizeTimeout = function doResizeTimeout() {
		resizeTimeout = setTimeout(function () {
			calcHeight();
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
	window.onLoad = calcHeight();
	calcHeight();
	window.onLoad = $headerMinHeight();
};

/***/ })
/******/ ]);