import {$s} from './selectors.js';

export default function() {	
	let $navUl = $('.mobile-nav .menu-li');
	let $menuImg = $('.dk-nav .menu-li a');
	let $hdrBg = $('.is-transition-bg');
	let $nav = $('nav');
	

	let pullImages = () => {
		$menuImg.each((i, img) => {
			let $t = $(img);
			let $grabSrc = $t.attr('data-image');
			let $newImg = new Image();
			$($newImg).attr('src', $grabSrc).on('load', e => {
				let $el = $(e.currentTarget);
				$hdrBg.append($el);	
			})
		})
	}

	let changeImage = e => {
	
		$hdrBg.addClass('is-active')
		let $el = $(e.currentTarget);
		let $elImg = $el.attr('data-image');
		$hdrBg.css({'background-image': 'url('+ $elImg +')'})
	}

	let resetImage = e => {
		$hdrBg.removeClass('is-active')
		let $el = $(e.currentTarget);
		let $elImg = $el.attr('data-image');
		$hdrBg.css({'background-image': 'url('+ $elImg +')'})
	}

	$menuImg.on('mouseleave', resetImage)
	$menuImg.on('mouseenter', changeImage)

	$(window).on('load', pullImages);

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