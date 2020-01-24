$(document).ready(function(){
$('#login_email').on('blur',function(event){
event.preventDefault();
var url = ('Validation-login-email');
var email = $(this).val();

$.ajax({
   type:'post',
   url:url,
   data:{'email': email},
   success:function(data){
      if(data){
          
      }
   }
});

});

});