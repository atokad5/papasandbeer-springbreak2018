export default function() {
	let $lineupTrigger = $('.lineup-year');
	let $elementImage = $('.element-lineup');

	const toggleImage = e => {
		let $t = $(e.currentTarget);

		if($t.hasClass('active')) return;

		$lineupTrigger.removeClass('active');
		$t.addClass('active');
		$elementImage.removeClass('active-image');
		$elementImage.eq($t.index()).addClass('active-image');

	}


	$lineupTrigger.on('click', toggleImage)
}