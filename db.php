<?php
$user = "if0_39265998"; 
$pass = "ifaw4321"; 
$host = "sql113.infinityfree.com"; 
$dbname= "if0_39265998_system";

$connect = mysqli_connect($host,$user,$pass,$dbname);

if(isset($connect)) 
		echo("");  
	//connection is established
else
	echo("Connection failed");


?>