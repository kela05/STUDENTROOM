
<?php include "../navbars/navbar.php"; ?>
<?php include "../headers/header.html";?>



<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/stylee.css">
  <link rel="stylesheet" href="../css/StyleSr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        $("#submit").click(function(e){
            e.preventDefault();
           var email =$("#email").val();
            if(email!==""){
                
                $.post("passform.php", {
                    email: email
                }, function(data){
                    if(data==='1'){
                        alert("Check yor email inbox!");
                    }else if(data==='0'){
                        $("#response").html("Invalid email").css("color","red");
                    }
                });
                  }else{
                $("#email").addClass("errorInput");
               
            }
          
           
        });
    });
    
</script>
      
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
    <form method="POST" action="passform.php">
    <h1>Forgot password?</h1>

    <hr class="sep"/>
    
    <div class="text-center"  id="response" style="color:#ffffff">You can reset your password here</div>
    <div class="group">
      <input type="text" name="email" id="email" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label id="label">Email</label>
    </div>
   
    <div class="btn-box">
      <button class="btn btn-submit" type="submit" name="submit" id="submit">Reset password</button>
    </div>
  </form>
</div>
     
  
    
<div class="footer"><hr><p style="color: white;" class="footer-company-name">Students' Union &copy; 2019</p></div>


</body>
</html>
