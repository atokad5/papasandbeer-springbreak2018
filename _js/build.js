import { $s } from './selectors';

export default function() {
	let $currentWelcomeParent = $('.sp-welcome-parent');
	let $currentWelcome = $('.current-name').text();
	let $spliter = $currentWelcome.split('');

	setTimeout(function() {
		$s.body.addClass('is-ready')
	})
	setTimeout(function() {
		$s.body.addClass('is-building')
	}, 500)


	let generateWrapper = () => {
		$currentWelcomeParent.html('');
		for(let i = 0; i < $spliter.length; i++) {
			$currentWelcomeParent.append(`
				<span class="letter">${$spliter[i]}</span>
			`);
		}

		setTimeout(function() {
			$s.body.addClass('is-built')
		}, 2100)

		setTimeout(function() {
			$s.body.addClass('is-destroy')
		}, 3000)

		setTimeout(function() {
			$s.body.addClass('is-complete')
		}, 3500)
	}

	$s.win.onLoad = generateWrapper();
}