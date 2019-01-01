import { $s } from './selectors';

export default function() {
	let $currentWelcomeParent = $('.sp-welcome-parent');
	let $currentWelcome = $('.current-name').text();
	let $spliter = $currentWelcome.split('');
	// let $urlCheckDev = window.origin === "http://localhost:3000" ? true : false;

	if($('body').hasClass('page-template-home')) {
		$('body').css({'overflow': 'hidden'})
	}


	let $lineUpSection = window.location.search;
	let $getTag = $lineUpSection.split('?');
	console.log($getTag[1])
	

	
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

			setTimeout(function() {
				$s.body.addClass('is-set');
				if($('body').hasClass('page-template-home')) {
					$('body').css({'overflow': 'auto'})
					if($getTag[1] === "lineup") {
						console.log('scrolling')
						$('html, body').animate({
							'scrollTop': $('.artist-line-up-header').offset().top - $('nav').outerHeight()
						}, 1000)


					}
				}
			})
		}, 3500)

	}

let $link = $('li').eq(1).find('a');

function actionA (event) {
	if($('body').hasClass('page-template-home')) {
		event.preventDefault();
		$('html, body').animate({
			'scrollTop': $('.artist-line-up-header').offset().top - $('nav').outerHeight()
		}, 1000)
	}
}

$link.on('click', actionA)

	$s.win.onLoad = generateWrapper();
}