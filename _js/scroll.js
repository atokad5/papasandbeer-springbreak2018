import {$s} from './selectors.js';

export default function() {
  ;(function($){ 
    let $windowOffset = $(window).scrollTop();
    let didScroll = false;  
    let $svgRotate = $('.btn-svg-wrapper');
    let $recapCard = $('.video-card-text-transform');




    let updateScrollState = () => {
      didScroll = true;
      $windowOffset = $(window).scrollTop();
    }


    let recapElements = () => {
      $svgRotate.css({
        'transform': 'rotate('+ $windowOffset/15 +'deg)'
      })
      $recapCard.css({
        'transform': 'translateY(-' + $windowOffset/15 +'%)'
      })
    }


    let scrollTicker = () => {
      if(didScroll) {
        
        // home page
        recapElements();

        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }


    
    requestAnimationFrame(scrollTicker)
    $(window).on('scroll', updateScrollState);
  })(jQuery);
}