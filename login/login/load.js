    $(document).ready(function(){
                
            
            var pwd_err=false;
            var rpwd_err = false;
    
   
      $("#password").keyup(function(){
       
       var password = $("#password").val();
       if(password.length===0){
           pwd_err = true;
           $("#plabel").text("Password should not be empty!").css("color","red");
           $("#password").addClass("errorInput");
           }else if(password.length<8 || password.length>20){
                pwd_err = true;
                $("#plabel").text("Password should be 8-20 characters!").css("color","red");
                $("#password").addClass("errorInput");
           }else{
             pwd_err=false;
             $("#plabel").text("Password").css("color","#2196F3");
             $("#password").removeClass("errorInput");
           }
    });
    
    $("#rpassword").keyup(function(){
         var rpassword = $("#rpassword").val();
         var password = $("#password").val();
         if(rpassword.length===0){
           rpwd_err = true;
           $("#rplabel").text("Password should not be empty!").css("color","red");
           $("#rpassword").addClass("errorInput");
             
         }else if(rpassword!==password){
          rpwd_err = true;
           $("#rplabel").text("Passwords dont match!").css("color","red");
           $("#rpassword").addClass("errorInput");
           }else{
             rpwd_err=false;
             $("#rplabel").text("Confirm password").css("color","#2196F3");
             $("#rpassword").removeClass("errorInput");
         }
    });
    
    
       
           
        
    
    $("#submit").click(function(){
       if(pwd_err===false && rpwd_err===false){
           return true;
       } else{
           return false;
       }    
    });
    
});

 