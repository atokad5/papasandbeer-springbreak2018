export default function() {
  let $slideTrigger = $('#faq-slideDown');
  let $faqSection = $('#faq-section');

  let slidePage = event => {
    event.preventDefault(); 
    $('html, body').animate({'scrollTop': $faqSection.offset().top + 'px'}, 500);
  }

  $slideTrigger.on('click', event => slidePage(event))

}