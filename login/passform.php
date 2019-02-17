<?php

include 'dbconn.php';
   if(isset($_POST['email'])){
      
       
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
             echo"1";
             $to= $email;
             $subject= 'Password reset';
             $message = "
                 Click on the link below to reset your password:

                 http://localhost/PhpProject1/resetpwd.php?email=$email&hash=$hash";
                $header="noreply@studentroom.com"."\r\n";
                 mail($to,$subject,$message,$header);
                }
       }else{
          echo'0';
          
   }
   }
   }else{
       header("Location: forgotpwd.php");
   }
   mysqli_close($conn);


