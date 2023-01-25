<?php 
session_start();
require 'connectdb.php';

if(isset($_POST['signup']) ||isset($_POST['email'])|| isset($_POST['name']) || isset($_POST['password'])){
   if(!empty($_POST['name']) &&!empty($_POST['password']) && !empty($_POST['email'])){
   $email= mysqli_real_escape_string($connect,$_POST['email']);
   $name= mysqli_real_escape_string($connect,$_POST['name']);
   $password= mysqli_real_escape_string($connect,$_POST['password']);
    $query = "INSERT INTO signup (Email,Name,Password) VALUES ('$email','$name','$password')";
    $query_run = mysqli_query($connect, $query);
    if($query_run){
       $_SESSION['message']='Sign up Success!';
       header("Location:login.php");
       exit(0);
    }
    else{
       $_SESSION['message']='Sign up Failed, try again!';
       header("Location:signup.php");
       exit(0);
    }
   }
   else{
       $_SESSION['message']='Sign up Failed, try again!';
       header("Location:Signup.php");
       exit(0);
    }
}


?>