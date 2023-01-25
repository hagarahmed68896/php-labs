<?php 
$connect = mysqli_connect("localhost","root","","sign");
if (!$connect) {
    die("Not connected : ". mysqli_connect_error());
}
?>