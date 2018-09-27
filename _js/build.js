import { $s } from './selectors';

export default function() {
	let $currentWelcomeParent = $('.sp-welcome-parent');
	let $currentWelcome = $('.current-name').text();
	let $spliter = $currentWelcome.split('');
	let $urlCheckDev = window.origin === "http://localhost:3000" ? true : false;

	console.log(window.origin)

	// if(!$urlCheckDev) {
		setTimeout(function() {
			$s.body.addClass('is-ready')
		})
		setTimeout(function() {
			$s.body.addClass('is-building')
		}, 500)
	// }


	let generateWrapper = () => {
		$currentWelcomeParent.html('');
		for(let i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append(`
				<span class="letter">${$spliter[i]}</span>
			`);
		}

		// if(!$urlCheckDev) {
			setTimeout(function() {
				$s.body.addClass('is-built')
			}, 2100)

			setTimeout(function() {
				$s.body.addClass('is-destroy')
			}, 3000)

			setTimeout(function() {
				$s.body.addClass('is-complete')
			}, 3500)
		// }
	}

	// if($urlCheckDev) {
		// $s.body.addClass('is-ready')
		// $s.body.addClass('is-building')
		// $s.body.addClass('is-built')
		// $s.body.addClass('is-destroy')
		// $s.body.addClass('is-complete')
	// }

	$s.win.onLoad = generateWrapper();
}