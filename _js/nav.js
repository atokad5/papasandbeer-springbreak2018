import {$s} from './selectors.js';

export default function() {	

	const toggleMenu = () => {
		if(!$s.navOpen) {
			$s.body.addClass('nav-is-open');
			$s.navOpen = true;
		} else {
			$s.body.removeClass('nav-is-open');
			$s.navOpen = false;
		}
	}

	$s.menuTrigger.on('click', toggleMenu);
}