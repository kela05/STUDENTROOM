
<?php
include 'dbconn.php';
if(!$conn){
    die("Connection error: ".mysqli_connect_error());
}
     function valid($data){
                    $data=trim(stripslashes(htmlspecialchars($data)));
                    return $data;
                }
 
     
     if(isset($_POST['submit'])){
         $username = valid($_POST['username']);
         $email = valid($_POST['email']);
         $password =valid($_POST['password']);
         $query = "SELECT * FROM users WHERE username='$username'";
         $res =mysqli_query($conn,$query);
         if(mysqli_num_rows($res)>0){
             $err_username= "error";
             echo "<script>window.onload(alert('Username exists!Try another.'));</script>";
         }
         
         
         $query2 = "SELECT * FROM users WHERE email='$email'";
         $res2 =mysqli_query($conn,$query2);
         if(mysqli_num_rows($res2)>0){
             echo "<script>window.onload(alert('Email exists!Try another.'));</script>";
             $err_email="Error";
         }
         
       if(!isset($err_email)&&!isset($err_username)){
           $token= hash("ripemd128", $password);
         $com_code = md5(uniqid(rand()));
         $qwr = "INSERT INTO users(username,email,password,token) VALUES('$username','$email','$token','$com_code')";
         $rsl = mysqli_query($conn, $qwr);
         if(!$rsl) { 
             
             $error = "exists";}
             else{
    header("Location: http://localhost/PhpProject1/success.php");
   
                 $to = $email;
                 $subject = 'Signup|Verification';
                 $message = "
                     Thanks for signing up!
                     Your account has been created,you can login after activating your account by pressing the URL below.
                     
                    ---------------------
                     Username: '.$username'
                     Password: '.$password'
                    
                    ----------------------
                    
                    Please click the link to activate your account:
                    
                     http://localhost/PhpProject1/verification.php?email=$email&com_code=$com_code";
                 $headers = 'From:noreply@studentroom.com'."\r\n";
                 mail($to,$subject,$message,$headers);
                
             }
       }
         }
    
     
     
     mysqli_close($conn);
?>
