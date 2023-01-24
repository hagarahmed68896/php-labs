<?php 
$connect = mysqli_connect("localhost","root","","login");
if (!$connect) {
    die("Not connected : ". mysqli_connect_error());
}
?>