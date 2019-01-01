export default function() {
  let $videoSrc = $('.video-trigger').attr('data-video-src');
  let $videoParent = $('.video-trigger');
  let $videoContainer = $('#video-container');
  let $body = $('body');


  const toggleVideo = () => {
    $body.toggleClass('video-showing');

    if(!$body.hasClass('video-showing')) {
      $videoContainer.html('');
    } else {
      $videoContainer.html(`
        <iframe src="${$videoSrc}?autoplay=1&rel=0" frameborder="0"></iframe>
      `);
    }

  }

  $videoParent.on('click', toggleVideo);
}