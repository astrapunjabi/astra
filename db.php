<?php 
$server="localhost";
$user="root";
$pass="";
$database="userinfo";

$conn =new mysqli($server,$user,$pass,$database);
if($conn->connect_error){
 die("Connection Failed :" .$conn->connect_error);
}
?>