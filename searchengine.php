<?php
// Search Engine
// Only execute when button is pressed
if (isset($_POST['search'])) {
// Filter
$keyword = trim ($keyword);
echo $keyword;
// Select statement
$search = mysqli_query("SELECT * FROM topics WHERE tag LIKE %".$result."%");
// Display
$result = mysqli_query($search);
if (!$result){
echo "problem";
exit();
}


while($result = mysqli_fetch_assoc( $search )) 
 { 
 echo $result['tag']; 
 echo " ";
 echo "<br>"; 
 echo "<br>"; 
 }
 $anymatches=mysqli_num_rows($search); 
 if ($anymatches == 0) 
 { 
 echo "Nothing was found that matched your query.<br><br>"; 
 }
}?>