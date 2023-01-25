<?php 
session_start();
require 'connectdb.php';


if(isset($_POST['login']) || isset($_POST['name']) || isset($_POST['password'])){
    if(!empty($_POST['name']) &&!empty($_POST['password']) ){
    $name= mysqli_real_escape_string($connect,$_POST['name']);
    $password= mysqli_real_escape_string($connect,$_POST['password']);
     $query = "SELECT * FROM signup WHERE Name='$name' AND Password='$password'";
     $query_run = mysqli_query($connect, $query);
     if($query_run){
        $_SESSION['message']='Login Success!';
        if (mysqli_num_rows($query_run) === 1) {
			$row = mysqli_fetch_assoc($query_run);
            if ($row['Name'] === $name && $row['Password'] === $password) {
            	$_SESSION['Name'] = $row['Name'];
            	$_SESSION['ID'] = $row['ID'];
               header("Location:welcome.php");
        exit(0);
     }
     else{
        $_SESSION['message']='Login Failed, try again!';
        header("Location:login.php");
        exit(0);
     }
    }
    else{
        $_SESSION['message']='Login Failed, try again!';
        header("Location:login.php");
        exit(0);
     }}}
}




?>