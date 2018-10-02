export default function() {
  let $videoSrc = $('.video-container').attr('data-video-src');
  let $videoParent = $('.video-trigger');
  let $videoContainer = $('#video-container');
  let $body = $('body');


  const toggleVideo = () => {
    console.log('suh')
    $body.toggleClass('video-showing');

    if(!$body.hasClass('video-showing')) {
      $videoContainer.html('');
    } else {
      $videoContainer.append(`
        <iframe src="${$videoSrc}?autoplay=1&rel=0" frameborder="0"></iframe>
      `)
    }

  }

  $videoParent.on('click', toggleVideo)
}