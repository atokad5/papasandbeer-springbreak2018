import {$s} from './selectors.js';

export default function() {	
	let $navUl = $('.mobile-nav .menu-li');
	let $menuImg = $('.dk-nav .menu-li a');
	let $hdrBg = $('.header-bg');
	let $nav = $('nav');
	const pullImages = () => {
		$menuImg.each((i,img) => {
			let $t = $(img);
			let myI = new Image();
			myI.src = $t.attr('data-image');
		})
	}

	window.onLoad = pullImages();

	let changeBg = e => {
		console.log('suh')
		let $t = $(e.currentTarget);
		let $imgSrc = $t.attr('data-image');
		console.log($t.attr('data-image'));
		$hdrBg.css({
			'background-image': 'url('+ $imgSrc +')'
		})
	}

	let resetBg = e => {
		let $imgOldSrc = $(e.currentTarget).attr('data-bg-src');
		$hdrBg.css({
			'background-image': 'url('+ $imgOldSrc +')'
		})
	}
	$nav.on('mouseleave', resetBg)
	$menuImg.on('mouseover', e => changeBg(e));

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