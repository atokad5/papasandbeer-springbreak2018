export default function() {
	let $nav = $('nav')
	let $headerContent = $('.hdr-container');
	let $header = $('header,  .hdr-inner');
	let theHeight = 0;

	let calcHeight = () => {
		theHeight = $nav.outerHeight() + $headerContent.outerHeight();
	}


	let $headerMinHeight = () => {
		$header.css({
			'min-height': theHeight
		})
	}


	let resizeTimeout = null;
  const doResizeTimeout = () => {
    resizeTimeout = setTimeout(() => {
      calcHeight();
    }, 400);
  },
  doResizeHandler = () => {
    if (resizeTimeout !== null) {
    clearTimeout(resizeTimeout);
    }
    doResizeTimeout();
  };

  window.onresize = () => doResizeHandler();
	window.onLoad = calcHeight();
	calcHeight();
	window.onLoad = $headerMinHeight();
}