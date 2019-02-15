

<?php include "../nav_head/navbar.php"; ?>
<?php include "../nav_head/header.html"; ?>
<?php include "../dbconn.php"; ?>

<!DOCTYPE html>
<html lang="en">

    <head>
  <title>SR PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
   <style>
   
       
       h2{
           text-align: center;
        
       }
    
    
</style>
</head>
<body>
    
<hr>
    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>PROFILE</h1></div>
     
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" >
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" name="u_image" required="required">
            </div><br>

               
         
          <ul class="list-group">
              <li class="list-group-item text-muted"><strong>Posts </strong><i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Answers</strong></span> 37</li>
      
          </ul> 
               
          <div class="panel">
          
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="list-group">
    
  <h2 class="list-group-item text-muted">Edit Profile</h2>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
     <br><br>
  
             <form role="form">

   
        <div class="form-group">
          <label class="col-md-3 control-label" for="name">Username:</label>
          <div class="col-md-8">
            <input class="form-control" id="name" name="name"value="" type="text" data-validetta="required,minLength[3]">
          </div>
        </div>
           <div class="form-group">
          <label class="col-md-3 control-label" for="email">Email:</label>
          <div class="col-md-8">
            <input class="form-control" id="email" name="email"  type="email" data-validetta="required,email" >
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" name="u_pass" value="" type="password" required="required">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" name="submut" value="Update" type="button">
            <span></span>
        
          </div>
            </div>
        </form>
        <script>
    var $form = $("form"),
  $successMsg = $(".alert");
  $form.validetta({
  bubblePosition: "bottom",
  bubbleGapTop: 10,
  bubbleGapLeft: -5,
  onValid: function(e) {
    e.preventDefault();
    $successMsg.show();
  }
});
        </script>
      
        </div>
        
   

            </ul>
        </div>
    </div>
        </div>
    </form>


    </body>
    </html>
