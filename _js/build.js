export default function() {
	let $body = $('body');
	let $currentWelcomeParent = $('.sp-welcome-parent');
	let $currentWelcome = $('.current-name').text();
	let $spliter = $currentWelcome.split('');

	setTimeout(function() {
		$body.addClass('is-ready')
	})
	setTimeout(function() {
		$body.addClass('is-building')
	}, 500)

	$(window).on('load', function() {

		setTimeout(function() {
			$body.addClass('is-built')
		}, 2100)

		setTimeout(function() {
			$body.addClass('is-destroy')
		}, 3000)

		setTimeout(function() {
			$body.addClass('is-complete')
		}, 3500)

	})

	let generateWrapper = () => {
		$currentWelcomeParent.html('');
		for(let i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append(`
				<span class="letter">${$spliter[i]}</span>
			`);
		}
	}

	$(window).on('load', generateWrapper);
}