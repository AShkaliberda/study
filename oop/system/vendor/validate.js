$(document).ready(function(){

  $('#email').blur(function(){
      var value = $(this).val();

      $.ajax({
          type:'POST',
          url:'../../models/check_email.php',
          data:'email='+value,
          dataType: 'html',
          beforeSend: function () {
            $('#submit').attr ("disabled", "disabled");
		},
          success:function(msg){

            if(msg == 'valid'){
              $('#error').html('<font color="green">Этот Email можно использовать.</font>');
              email = value;
              $('#submit').removeAttr ("disabled");
            }else{
              $('#error').html('<font color="red">Этот Email уже занят.</font>');
            }
          }
        });
    });
});
