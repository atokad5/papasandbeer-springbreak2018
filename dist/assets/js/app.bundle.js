!function(n){var a={};function s(t){if(a[t])return a[t].exports;var e=a[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,s),e.l=!0,e.exports}s.m=n,s.c=a,s.d=function(t,e,n){s.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},s.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return s.d(e,"a",e),e},s.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},s.p="",s(s.s=1)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a={win:$("window"),body:$("body"),header:$("header"),nav:$("nav"),footer:$("footer"),navOpen:!1,menuTrigger:$(".mt-trigger")};e.$s=a},function(t,e,n){"use strict";var a=i(n(2)),s=i(n(3)),o=i(n(4)),r=i(n(5));function i(t){return t&&t.__esModule?t:{default:t}}(0,a.default)(),(0,s.default)(),(0,o.default)(),(0,r.default)()},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var e=$(".sp-welcome-parent"),n=$(".current-name").text().split(""),a="http://localhost:3000"===window.origin;console.log(window.origin),a||(setTimeout(function(){s.$s.body.addClass("is-ready")}),setTimeout(function(){s.$s.body.addClass("is-building")},500));a&&(s.$s.body.addClass("is-ready"),s.$s.body.addClass("is-building"),s.$s.body.addClass("is-built"),s.$s.body.addClass("is-destroy"),s.$s.body.addClass("is-complete")),s.$s.win.onLoad=function(){e.html("");for(var t=0;t<n.length;t++)e.append('\n\t\t\t\t<span class="letter">'+n[t]+"</span>\n\t\t\t");a||(setTimeout(function(){s.$s.body.addClass("is-built")},2100),setTimeout(function(){s.$s.body.addClass("is-destroy")},3e3),setTimeout(function(){s.$s.body.addClass("is-complete")},3500))}()};var s=n(0)},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".is-bg"),e=$(".lazy-image");$(window).on("load",function(){t.each(function(t,e){var n=$(e),a=n.attr("data-bg-src"),s=new Image;$(s).attr("src",a).on("load",function(){n.addClass("ready").css({"background-image":"url("+a+")"}),n.parent().addClass("bg-is-set")})}),e.each(function(t,e){var n=$(e),a=n.attr("data-lazy");n.attr("src",a),n.on("load",function(){return n.parent().addClass("is-loaded")})})})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".cta");window.onLoad=void t.each(function(t,e){var n=$(e),a=n.text().split("");n.html("").append('\n\t\t\t\t<span class="btn-text-parent">\n\t\t\t\t\t<span class="wrap_text current-btn-text"></span>\n\t\t\t\t\t<span class="wrap_text buildin-btn-text"></span>\n\t\t\t\t</span>\n\t\t\t');for(var s=0;s<a.length;s++)$(".wrap_text").append('<span class="btn-letter">'+a[s]+"</span>")})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".mobile-nav .menu-li"),e=$(".dk-nav .menu-li a"),a=$(".header-bg"),n=$("nav");window.onLoad=void e.each(function(t,e){var n=$(e);(new Image).src=n.attr("data-image")});n.on("mouseleave",function(t){var e=$(t.currentTarget).attr("data-bg-src");a.css({"background-image":"url("+e+")"})}),e.on("mouseover",function(t){return function(t){console.log("suh");var e=$(t.currentTarget),n=e.attr("data-image");console.log(e.attr("data-image")),a.css({"background-image":"url("+n+")"})}(t)});var s=function(){i.$s.menuTrigger.is(":visible")};s();var o=null,r=function(){null!==o&&clearTimeout(o),o=setTimeout(function(){s()},400)};window.onresize=function(){return r()},i.$s.menuTrigger.on("click",function(){i.$s.navOpen?(i.$s.body.removeClass("nav-is-open"),i.$s.navOpen=!1,t.removeClass("is-active")):(i.$s.body.addClass("nav-is-open"),i.$s.navOpen=!0,setTimeout(function(){return t.addClass("is-active")},50))})};var i=n(0)}]);