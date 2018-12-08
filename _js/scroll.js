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
    let $topContent = $("#top-content");

    let $newScroll = 0;





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
    }

    
    let scrollTicker = () => {
      if(didScroll) {
        

        if($windowOffset > $newScroll && $windowOffset > $('header').outerHeight()) {

          $("nav").css({
            "transform": "translateY(-100%)"
          })

        
            $('.cats-nav-section').css({
              'transform': 'translateY(-'+ $('nav').outerHeight() +'px)'
            })
          

          $newScroll = $windowOffset;
        } else {
          $("nav").css({
            "transform": "translateY(0%)"
          })
          $('.cats-nav-section').css({
            'transform': 'translateY(0%)'
          })
          $newScroll = $windowOffset;
        }

        if($('body').hasClass('page-template-home')) {
          if($windowOffset >= $topContent.offset().top - ($('nav').outerHeight() + 80)) {
            $('nav').addClass('is-scrolled')
            
          } else {
            $('nav').removeClass('is-scrolled');
          }
        }


        

        
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