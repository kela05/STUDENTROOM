

   
   
<form action="" method = "post" enctype ="multipart/form-data">
    
    
<div class="form-group">
    <label for="title">Firstname</label>
    <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name = "user_firstname">
    
</div>  
   
<div class="form-group">
    
   <label for="post_status">Lastname</label>
   <input type="text" value="<?php echo $user_lastname; ?>"  class="form-control" name = "user_lastname">       
</div>
     
   
  
<div class="form-group">
   <select  name="user_role" id="">
   
<option value="<?php echo $user_role ?>"><?php echo $user_role ?></option>
      
     
        
            
   </select>    
</div> 
   

   
   
   
<!--
   
<div class="form-group">
    <label for="user_image">User Image</label>
    <input type="file" name="image">
</div>
  
  
-->
  
  
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" value="<?php echo $username; ?>" class="form-control" name = "username">
</div>   
                                                                                                            
<div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" value="<?php echo $user_email; ?>"  class="form-control" name = "user_email">

</div>                      
   
   <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" value="<?php echo $user_password; ?>" class="form-control" name = "user_password">

</div> 
   
   
   
   
<div class="form-group">
    <input class = "btn btn-primary" type="submit" name = "edit_user" value = "Edit User">
</div>                              
                                                                                                             
    
    
    
    
    
    
    
    
</form>


