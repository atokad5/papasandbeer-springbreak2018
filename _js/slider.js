export default function() {
	let $sliderParent = $('.slider_parent');
	let $sliderBtn = $('.slider_btn');
	let $slideMt = $('.slider_area_mt');
	let $sidery = $('.slidey');

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
		$slideMt.flickity({
			pageDots: false,
			cellAlign: 'left',
			wrapAround: true
		});
	}

	if($sidery) {
		$sidery.each(function(event,index) {
			$(this).on('change.flickity', function(){
				console.log($(index).index())
			})
			
		})
	}



	$sliderBtn.on('click', slideSlider);
}