
export default function() {
  
  let $slideTrigger = $('#faq-slideDown');
  let $faqSection = $('#faq-section');

  let $accordEl = $('.accordion-trigger');

  let slidePage = event => {
    event.preventDefault(); 
    $('html, body').animate({'scrollTop': $faqSection.offset().top + 'px'}, 500);
  }


  let displayEl = event => {
    let $t = $(event.currentTarget);
  

    if($t.parent('.topic').hasClass('is-active')) {
      $t.parent('.topic').removeClass('is-active');
      $t.next('.accordion-content').slideUp(300);
      return;
    }
    
    $accordEl.parent('.topic').removeClass('is-active')
    $accordEl.next('.accordion-content').slideUp(300);
    $t.parent('.topic').addClass('is-active')
    $t.next('.accordion-content').slideDown(300);
  }

  $('.countdown-el').countdown($('.countdown-el').attr('data-countdown'), function(event){
    if(event.strftime('%D') <= 10 ) {
      console.log('yes')
    } else {
      console.log('no')
    }
    $(this).html(event.strftime(`<div class="countdown-ticker">%D days <span>|</span> %H Hrs <span>|</span> %M Mins</div>`))
  })







  $slideTrigger.on('click', event => slidePage(event))
  $accordEl.on('click', displayEl)
}