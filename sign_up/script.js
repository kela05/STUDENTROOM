$(document).ready(function(){
                
            var name_err=false;
            var email_err= false;
            var pwd_err=false;
            var rpwd_err = false;
             
    $("#username").keyup(function(){
       var username = $("#username").val();
       var pattern =/[^a-zA-Z0-9_]/;
        if(username===""){
            name_err=true;
            $("#ulabel").text("Username should not be empty!").css("color","red");
            $("#username").addClass("errorInput");
            
        }else if(username.length<6 || username.length>20){
            name_err=true;
             $("#ulabel").text("Username should be 6-20 characters!").css("color","red");
             $("#username").addClass("errorInput");
            
        }else if(pattern.test(username)){
             name_err=true;
             $("#ulabel").text("Username allows only letters,numbers and _ !").css("color","red");
             $("#username").addClass("errorInput");
            
        }else{
             name_err=false;
            $("#ulabel").text("Username").css("color","#2196F3");
            $("#username").removeClass("errorInput");
                }
            });
            
            
        
   
    
    $("#email").keyup(function(){
        var email =$("#email").val();
        var regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
         if(email.length===0){
             email_err=true;
             $("#elabel").text("Email should not be empty").css("color","red");
             $("#email").addClass("errorInput");
         }else if(!regex.test(email)){
             email_err=true;
              $("#elabel").text("Email is invalid").css("color","red");
              $("#email").addClass("errorInput");
         }else{
             
            email_err=false;
            $("#elabel").text("Email").css("color","#2196F3");
            $("#email").removeClass("errorInput");
                }
            });
         
    
    
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
    
    
    $("#username").on('blur',function(){
        var username=$("#username").val();
        if(username!==''){
            $.post('validate.php',{
                username_check:1,
                username:username
            }, function(data){
                if(data==='0'){
                   $("#ulabel").text("Username already exists!").css("color","red");
                   name_err=true;
                }else if(data==='1'){
                    $("#ulabel").text('Username').css("color","#2196F3");
                    name_err=false;
                }
            });
        }
        
});
       
           
    
    $("#email").on('blur',function(){
        var email=$("#email").val();
        
        if(email!==''){
            $.post('validate.php',{
                email_check:1,
                email:email
            }, function(data){
                if(data==='0'){
                    $("#elabel").text("Email already exists!").css("color","red");
                   email_err=true;
                }else if(data==='1'){
                    $("#elabel").text('Email').css("color","#2196F3");
                    email_err=false;
                }
            });
        }
        
});
       
        
    
    $("#submit").click(function(){
       
       if(name_err===true || email_err===true || pwd_err===true || rpwd_err===true){
         
       return false;
         
       }else{
                
        return true;
      
       }
      	
        
    });
          
          
          
           
   
    
});

 

