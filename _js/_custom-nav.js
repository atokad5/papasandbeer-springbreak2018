export default function() {
  let $checker = $('body').hasClass('page-template-travel-hotel');
  let $sections = $('.added_section');
  let $navParentEl = $('.cats-nav-section');
  let $catNav = $('.cats-navEl li');
  let $windowTop = $(window).scrollTop();
  let $hasScroll = false

  if(!$checker) return;
    let $navOffset = $navParentEl.offset().top;
    let $navOffSetOg = $navParentEl.offset().top
    let $navOuterHeight = $navParentEl.outerHeight();

  
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
        if($windowTop + 10>= Math.round($el.offset().top)) {
          $catNav.find('a').removeClass('active')
          $catNav.eq($el.index()).find('a').addClass('active')
        } 
      })
      
      if($windowTop >= $navOffset) {
        $navParentEl.css({
          'position': 'fixed',
          'top': $('nav').outerHeight(),
        }).addClass('is-fixed')
      }

      else if($windowTop <= $navOffSetOg + $navOuterHeight) {
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