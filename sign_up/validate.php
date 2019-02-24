<?php

include '../db/dbconn.php';

if(isset($_POST['username_check'])){
    
    
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $query = "SELECT user_id FROM users WHERE  username='$username'";
    $result= mysqli_query($conn, $query);
    if(!$result){
        echo"alert('Couldn't proccess request.Try again)";
    }else{
        if(mysqli_num_rows($result)>0){
            echo'0';
        }else{
            echo '1';   
        }
    }
    exit();
    }
    
    
    
   
    if(isset($_POST['email_check'])){
    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $query = "SELECT user_id FROM users WHERE  email='$email'";
    $result= mysqli_query($conn, $query);
    if(!$result){
        echo"alert('Couldn't proccess request.Try again)";
    }else{
        if(mysqli_num_rows($result)>0){
            echo'0';
        }else{
            echo '1';   
        }
    }
    exit();
    }
    

    
    if(isset($_POST['submit'])){
        
       $username=mysqli_real_escape_string($conn,$_POST['username']);
       $email=mysqli_real_escape_string($conn,$_POST['email']);
       $password=mysqli_real_escape_string($conn,$_POST['password']);
       $password=hash("ripemd128",$password);
       $com_code = md5(uniqid(rand()));
          $qwr = "INSERT INTO users(username,email,password,token) VALUES('$username','$email','$password','$com_code')";
           $rsl = mysqli_query($conn, $qwr);
         if(!$rsl){ 
             
             echo"<script>alert('This user alrea exists');<.script>";
             exit();
         }
             else{
    
                     
                 $to = $email;
                 $subject = 'Signup|Verification';
                 $message = "
                     Thanks for signing up!
                     Your account has been created,you can login after activating your account by pressing the URL below.
                     
                    ---------------------
                     Username: '.$username'
                    
                    
                    ----------------------
                    
                    Please click the link to activate your account:
                    
                     http://localhost/studentroom/signup/email_verification.php?email=$email&com_code=$com_code";
                 $headers = 'From:noreply@studentroom.com'."\r\n";
                 if(mail($to,$subject,$message,$headers)){
                  
                 header("Location: http://localhost/studentroom/signup/signup_success.php");
                 exit();
                     }else{
                           echo "<script>alert('An error occurred!Couldn't send email,please try again.);</script>";
                      }
    
     }
        
       
        
    }
    mysqli_close($conn);
