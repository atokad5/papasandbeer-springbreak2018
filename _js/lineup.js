export default function() {
	let $lineupTrigger = $('.lineup-year');
	let $elementImage = $('.element-lineup');
	let $next = false;
	const toggleImage = e => {
		let $t = $(e.currentTarget);
		
		$('.copy-lineup').hide()
		$('.copy-lineup').eq($t.index()).show();
		
		if($t.hasClass('active')) return;

		$lineupTrigger.removeClass('active');
		$t.addClass('active');
		let $index = $t.index();
		$elementImage.removeClass('active-image');
		$elementImage.find('img').removeClass('is-active');
		$elementImage.eq($index).addClass('active-image');
		setTimeout(() => $elementImage.eq($index).find('img').addClass('is-active') , 20)

		
		

	}


	$lineupTrigger.on('click', toggleImage)
}