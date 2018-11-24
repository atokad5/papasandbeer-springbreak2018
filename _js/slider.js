export default function() {
	let $sliderParent = $('.slider_parent');
	let $sliderBtn = $('.slideTr');
	let $slideMt = $('.slider_area_mt');
	let $sidery = $('.slidey');
	let $newB = $('.is-btn');

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


	$newB.on('click', changeSlide)
	$sliderBtn.on('click', slideSlider);
}