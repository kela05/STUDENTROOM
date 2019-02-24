<?php
include '../navbars/navbar.php';
include '../db/dbconn.php';
include '../headers/header.html';

if(isset($_GET['email'])&& !empty($_GET['email'])&&isset($_GET['hash'])&& !empty($_GET['hash'])){
    
    $email= mysqli_real_escape_string($conn,$_GET['email']);
    $hash= mysqli_real_escape_string($conn,$_GET['hash']);
    $query= "SELECT user_id FROM users WHERE email='$email' AND passToken='$hash'";
    $result1= mysqli_query($conn,$query);
    if(!$result1){
        die("Error proccessing request");
    }else 
        $nr=mysqli_num_rows($result1);
     if($nr>0){
         ?>

<!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>SR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylee.css">
        <link rel="stylesheet" href="StyleSr.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <form method="POST" action="password.php">
        <h1>Reset Password</h1>
        <hr class="sep"/>
        <div class="group">
        <input type="hidden" name="email" value="<?php echo $email;?>"/>
        <input type="hidden" name="hash" value="<?php echo $hash;?>"/>
        <input type="password" name="password" id="password" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label id="plabel">New password</label>
        </div>
        <div class="group">
        <input type="password"  name="rpassword" id="rpassword" required="required"/><span class="highlight"></span><span class="bar"></span>
        <label id="rplabel">Confirm password</label>
        </div>
        <div class="btn-box">
        <button class="btn btn-submit" type="submit" name="submit" id="submit">Reset</button>
        </div>
        </form>
        </div>
            <script src="../js/load.js"></script>
        <div class="footer"><hr><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div>
        </body>
        </html>
<?php
     }else{
        header("Location: http://localhost/studentroom/login/login.php");
    }
}else{
    header("Location: http://localhost/studentroom/login/login.php");
}
