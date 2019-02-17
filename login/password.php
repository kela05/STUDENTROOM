<?php

include 'dbconn.php';

     if(isset($_POST['submit'])){
         
         $hash=mysqli_real_escape_string($conn,$_POST['hash']);
         $email= mysqli_real_escape_string($conn,$_POST['email']);
         $password=mysqli_real_escape_string($conn,$_POST['password']);
         $password=hash("ripemd128",$password);
         $qwr="SELECT user_id FROM users WHERE email='$email' AND passToken='$hash'";
         $result=mysqli_query($conn,$qwr);
                  if(!$result){
             echo 'Error!Try again.';
         }else{
                 if(mysqli_num_rows($result)==1){           
             $row= mysqli_fetch_assoc($result);
             $id=$row['user_id'];
             $query="UPDATE users SET password='$password', passToken='' WHERE user_id='$id'";
             $rsl=mysqli_query($conn,$query);
             if(!$rsl){
                 die("Error occurred.Please try again");
             }else{
                 if(mysqli_affected_rows($conn)>0){
                     header("Location: changed.php");
                 }else
                     echo "<script>alert('An error occurred.Please try again');</script?";
             }
                 }
         }
     }
     mysqli_close($conn)

?>