import $ from 'jquery';
window.$ = $;
window.jQuery = $;


var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
  // relativeInput: true
});


$(window).on('load', function() {
	$('body').addClass('is-ready')
})