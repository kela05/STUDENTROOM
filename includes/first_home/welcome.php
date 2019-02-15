<?php include "../nav_head/navbar.php"; ?>
<?php include "../nav_head/header.html"; ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style3.css">

  <style>
 body {
  background: #0B0B0F;
  /*background: #282828;/* match border color */
  text-align: center;
}
a {
  color: #2196F3;
}
small {
  /*color: #333;*/
    color: #B7D1DA;
    font-size: 25px;
}
.logo {
  font: 84px 'Arial Narrow', sans-serif;/* I picked this font because it's the closest looking 'web safe' font http://cssfontstack.com/ */
  color: #fefefe;
  text-transform: uppercase;
  letter-spacing: -4px;
}

/* stuff for both words */
.logo span {
  position: relative;
}
.logo span:before,
.logo span:after {
  content: '';
  position: absolute;
  border-width: 32px;/* makes a nice, big 64px square */
  border-style: solid;
  border-color: transparent;
  height: 0;
  z-index: 10;
}
      /* stuff for 1st word */
.logo .word1 {
  color: #2196F3;
  margin-right: -38px;
  transform: rotateY(180deg);/* using Prefix free */
  display: inline-block;/* required for transform */
  z-index: 10;/* stack 1st word on top */
}
.logo .word1:before {
  right: -4px;/* would be left, but we flipped the word */
  top: -9px;
  border-top-color: #0B0B0F;/* match background color */
  border-right-color: #0B0B0F;/* would be left, but we flipped the word */
}
.logo .word1:after {
  left: 17px;/* would be right, but we flipped the word */
  bottom: -15px;
  border-bottom-color: #0B0B0F;
  border-left-color: #0B0B0F;/* would be right, but we flipped the word */
}

/* stuff for 2nd word */
.logo .word2 {
  z-index: 0;/* stack 2nd word below */
}
.logo .word2:before {
  left: -4px;
  top: -6px;
  border-top-color: #0B0B0F;
  border-left-color: #0B0B0F;
}
.logo .word2:after {
  right: -4px;  
  bottom: 4px;
  border-bottom-color: #0B0B0F;
  border-right-color: #0B0B0F;
}
.footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
}

    </style>
</head>

<body><br><br><br>
  <h1 class="logo">
  <span class="word1">Student</span>
  <span class="word2">Room</span>
</h1>
  <!--<section id="hero">
    <div class="hero-container">
      <h1>Welcome to Student Room</h1><br>
        <small><q>We are team of talented designers making websites with Bootstrap</q></small>
    </div>
  </section><!-- #hero -->

   <small><q>I am still a movie trailer...</q></small>
<div class="wrapper">
  <form>
    <div class="btn-box">
        <a href="../login/login.php">Login</a>
        <a href="../sign_up/signup.php">Sign Up</a>
    </div>
  </form>
</div>
 
    <div class="footer"><p style="color: #B7D1DA;" class="footer-company-name">Students' Union &copy; 2019</p></div>
</body>
</html>

