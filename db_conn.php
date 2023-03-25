<?php  

$sname = "localhost";
$uname = "root";
$password = "1234";

$db_name = "project";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn) {
	//echo"connection successful!!!";
	
}else{
	echo "Connection Failed!";
	exit();
}