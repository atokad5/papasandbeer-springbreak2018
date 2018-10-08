export default function() {
  let $question = $('.question');
  let $number = 150;

  let slideAnswer = e => {
    let $t = $(e.currentTarget);

    // don't execute if already triggered
    if($t.hasClass('is-active')) return;

    $question.removeClass('is-active');
    $question.next('.answer').slideUp($number);
    $t.addClass('is-active');
    $t.next('.answer').slideDown($number);
  }

  $question.on('click', slideAnswer)
}