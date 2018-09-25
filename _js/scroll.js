import {$s} from './selectors.js';

export default function() {
  ;(function($){ 

    let didScroll = false;




    let updateScrollState = () => {
      didScroll = true;
      $windowOffset = $window.scrollTop();
    }




    let scrollTicker = () => {
      if(didScroll) {


        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }


    
    requestAnimationFrame(scrollTicker)
    $s.win.on('scroll', updateScrollState);
  })(jQuery);
}