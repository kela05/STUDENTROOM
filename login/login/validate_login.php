<?php
session_start();
if( isset($_SESSION['user'])){
        header("Location: ../forum/forum.php");
    }else if(isset($_SESSION['admin'])){
        header("Location: ../admin-master/index.php");
    }
include '../db/dbconn.php';


 

if( isset( $_POST['submit'] ) )
    {   
        
        $inuser = mysqli_escape_string($conn,$_POST["username"]);
        $inkey = mysqli_escape_string($conn,$_POST["password"]);
        $password=hash("ripemd128",$inkey);
        
        $query = "SELECT username,email,password,active,role FROM users WHERE username='$inuser' AND password='$password'";
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
                     $_SESSION['loggedin']=true;
                     header('Location: http://localhost/forum/forumi.php');
                 }else if($isActivated==1&& $role='admin'){
                     $_SESSION['admin'] = $username;
                     $_SESSION['email'] = $email;
                     $_SESSION['loggedin']=true;
                      header('Location: http://localhost/studentroom/admin-master/index.php');
                 }
                 else{
                    $error_email="Please confirm your email link first to activate your account"; 
                 }
        }else{
                     
           $error_in="Wrong username/password combination";
                      
             }
            
        }
        
      
    }
        
   mysqli_close($conn);
    
    ?>