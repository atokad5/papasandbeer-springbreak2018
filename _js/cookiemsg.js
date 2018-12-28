import Cookies from 'js-cookie';

export default function() {

 
  
  let $spacer = $('.spacingElement');
  let $nav = $('.ck-msg');
  let $closeMsg = $('.ck-btn');
  let cookieMessenger = $('.ck-el');
  let $mobileToggle = $('.mt-trigger');
  // option to clear all cookies
  let $checkUrl = window.location.search;
  let $splitUrl = $checkUrl.split('=');
  

  if($splitUrl[1] === 'true') {
    cookieMessenger.each((index, element) => {
      let $t = $(element);
      let $cookieCheck = $t.attr('data-cookie');
      Cookies.remove($cookieCheck);
    })
  } 

  // check to see if cookie exists. If so, hide specific element
  let cookieMonster = () => {
    cookieMessenger.each((index,  element) => {
      let $t = $(element);
      let $cookieType = $t.attr('data-cookie');
      if(Cookies.get($cookieType) === 'true') {
        $t.hide();
      }
    })
  }
  // create cookie when user closes
  // also hide displayed message
  let closeTheMessage = event => {
    let $t = $(event.currentTarget);
    let $cookieType = $t.parent('.ck-el').attr('data-cookie');
    $t.parent('.ck-el').hide();
    Cookies.set($cookieType, 'true');
    setHeight();
  }

  cookieMonster();


  let setHeight = () => {
    $spacer.css({'height': $nav.outerHeight() +'px'})
  }


  setHeight();

  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

  let checkMobile = () =>  { 
    if($mobileToggle.is(':visible')) {
      console.log('yes')
      $('.ck-msg').detach();
      $('.cookie-inner').append($nav)
    } else { 
      $('.ck-msg').detach();
      $('.cookie-msg').append($nav)
    }
  }



  let reSetHeight = debounce(function() {
    setHeight();
    checkMobile();
  }, 250);



  

  checkMobile();
  $closeMsg.on('click', closeTheMessage)
  $(window).on('resize',  reSetHeight)
}