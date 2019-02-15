
<?php include "navbar.php"; ?>
<?php include "header.html";?>
<?php  include "dbconn.php"?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Verification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="welcome.css">
  <link rel="stylesheet" href="StyleSr.css">
  
  <style>
      h1{
          margin-top: 100px;
          margin-left: 50px;
          color:white;
      }
  </style>
    </head>
    <body>
        <?php
        if(!$conn){
    die("Connection error: ".mysqli_connect_error());
}
     function valid($data){
                    $data=trim(stripslashes(htmlspecialchars($data)));
                    return $data;
                }
                
      if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['com_code']) && !empty($_GET['com_code'])){
    // Verify data
    $email = mysqli_real_escape_string($conn,valid($_GET['email'])); 
    $com_code = mysqli_real_escape_string($conn,$_GET['com_code']); 
      $qwry = "SELECT user_id FROM users WHERE email='$email' AND token='$com_code' AND active=0";           
    $search = mysqli_query($conn,"SELECT user_id FROM users WHERE email='$email' AND token='$com_code' AND active=0") or die(mysqli_error($conn)); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        $qweryy= "UPDATE `users` SET `active`=1 WHERE email='".$email."' AND token='".$com_code."' AND active=0";
        mysqli_query($conn,$qweryy) or die(mysqli_error($conn));
        echo '<h1 style="color:white">Your account has been activated, you can now <a href="http://localhost/PhpProject1/login.php">login here</a></h1>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<h1>The url is either invalid or you already have activated your account.</h1>';
    }
                 
}else{
    // Invalid approach
    echo '<h1>Invalid approach, please use the link that has been send to your email.</h1>';
} 
mysqli_close($conn);
        ?>
    </body>
</html>
