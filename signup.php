 <?php 
session_start();
?>

<?php

$con = mysqli_connect('localhost','root','1234','project');
mysqli_select_db($con,'project');


$name = $_POST['name'];
$roll = $_POST['roll'];
$ph = $_POST['ph'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$email = $_POST['email'];
$pass = $_POST['password'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];
$ques = $_POST['ques'];
$ans = $_POST['ans'];
$id = $_POST['id'];
$s = " select * from usertable where name ='$name' && email ='$email' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo "<script>window.alert('Username Already Taken');</script>"; 	
	
}
else{
	$reg= " insert into usertable(name,roll,ph,phone,age,email,password,gender,branch,ques,ans,id) values ('$name','$roll','$ph','$phone','$age','$email','$pass','$gender','$branch','$ques','$ans','$id')";
	mysqli_query($con, $reg);
	
	echo "<script>window.alert('Signup Successful');</script>"; 
	
}


?>
<a href="login.php">Click here to for login</a>