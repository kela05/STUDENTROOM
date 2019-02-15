
<?php
$conn =  mysqli_connect('localhost', 'root', '', 'studentforum');
if(!$conn){
    die('Error connecting!'.mysqli_connect_error());
}
?>