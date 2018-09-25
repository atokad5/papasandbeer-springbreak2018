import {$s} from './selectors.js';

export default function() {	
	let $navUl = $('.mobile-nav .menu-li');
	let $menuImg = $('.dk-nav .menu-li a');
	let $hdrBg = $('.is-transition-bg');
	let $nav = $('nav');
	// const pullImages = () => {
	// 	$menuImg.each((i,img) => {
	// 		let $t = $(img);
	// 		let myI = new Image();
	// 		$(myI).attr('src', $t.attr('data-image'));
	// 	})
	// }

	// window.onLoad = pullImages();

	// let changeBg = e => {
	// 	console.log('suh')
	// 	let $t = $(e.currentTarget);
	// 	let $imgSrc = $t.attr('data-image');
		
	// 	$hdrBg.css({
	// 		'opacity': '0'
	// 	})

	// 	setTimeout(function() {
	// 		$hdrBg.css({
	// 			'opacity': 1,
	// 			'background-image': 'url('+ $imgSrc +')'
	// 		})
	// 	}, 0)

	// }

	// $menuImg.on('mouseover', e => changeBg(e));

	let checkifMobile = () => {
		let $mobileCheck = $s.menuTrigger.is(':visible') ? true : false;
	}

	const toggleMenu = () => {
		if(!$s.navOpen) {
			$s.body.addClass('nav-is-open');
			$s.navOpen = true;
			setTimeout( () => $navUl.addClass('is-active'), 50 )
		} else {
			$s.body.removeClass('nav-is-open');
			$s.navOpen = false;
			$navUl.removeClass('is-active');
		}

	}


	checkifMobile();

	let resizeTimeout = null;
  const doResizeTimeout = () => {
    resizeTimeout = setTimeout(() => {
      checkifMobile();
    }, 400);
  },
  doResizeHandler = () => {
    if (resizeTimeout !== null) {
    clearTimeout(resizeTimeout);
    }
    doResizeTimeout();
  };

  window.onresize = () => doResizeHandler();
  
	$s.menuTrigger.on('click', toggleMenu);
}