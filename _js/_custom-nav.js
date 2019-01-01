export default function() {
  let $checker = $('body').hasClass('page-template-travel-hotel');
  let $sections = $('.added_section');
  let $navParentEl = $('.cats-nav-section');
  let $catNav = $('.cats-navEl li');
  let $windowTop = $(window).scrollTop();
  let $hasScroll = false;

  // don't execute if not needed
  if(!$checker) return;

  // create dynamic offsets per page
  let $navOffset = $navParentEl.offset().top;
  let $navOffSetOg = Math.round($navParentEl.offset().top)
  let $navOuterHeight = $navParentEl.outerHeight();

  // update offets when page has loaded
  $(window).on('load', () => {
    $navOffset = $navParentEl.offset().top;
    $navOffSetOg = Math.round($navParentEl.offset().top)
    $navOuterHeight = $navParentEl.outerHeight();
  })

  // Created dynamic ids for each section 
  $sections.each((index, element) => $(element).attr('id', `section-${index}`) )
  
  // slide page to specific trigger section 
  let slidePage = event => {
    event.preventDefault();
    let $t = $(event.currentTarget);
    let $index = $t.index();
    $('html, body').animate({
      'scrollTop': $('#section-'+$index).offset().top
    }, 1000)
  }

  // update user behavior 
  let updateScroller = () => {
    $hasScroll = true;
    $windowTop = $(window).scrollTop();
    $navOffset = $navParentEl.offset().top
  }

  // trigger scroll events 
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
          'top': $('nav').outerHeight(),
        }).addClass('is-fixed')
      }
      
      if($he <= $navOffSetOg) {
        $navParentEl.css({
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