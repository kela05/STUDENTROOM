<?php include "../navbars/navbar.php"; ?>
<?php include "../headers/header.html";?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylee.css">
  <link rel="stylesheet" href="../css/welcome.css">
  <link rel="stylesheet" href="../css/StyleSr.css">
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
    

    <script src="../js/script.js"></script>
   
       
       
<div class="wrapper">
    <form action="validate.php" method="POST">
   <h1>Sign up</h1>
    <hr class="sep"/>
    <div class="text-center" style="color:#ffffff" id="response"></div>
    <div class="group">
      <input type="text" name="username" id="username" required="required"/><span class="highlight"></span><span class="bar"></span>
      
      <label id="ulabel">Username</label>
      
    </div>
    <div class="group">
        <input type="text" name="email"  id="email" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label id="elabel">Email</label>
    </div>
    <div class="group">
        <input type="password" name="password" id="password" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label id="plabel">Password</label>
    </div>
    <div class="group">
      <input type="password"  id="rpassword" required="required"/><span class="highlight"></span><span class="bar"></span> 
      <label id="rplabel">Confirm password</label>
    </div>
    <div class="btn-box">
        <button class="btn btn-submit" type="submit" name="submit" id="submit">Sign up</button>
      
    </div>
    <div class="text-center" style="color:#ffffff">Already have an account? <a href="../login/login.php">Login here</a></div>
  </form>
</div>^
  
    
    <br><br><br>
<div class="footer"><hr><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div>
</body>
</html>