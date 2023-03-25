 <?php
$sname = "localhost";
$uname = "root";
$password = "1234";

$db_name = "project";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$con=mysqli_select_db($conn,$db_name);

if($con)
{
	//echo("connection ok");

}else{
	die("failed connection".mysqli_connect_error());

}

	?>

<?php

	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$ques = $_POST['ques'];
	$ans = $_POST['ans'];
	$password = $_POST['password'];
	//database connection_here
	$con = new mysqli("localhost","root","1234","project");
	if($con->connect_error){
		die("Failed to connect: ".$con->connect_error);
	}else{
		$stmt = $con->prepare("select * from usertable where email =?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['ans'] === $ans){
				mysqli_query($conn,"update usertable set password='$_POST[password]' where roll='$_POST[roll]' and email='$_POST[email]' and ques='$_POST[ques]' and ans='$_POST[ans]'");
				
		echo "<script>window.alert('saved password successfull');</script>";
		echo "<a href='login.php'>click here to login</a>";
			
			
				//$_SESSION['emailemail'] = $email;
			}
			else{
				echo "<script>window.alert('wrong credentials!');</script>";
				echo "<a href='forgot.php'>Click here to go back </a>";
			}
		}else{
		echo "<script>window.alert('wrong credentials!');</script>";
		echo "<a href='forgot.php'>Click here to go back </a>')";
			}
	} 
?>
	