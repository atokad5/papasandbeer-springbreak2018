export default function() {
	let $s = {
		header: $('header'),
		mouseY: 0,
		mouseX: 0,
		movingElements: $('[data-move]')
	}

	let trackMouse = e => {
		$s.mouseY = e.clientY;
		$s.mouseX = e.clientX;
		
		$s.movingElements.animate({
			'transform': 'translate('+ $s.mouseX/900 + '%,' + $s.mouseY/1000  +'%)',
			'transition': 'all 500ms ease'
		})	

	}

	$s.header.on('mousemove', trackMouse)

}