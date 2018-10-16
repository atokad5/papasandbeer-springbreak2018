export default function() {
	let $sliderParent = $('.slider_parent');
	let $sliderBtn = $('.slider_btn');
	let $slideMt = $('.slider_area_mt');

	$sliderParent.flickity({
		cellAlign: 'left',
		pageDots: false,
		prevNextButtons: false,
		wrapAround: true
	});


	let slideSlider = e => {
		let $btn = $(e.currentTarget);
		if($btn.hasClass('next')) {
			$sliderParent.flickity('next');
		} else {
			$sliderParent.flickity('previous')
		}
	}

	if($slideMt) {
		$slideMt.flickity();
	}

	$sliderBtn.on('click', slideSlider);
}