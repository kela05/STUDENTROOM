<?php include "../nav_head/navbar.php"; ?>
<?php include "../nav_head/header.html"; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../first_home/style1.css">
  <link rel="stylesheet" href="../first_home/style2.css">
 <style>
body{
        background: #0B0B0F;
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

<body>

<div class="wrapper">
  <form>
   <h1>Contact Us</h1>
    <hr class="sep"/>
    <div class="group">
      <input type="text" required="required" /><span class="highlight"></span><span class="bar"></span>
      <label>First Name</label>
    </div>
    <div class="group">
      <input type="text" required="required" /><span class="highlight"></span><span class="bar"></span>
      <label>Last Name</label>
    </div>
    <div class="group">
      <input type="text" required="required" /><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    <div class="group">
    <div class="group">
      <textarea type="textarea" rows="5" required="required"></textarea><span class="highlight"></span><span class="bar"></span>
      <label>Message</label>
    </div>
    <div class="btn-box">
      <button class="btn btn-submit" type="submit"> <a href="contactus.php">Send Message</a></button>
      <!--<button class="btn btn-cancel" type="button">cancel</button>-->
        </div></div>
  </form>
    <br><br>
    <div class="footer"><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div><!-- #footer -->
</div>

</body>
</html>



</script>