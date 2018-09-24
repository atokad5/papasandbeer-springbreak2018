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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _build = __webpack_require__(2);

var _build2 = _interopRequireDefault(_build);

var _lazyload = __webpack_require__(4);

var _lazyload2 = _interopRequireDefault(_lazyload);

var _cta = __webpack_require__(5);

var _cta2 = _interopRequireDefault(_cta);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(0, _build2.default)();

(0, _lazyload2.default)();

(0, _cta2.default)();

/***/ }),
/* 1 */,
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

	setTimeout(function () {
		_selectors.$s.body.addClass('is-ready');
	});
	setTimeout(function () {
		_selectors.$s.body.addClass('is-building');
	}, 500);

	var generateWrapper = function generateWrapper() {
		$currentWelcomeParent.html('');
		for (var i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append('\n\t\t\t\t<span class="letter">' + $spliter[i] + '</span>\n\t\t\t');
		}

		setTimeout(function () {
			_selectors.$s.body.addClass('is-built');
		}, 2100);

		setTimeout(function () {
			_selectors.$s.body.addClass('is-destroy');
		}, 3000);

		setTimeout(function () {
			_selectors.$s.body.addClass('is-complete');
		}, 3500);
	};

	_selectors.$s.win.onLoad = generateWrapper();
};

var _selectors = __webpack_require__(6);

/***/ }),
/* 3 */,
/* 4 */
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
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});

exports.default = function () {
	var $cta = $('.cta');

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

	window.onLoad = createBtnsMarkup();
};

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
	value: true
});
var $s = {
	win: $('window'),
	body: $('body'),
	header: $('header'),
	footer: $('footer')
};

exports.$s = $s;

/***/ })
/******/ ]);