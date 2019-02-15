
<?php
session_start();
if( isset($_SESSION['user'])){
        header("Location: forumi.php");
    }else if(isset($_SESSION['admin'])){
        header("Location: index.html");
    }
include "dbconn.php";
if(!$conn){
    die("Connection errror ".msqli_connect_error());
}
 
if( isset( $_POST['submit'] ) )
    {   
        function valid($data){
            $data=trim(stripslashes(htmlspecialchars($data)));
            return $data;
        }
        $inuser = mysqli_escape_string($conn,valid( $_POST["username"] ));
        $inkey = mysqli_escape_string($conn,valid( $_POST["password"] ));
        $password=hash("ripemd128",$inkey);
        
        $query = "SELECT username,email,password,active FROM users WHERE username='$inuser' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            
            die ("Error procesing request");
        } else{
            if(mysqli_num_rows($result)>0){
                 $row = mysqli_fetch_assoc($result);
                 $username = $row['username'];
                 $pass = $row['password'];
                 $email = $row['email'];
                 $isActivated = $row['active'];
                 $role= $row['role'];
                 if($isActivated==1&& $role='user'){
                     $_SESSION['user'] = $username;
                     $_SESSION['email'] = $email;
                     header('Location: http://localhost/PhpProject1/forumi.php');
                 }else if($isActivated==1&& $role='admin'){
                     $_SESSION['admin'] = $username;
                     $_SESSION['email'] = $email;
                      header('Location: http://localhost/PhpProject1/index.html');
                 }
                 else{
                    echo"<script>window.onload(alert('Please click the link on your email to activate your account to log in!'));</script>"; 
                 }
        }else{
                     
           echo"<script>window.onload(alert('Wrong username/password combination!Try again.'));</script>";
                      
             }
            
        }
        
      
    }
        
   mysqli_close($conn);
    
    ?>
