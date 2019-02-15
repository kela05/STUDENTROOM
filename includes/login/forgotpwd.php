

<?php include "navbar.php"; ?>
<?php include "header.html";?>
<?php
include 'dbconn.php';
   if(isset($_POST['submit'])){
       if(!$conn){
           die("Couldn't connect".mysqli_connect_error());
       
       }
       
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       
       $query = "SELECT user_id FROM users WHERE email='$email'";
       $result = mysqli_query($conn,$query);
       if(!$result){die("Erorr procesing request");}else{
       if(mysqli_num_rows($result)>0){
          $hash =md5(uniqid(rand()));
          $query2 = "UPDATE users SET passToken='$hash' WHERE email='$email'";
         $rsl = mysqli_query($conn, $query2);
         if(!$rsl){die("Error");}
         else{
             
             $to= $email;
             $subject= 'Password reset';
             $message = "
                 Click on the link below to reset your password:
                 http://localhost/PhpProject1/resetpwd.php?email=$email&hash=$hash";
                $header="noreply@studentroom.com"."\r\n";
                 mail($to,$subject,$message,$header);
                exit(json_encode(array("status"=>1,"msg"=>'Check email')));}
       }else{
          exit(json_encode(array("status"=>0,"msg"=>'Invalid email')));
          
   }
   }
   }
   mysqli_close($conn);
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
<head>
  <meta charset="UTF-8">
  <title>SR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylee.css">

  
      <link rel="stylesheet" href="StyleSr.css">
 <style>
      
.footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
}
    
    </style>
  
</head>

<body>
  
<div class="wrapper">
    <form method="POST" action="forgotpwd.php">
    <h1>Forgot password?</h1>

    <hr class="sep"/>
    
    <div class="text-center"  id="response" style="color:#ffffff">You can reset your password here</div>
    <div class="group">
      <input type="text" name="email" id="email" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label id="label">Email</label>
    </div>
   
    <div class="btn-box">
      <button class="btn btn-submit" type="submit" name="submit" id="submit">Reset password</button>
    </div>
  </form>
</div>
     
  
    
<div class="footer"><hr><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function(){
        $("#submit").on('click',function(){
            var isfound=false;
            var email =$("#email").val();
            if(email!==""){
                $("#email").css("border","green");
                   
                $.ajax({
                     url:'forgotpwd.php',
                    method:'POST',
                    dataType:'json',
                    data:{ajax:1,email:$("#email").val() },
                    success:function(response){
                        if(!response.success){
                            $("#response").html(response.msg).css("color","red");
                            isfound=true;
                        }else {
                            $("#response").html(response.msg).css("color","green");
                             isfound=false;
                        }else
                            console.log(response);
                    },
                    fail:function(){
                        alert("Couldnt proceed request");
                    }
                    
                });
            }else{
                $("#email").css("border","red");
                isfound= false;
            }
            return isfound;
           
        });
    });
    
</script>
</body>
</html>
