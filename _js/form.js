export default function() {
   let $url ='https://hooks.zapier.com/hooks/catch/2061966/0m0ios/';
   let $form = $('.form');
   let $firstname = $('#firstname');
   let $lastname = $('#lastname');
   let $email = $('#email');
   let $msg = $('#message');
   let $body = $('body');
   
   const sendForm = e => {
     e.preventDefault();
     $.ajax({
       url: $url,
       data: {
        'querystring__firstname': $firstname.val(),
        'querystring__lastname': $lastname.val(),
        'querystring__email': $email.val(),
        'querystring__message': $msg.val()
       },
       success: function(data) {
         $form.hide();
         console.log(data.status)
        if(data.status === "success") {
          
          $msg.text('You have successfully signed up!') 
        } else {
          $msg.text('uhoh! Something went wrong, try again!')
        }

       }
     })
   }


   $form.on('submit', e => sendForm(e))
  
}