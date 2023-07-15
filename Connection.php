<?php 
$path ="localhost";
$user ="root";
$password="Saikat@12#";
$database_name="loginregistrationmentations";
$conn= mysqli_connect($path,$user,$password,$database_name);
if(!$conn){
	die(mysqli_error($conn));
}



?>