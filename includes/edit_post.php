



  

    
      
        
          
              
<form action="" method = "post" enctype ="multipart/form-data">
    
    
<div class="form-group">
    
    <label for="title">Post Title</label>
    <input value = "<?php echo $post_title; ?>" type="text" class="form-control" name = "post_title">
    
</div>   
   
    
<div class="form-group">
   <select name="post_category" id="">
       

       
       
       
       
      
       
       
       
       
   </select>    
</div> 
   
<div class="form-group">
    <label for="title">Post Author</label>
    <input value = "<?php echo $post_author; ?>" type="text" class="form-control" name = "post_author">
    
</div>  
   
   
   <div class="form-group">
   <select name="post_status" id="">
       
       <option value='<?php echo $post_status;?>'><?php echo $post_status;?></option>
     
       
   </select>
   
    </div>
   
   

   
   
   
   
<div class="form-group"> 
    <img width="100" src = "./images/<?php echo $post_image; ?>" type="file" name = "image">
    <input  type="file" name = "image">
</div>
  
  
  
  
<div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input value =  "<?php echo $post_tags; ?>" type="text" class="form-control" name = "post_tags">
</div>   
                                                                                                            
<div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea name="post_content" id="body" cols="30" rows="10" class="form-control"><?php echo $post_content; ?>
       
    </textarea>
</div>   

    <script > 
   
$(document).ready(function () {
    ClassicEditor
        .create(document.querySelector( '#body' ) )
        .catch(error => {
            console.error(error);
        } );
    
} );
 </script> 
    
  
  
  
  
   
<div class="form-group">
    <input class = "btn btn-primary" type="submit" name = "update_post" value = "Update Post">
</div>                              
                                                                                                             
    
    
    
     
    
    
    
    
</form>