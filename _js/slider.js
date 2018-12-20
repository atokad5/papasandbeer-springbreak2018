export default function() {
	let $sliderParent = $('.slider_parent');
	let $sliderBtn = $('.slideTr');
	let $slideMt = $('.slider_area_mt');
	let $newB = $('.is-btn');
	

	// slider for venue page
	let $venueSliderDay = $('.images-day');
	let $venueSliderNight = $('.images-night');
	let $menuTrigger = $('.mt-trigger');
	let $countGo = 0;
	let $snaggyType = $('.snaggy-type')

	//day button
	let $dayBtn = $('.content-day .is-btn');
	let $nightBtn = $('.content-night .is-btn');

	function checkGroup() {
		if($menuTrigger.is(':visible')) {
			$countGo = 1;
		} else {
			$countGo = 2;
		}
	
	}

	if($('body').hasClass('page-template-venue')) {
		$('body').addClass('day');
	}
	
	

	function showDaySlide() {
		$venueSliderDay.flickity({
			groupCells: $countGo,
			pageDots: false,
			prevNextButtons: false,
			wrapAround: true
		});
	}

	function showNightSlide() {
		$venueSliderNight.flickity({
			groupCells: $countGo,
			pageDots: false,
			prevNextButtons: false,
			wrapAround: true
		});
	}

	function swapSlides() {
		let $t = $(this);

		$snaggyType.removeClass('active')
		$t.addClass('active');

		if($t.hasClass('night')) {
			$venueSliderDay.flickity('destroy');
			$('.images-day').hide();
			$('.content-day').hide();
			$('.images-night').show();
			$('.content-night').show();
			$('body').removeClass('day')
			$('body').addClass('night')
			setTimeout(function() {
				showNightSlide()
			}, 100)
			
		} else {
			$venueSliderNight.flickity('destroy');
			$('.images-day').show();
			$('.content-day').show();
			$('.images-night').hide();
			$('.content-night').hide();
			$('body').removeClass('night')
			$('body').addClass('day')
			setTimeout(function() {
				showDaySlide()
				
			}, 100)
		}
	}



	$snaggyType.on('click', swapSlides)

	$dayBtn.on('click', function() {
		let $dayEl = $('.images-day');
		if($(this).hasClass('next')) {
			$dayEl.flickity('next');
		} else {
			$dayEl.flickity('previous');
		}
	})

	$nightBtn.on('click', function() {
		let $nightEl = $('.images-night');
		if($(this).hasClass('next')) {
			$nightEl.flickity('next');
		} else {
			$nightEl.flickity('previous');
		}
	})
	
	
	
	


	function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };


	// example
	checkGroup();
	showDaySlide();
  let updateDay = debounce(function() {
		if($('body').hasClass('day')) {
			showDaySlide();
		} else {
			showNightSlide()
		}
		checkGroup();		
		// }
  },250);
  


	// slider for venue page end

	$sliderParent.flickity({
		cellAlign: 'left',
		pageDots: false,
		prevNextButtons: false,
		wrapAround: true
	});


	$(window).on('load', function() {
		$slideMt.each(function() {
			let $t = $(this);
			let $newBox = $t.find('.arrow-box');
			let $btns = $t.find('.flickity-button');
			$btns.detach();
			setTimeout(function() {
				$newBox.append($btns)
			})
				// $btns.each(function() {
				// let $b = $(this);
				// console.log($b)
				// $newBox.append($b)

				// })

		
		})
	})

	let slideSlider = e => {
		let $btn = $(e.currentTarget);
		if($btn.hasClass('next')) {
			$sliderParent.flickity('next');
		} else {
			$sliderParent.flickity('previous')
		}
	}

	let changeSlide = e => {
		let $btn = $(e.currentTarget);
		let $sliderParentEl = $btn.parents('.inner').find('.slider_area_mt');
		if($btn.hasClass('next')) {
			$sliderParentEl.flickity('next')
		} else {
			$sliderParentEl.flickity('previous')
		}
	}

	if($slideMt) {
		$slideMt.flickity({
			pageDots: false,
			cellAlign: 'left',
			wrapAround: true
		});
	}


	$(window).on('resize', updateDay)
	$newB.on('click', changeSlide)
	$sliderBtn.on('click', slideSlider);
}