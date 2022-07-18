
$(document).ready(function()
{
    $("#adminForm").submit(function()
     {
        var inputVal= $("#uname").val();
        alert(inputVal);
        var characterReg = /^([a-zA-Z0-9]{1,})$/;
        if(!characterReg.test(inputVal))
         {
            $("#uname").after('<span class="unameMessag">Maximum 8 characters.</span>');
        }
    });
       
    $('#uname').keyup( function() 
    {
  //  $("input").css("background-color", "wheat")
        var regex = /^[0-9!@#\$%\^\&*\)\(+=._-]+$/ ;
        $('#unameMessage').html(checkStrength($('#uname').val()))  
       
        function checkStrength(username) 
        { 
           if ((username.length <= 3) || username == '' || username.match(regex)) 
           {  
             $('#unameMessage').addClass('Short')  
              $("#unameMessage").text("enter valid name!").css('color','red');
      
          }  
        else 
            {
               // alert("good");
                $('#unameMessage').addClass('strong') .css('color','green')  
                return  'look good!';
             }
        }      
            
    });
    $('#pwd').keyup(function () 
    {  
        $('#pwdMessage').html(checkStrength($('#pwd').val()))  
        console("hello");
    });
    
    function checkStrength(password) {  
       
        if (password.length < 6)
         {  
          //  $('.pwdMessage').removeClass()  
            $('#pwdMessage').addClass('Short')  
            $("#pwdMessage").text("enter password with minimum 6 characters!").css('color','red');
           /// return 'Too short'  
           //return false;
        }  
        else{
            $('#pwdMessage').addClass('strong') .css('color','green');
            return  'looks good!'
        }
}

});