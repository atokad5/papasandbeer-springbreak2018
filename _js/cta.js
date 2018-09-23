export default function() {
	let $cta = $('.cta');


	let createBtnsMarkup = () => {

		$cta.each((i, btn ) => {
			let $t = $(btn);
			let $btnText = $t.text();
			let $splitText = $btnText.split('');

			console.log($splitText);

			$t.html('').append(`
				<span class="btn-text-parent">
					<span class="wrap_text current-btn-text"></span>
					<span class="wrap_text buildin-btn-text"></span>
				</span>
			`)

			for( let i = 0; i < $splitText.length; i++ ) {
				$('.wrap_text').append(`<span class="btn-letter">${$splitText[i]}</span>`);
			}

		})
	}


	window.onLoad = createBtnsMarkup();
}