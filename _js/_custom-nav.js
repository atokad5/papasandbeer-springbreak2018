export default function() {
  let $checker = $('body').hasClass('page-template-travel-hotel');
  let $sections = $('.added_section');
  let $catNav = $('.cats-navEl li');
  let $windowTop = $(window).scrollTop();
  let $hasScroll = false

  if($checker) {
    $sections.each((index, element) => $(element).attr('id', `section-${index}`) )
  }

  let slidePage = event => {
    event.preventDefault();
    let $t = $(event.currentTarget);
    let $index = $t.index();
    $('html, body').animate({
      'scrollTop': $('#section-'+$index).offset().top
    }, 1000)
  }



  let updateScroller = () => {
    $hasScroll = true;
    $windowTop = $(window).scrollTop();
  }


  let scrollTicker = () => {

    if($hasScroll) {  

      $sections.each( (index,element) => {
        let $el = $(element);
        // console.log($el.offset().top)
        
        // console.log($t.offset().top)
        // console.log($windowTop, Math.round($el.offset().top), index);
        if(Math.round($el.offset().top) >= $windowTop) {
          $catNav.eq($el.index()).addClass('active')
        } 
        // if(Math.round($el.offset().top) + $el.outerHeight() > $windowTop) {
        //   $catNav.eq($el.index()).removeClass('active')
        // } 


      })


      $hasScroll = false;
    }

    requestAnimationFrame(scrollTicker);
  }



  requestAnimationFrame(scrollTicker);
  $(window).on('scroll', updateScroller)

  $catNav.on('click', (event) => slidePage(event))
}