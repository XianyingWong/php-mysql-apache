<?php 
$conn=new mysqli("localhost","root","","test");
if($conn->connect_error){
    die("Could not connect to database!");
}
?> 