export default function() {
	let $cta = $('.cta');
	let $hdrCta = $('.hdr-cta');
	let $hdrEl = $('.header-bg');

	let createBtnsMarkup = () => {

		$cta.each((i, btn ) => {
			let $t = $(btn);
			let $btnText = $t.text();
			let $splitText = $btnText.split('');

			$t.html('').append(`
				<span class="btn-text-parent">
					<span class="wrap_text current-btn-text"></span>
					<span class="wrap_text buildin-btn-text"></span>
				</span>
			`)

			for( let i = 0; i < $splitText.length; i++ ) {
				$t.find('.wrap_text').append(`<span class="btn-letter">${$splitText[i]}</span>`);
			}

		})
	}

	const changeBgPosition = () => $hdrEl.css({'transform': 'scale(1.1)'})
	const changeBgPositionBack = () => $hdrEl.css({'transform': 'scale(1)'})

	$hdrCta.mouseenter(changeBgPosition)
	$hdrCta.mouseleave(changeBgPositionBack)
	window.onLoad = createBtnsMarkup();
}