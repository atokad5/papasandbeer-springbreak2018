export default function() {
  let $question = $('.faq-card__faq-panel');
  let $faqCard = $('.faq-card__subject');
  let $number = 150;

  let slideAnswer = e => {
    let $t = $(e.currentTarget);
    if($t.hasClass('is-active')) {
      $question.find('.answer').slideUp($number);
      $question.removeClass('is-active');
      return;
    };

    $question.removeClass('is-active');
    $question.find('.answer').slideUp($number);
    $t.addClass('is-active');
    $t.find('.answer').slideDown($number);
  }

  let grabFaq = e => {
    let $card = $(e.currentTarget);
    if($card.hasClass('is-active')) {
      $card.siblings('.faq-card__faq-panel').slideUp($number);
      $card.removeClass('is-active');
      $card.parents('.faq-card__element').removeClass('is-active');
      return;
    };

    $faqCard.removeClass('is-active');
    $faqCard.siblings('.faq-card__faq-panel').slideUp($number);
    $faqCard.parents('.faq-card__element').removeClass('is-active');
    $card.addClass('is-active');
    $card.siblings('.faq-card__faq-panel').slideDown($number);
    $card.parents('.faq-card__element').addClass('is-active');

  }


  $question.on('click', slideAnswer);
  $faqCard.on('click', grabFaq)
}