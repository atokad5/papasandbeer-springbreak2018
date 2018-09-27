import {$s} from './selectors.js';

export default function() {
  ;(function($){ 
    let $windowOffset = $(window).scrollTop();
    let didScroll = false;  
    let $svgRotate = $('.btn-svg-wrapper');




    let updateScrollState = () => {
      didScroll = true;
      $windowOffset = $(window).scrollTop();
    }




    let scrollTicker = () => {
      if(didScroll) {
        console.log($windowOffset)
        $svgRotate.css({
          'transform': 'rotate('+ $windowOffset/15 +'deg)'
        })
        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }


    
    requestAnimationFrame(scrollTicker)
    $(window).on('scroll', updateScrollState);
  })(jQuery);
}