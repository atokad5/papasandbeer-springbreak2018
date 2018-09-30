import {$s} from './selectors.js';

export default function() {
  ;(function($){ 
    let $windowOffset = $(window).scrollTop();
    let didScroll = false;  
    let $svgRotate = $('.btn-svg-wrapper');
    let $recapCard = $('.video-card-text-transform');
    let $imageView = $('.is-reveal-sleeve-img-group');
    let $contentElements = $('.content-area p');
    let $checkHeader = $('.content-area h1');
    let $checkMiniHeader = $('.content-area h2');
    let $sectionCta = $('.section-cta');
    let $hr = $('.hr-splitter');
    let $miniSplitter = $('.mini-spliter');


    // content area 




    $.fn.inView = function(){
      var win = $(window);
      var obj = $(this);
      var scrollPosition = win.scrollTop();
      var visibleArea = win.scrollTop() + win.height() ;
      var objEndPos = (obj.offset().top + obj.outerHeight());
      return(visibleArea >= objEndPos && scrollPosition <= objEndPos ? true : false)
    };


    let checkImgView = $imageElement => {
      $imageElement.each((i, img) => {
        let $t = $(img);
        if($t.inView()) {
          $t.parent().addClass('in-view');
        }
      })
    }

    let checkElement = $element => {
      $element.each((i, element) => {
        let $t = $(element)
        if($t.inView()) {
          $t.addClass('in-view')
        }
      })

      
    }


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
        checkImgView($imageView);
        checkElement($hr);
        checkElement($contentElements);
        checkElement($checkHeader);
        checkElement($checkMiniHeader);
        checkElement($sectionCta);
        checkElement($miniSplitter);

        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }


    
    requestAnimationFrame(scrollTicker)
    $(window).on('scroll', updateScrollState);
  })(jQuery);
}