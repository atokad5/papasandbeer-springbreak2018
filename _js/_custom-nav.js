export default function() {
  let $checker = $('body').hasClass('page-template-travel-hotel');
  let $sections = $('.added_section');
  let $navParentEl = $('.cats-nav-section');
  let $catNav = $('.cats-navEl li');
  let $windowTop = $(window).scrollTop();
  let $hasScroll = false

  if(!$checker) return;

  let $navOffset = $navParentEl.offset().top;
  let $navOffSetOg = Math.round($navParentEl.offset().top)
  let $navOuterHeight = $navParentEl.outerHeight();

  $(window).on('load', () => {
    $navOffset = $navParentEl.offset().top;
    $navOffSetOg = Math.round($navParentEl.offset().top)
    $navOuterHeight = $navParentEl.outerHeight();
  })


  $sections.each((index, element) => $(element).attr('id', `section-${index}`) )
  
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
    $navOffset = $navParentEl.offset().top
  }

  let scrollTicker = () => {
    if($hasScroll) {  
      $sections.each( (index,element) => {
        let $el = $(element);
        if($windowTop + 30>= Math.round($el.offset().top)) {
          $catNav.find('a').removeClass('active')
          $catNav.eq($el.index()).find('a').addClass('active')
        } 
      })

      let $he = $windowTop + Math.round($('nav').outerHeight());


      if($windowTop + $('nav').outerHeight() >= $navOffset) {
        $navParentEl.css({
          'position': 'fixed',
          'top': $('nav').outerHeight(),
        }).addClass('is-fixed')
      }
      
      if($he <= $navOffSetOg) {
        $navParentEl.css({
          'position': 'absolute',
          'top': $navOffSetOg ,
        }).removeClass('is-fixed')
      }

      $hasScroll = false;
    }
    requestAnimationFrame(scrollTicker);
  }



  requestAnimationFrame(scrollTicker);
  $(window).on('scroll', updateScroller)
  $catNav.on('click', (event) => slidePage(event))
}