export default function() {
  let $imgTrigger = $('.image-expand');

  let showBigImage = event => {
    let $t = $(event.currentTarget);
    let imageSource = $t.find('img').attr('src');
    console.log(imageSource, 'working');
  }

  $imgTrigger.on('click', showBigImage)
}