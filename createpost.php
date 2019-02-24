

<!DOCTYPE html>

<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include "../navbars/navbar.html"; ?>
       <div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
                <form action="" method="POST" enctype="multipart/form-data">
    		    
    		   
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require"></span></label>
    		        <input type="text" class="form-control" name="title" required="required"/>
    		    </div>
    		     <div class="form-group">
    		        <label for="categories">Categories<span class="require"></span></label>
                        <select class="form-control" required>
                             <option></option>
                        <option value="category1">Category 1</option>
                       
                        <option value="category2">Category 2 </option>
                        <option value="category3">Category 3 </option>
                         <option value="category4">Category 4</option>
</select>
    		    </div>
                    
    		    <div class="form-group">
    		        <label for="description">Content</label>
    		        <textarea rows="5" class="form-control" name="description" required="required"></textarea>
    		    </div>
                    <div class="form-group">
                       <label class="btn btn-default" for="my-file-selector">
    <input id="my-file-selector" type="file" style="display:none" 
    onchange="$('#upload-file-info').html(this.files[0].name)">
    Add image
</label>
<span class='label label-info' id="upload-file-info"></span>
                          </div>              
    		    
    		    
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
    </body>
</html>
