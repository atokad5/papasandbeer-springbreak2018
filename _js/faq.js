export default function() {
  let $question = $('.question');
  let $faqCard = $('.faq-card__subject');
  let $number = 150;

  let slideAnswer = e => {
    let $t = $(e.currentTarget);
    if($t.hasClass('is-active')) return;

    $question.removeClass('is-active');
    $question.next('.answer').slideUp($number);
    $t.addClass('is-active');
    $t.next('.answer').slideDown($number);
  }

  let grabFaq = e => {
    console.log('suh')
    let $card = $(e.currentTarget);
    if($card.hasClass('is-active')) return;

    $faqCard.removeClass('is-active');
    $faqCard.siblings('.faq-card__faq-panel').slideUp();
  
    $card.addClass('is-active');
    $card.siblings('.faq-card__faq-panel').slideDown();


  }


  $question.on('click', slideAnswer);
  $faqCard.on('click', grabFaq)
}