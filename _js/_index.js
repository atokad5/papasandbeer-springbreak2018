import $ from 'jquery';
window.$ = $;
window.jQuery = $;


import hover from './hover.js';
hover();


$(window).on('load', function() {
	setTimeout(function() {
		$('body').addClass('is-ready')
	})
	setTimeout(function() {
		$('body').addClass('is-ready-er')
	}, 500)
	setTimeout(function() {
		$('body').addClass('is-gone')
	}, 2000)
	setTimeout(function() {
		$('body').addClass('is-goneer')
	}, 3000)
})

let $currentWelcomeParent = $('.sp-welcome-parent');
let $currentWelcome = $('.current-name').text();
let $spliter = $currentWelcome.split('');
let generateWrapper = () => {
	$currentWelcomeParent.html('');
	for(let i = 0; i < $spliter.length; i++) {
		$currentWelcomeParent.append(`
			<span class="letter">${$spliter[i]}</span>
		`);
	}
}

$(window).on('load', generateWrapper);