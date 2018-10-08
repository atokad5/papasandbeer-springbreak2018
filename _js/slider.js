export default function() {
	let $sliderParent = $('.slider_parent');
	let $sliderBtn = $('.slider_btn');


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

	$sliderBtn.on('click', slideSlider);
}