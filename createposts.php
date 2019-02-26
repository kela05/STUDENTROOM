<?php
if(isset($_POST['create_post'])){


$topic_title = $_POST['title'];
$topic_category = $_POST['topic_category'];
$topic_content = $_POST['content'];

$topic_date = date('d-m-y');


$conn = mysqli_connect('localhost' , 'root', '', 'studentforum');

$query = "INSERT INTO topics (category_id, title, content, date_posted ) ";
$query .= "VALUES({$topic_category}, '{$topic_title}', '{$topic_content}', now()) ";

$insert_topic_query = mysqli_query($conn, $query);
if(!$insert_topic_query){
    die("Failed" . mysqli_error($conn));
}

$the_topic_id = mysqli_insert_id($conn); 

echo "<p class='bg-success'>Post Created. <a href = '../forum/forum_more.php?p_id={$the_topic_id}'>View Post </a> OR <a href = 'forum.php'>View  Posts</a></p>";



}









?>




<!DOCTYPE html>
 <?php include "navbar.html"; ?>
 <?php include "../dbconn.php"; ?>



<html>
    <head>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
       <div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
                <form action="" method="post" enctype="multipart/form-data">
    		    
    		   
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require"></span></label>
    		        <input type="text" class="form-control" name="title" required="required"/>
    		    </div>



    		     <div class="form-group">
    		        <label for="categories">Categories<span class="required"></span></label>
                        <select name = "topic_category" class="form-control" required>
                           
                                    <?php

                                        $query = "SELECT * FROM categories ";
                                        $select_category_query = mysqli_query($conn, $query);
                                        if(!$select_category_query){
                                            die("Failed" . mysqli_error($conn));
                                             }
                                      while($row = mysqli_fetch_assoc($select_category_query)){

                                    $cat_id = $row['cat_id'];
                                    $category_title = $row['category_title'];


                                    echo "<option value = '{$cat_id}'>$category_title</option>";
                                      }       


                                    ?>




                      </select>
    		    </div>
                    
    		    <div class="form-group">
    		        <label for="description">Content</label>
    		        <textarea rows="5" class="form-control" name="content" required="required"></textarea>
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
    		        <button type="submit" name = "create_post" class="btn btn-primary">
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