                    

<form action="" method="post">
                            
                                                        
                                                                                                            
                             
 <table class = "table table-bordered table-hover">
                           

<div id="bulkOptionContainer" class="col-xs-4">

<select class = "form-control" name = "bulk_options" id="">
<option  value="">Select Options</option>
<option value="Published">Published</option>
<option value="draft">Draft</option>
<option value="delete">Delete</option>
<option value="clone">Clone</option>
</select>



<!-- Kodi js per te selectuar te gjitha postimet njeheresh -->
<script>    
    $(document).ready(function(){
    $('#selectAllBoxes').click(function(event){
     if(this.checked) {
       $('.checkBoxes').each(function(){
             this.checked = true;
              });
         
  }  
        
        else {
         
            $('.checkBoxes').each(function(){
             
             this.checked = false;
             
          }); 
     }
});
  
});
    
 </script>


</div>    
                          
<div class="col-xs-4">
    
    
    <input type="submit" name = "submit" class="btn btn-success" value="Apply">
    <a class = "btn btn-primary" href = "">Add New</a>
    
    
    
</div>                          
                          
                             <thead>
                                <tr>
                                   <th><input id ="selectAllBoxes" type ="checkbox"></th>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th>
                                    <th>View Post</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               
                       
                        <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value=''></td> 
                              
                               
                 </tbody>
        </table>
</form> 


          