!function(n){var a={};function r(t){if(a[t])return a[t].exports;var e=a[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,r),e.l=!0,e.exports}r.m=n,r.c=a,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=1)}([function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a={win:$("window"),body:$("body"),header:$("header"),nav:$("nav"),footer:$("footer"),navOpen:!1,menuTrigger:$(".mt-trigger")};e.$s=a},function(t,e,n){"use strict";var a=u(n(2)),r=u(n(3)),o=u(n(4)),s=u(n(5)),i=u(n(6));function u(t){return t&&t.__esModule?t:{default:t}}(0,a.default)(),(0,r.default)(),(0,o.default)(),(0,s.default)(),(0,i.default)()},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var e=$(".sp-welcome-parent"),n=$(".current-name").text().split("");window.origin;console.log(window.origin),setTimeout(function(){a.$s.body.addClass("is-ready")}),setTimeout(function(){a.$s.body.addClass("is-building")},500);a.$s.win.onLoad=function(){e.html("");for(var t=0;t<n.length;t++)e.append('\n\t\t\t\t<span class="letter">'+n[t]+"</span>\n\t\t\t");setTimeout(function(){a.$s.body.addClass("is-built")},2100),setTimeout(function(){a.$s.body.addClass("is-destroy")},3e3),setTimeout(function(){a.$s.body.addClass("is-complete")},3500)}()};var a=n(0)},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".is-bg"),e=$(".lazy-image");$(window).on("load",function(){t.each(function(t,e){var n=$(e),a=n.attr("data-bg-src"),r=new Image;$(r).attr("src",a).on("load",function(){n.addClass("ready").css({"background-image":"url("+a+")"}),n.parent().addClass("bg-is-set")})}),e.each(function(t,e){var n=$(e),a=n.attr("data-lazy");n.attr("src",a),n.on("load",function(){return n.parent().addClass("is-loaded")})})})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".cta"),e=$(".hdr-cta"),n=$(".header-bg");e.mouseenter(function(){return n.css({transform:"scale(1.1)"})}),e.mouseleave(function(){return n.css({transform:"scale(1)"})}),window.onLoad=void t.each(function(t,e){var n=$(e),a=n.text().split("");n.html("").append('\n\t\t\t\t<span class="btn-text-parent">\n\t\t\t\t\t<span class="wrap_text current-btn-text"></span>\n\t\t\t\t\t<span class="wrap_text buildin-btn-text"></span>\n\t\t\t\t</span>\n\t\t\t');for(var r=0;r<a.length;r++)$(".wrap_text").append('<span class="btn-letter">'+a[r]+"</span>")})}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t=$(".mobile-nav .menu-li"),e=$(".dk-nav .menu-li a"),r=$(".is-transition-bg");$("nav");e.on("mouseleave",function(t){r.removeClass("is-active");var e=$(t.currentTarget).attr("data-image");r.css({"background-image":"url("+e+")"})}),e.on("mouseenter",function(t){r.addClass("is-active");var e=$(t.currentTarget).attr("data-image");r.css({"background-image":"url("+e+")"})}),$(window).on("load",function(){e.each(function(t,e){var n=$(e).attr("data-image"),a=new Image;$(a).attr("src",n).on("load",function(t){var e=$(t.currentTarget);r.append(e)})})});var n=function(){s.$s.menuTrigger.is(":visible")};n();var a=null,o=function(){null!==a&&clearTimeout(a),a=setTimeout(function(){n()},400)};window.onresize=function(){return o()},s.$s.menuTrigger.on("click",function(){s.$s.navOpen?(s.$s.body.removeClass("nav-is-open"),s.$s.navOpen=!1,t.removeClass("is-active")):(s.$s.body.addClass("nav-is-open"),s.$s.navOpen=!0,setTimeout(function(){return t.addClass("is-active")},50))})};var s=n(0)},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){var t,e,n,a;t=jQuery,e=t(window).scrollTop(),n=!1,a=t(".btn-svg-wrapper"),requestAnimationFrame(function t(){n&&(console.log(e),a.css({transform:"rotate("+e/20+"deg)"}),n=!1),requestAnimationFrame(t)}),t(window).on("scroll",function(){n=!0,e=t(window).scrollTop()})};n(0)}]);