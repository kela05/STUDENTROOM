
<?php include "../nav_head/navbar.php"; ?>
<?php include "../nav_head/header.html"; ?>
<?php include 'process2.php'; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../first_home/style1.css">

  
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
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Login</h1>

    <hr class="sep"/>
    <div class="group">
      <input type="text" name="username" id="username" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label>Username</label>
    </div>
    <div class="group">
      <input type="password"  name="password" id="password" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label>Password</label>
    </div>
    <div class="text-center" style="color:#ffffff"> Forgot password? <a href="forgotpwd.php">Click here</a></div>
    <div class="btn-box">
      <button class="btn btn-submit" type="submit" name="submit" id="submit">Login</button>
    </div>
  </form>
</div>
     
   <div class="text-center" style="color:#ffffff"> Or if you do not have an account: <a href="../sign_up/signup.php">Sign Up</a></div>
<br><br><br><br>
<div class="footer"><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div>
</body>
</html>
