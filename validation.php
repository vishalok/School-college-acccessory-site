
<?php
session_start();
	$email = $_POST['email'];
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
			if($data['password'] === $password){
				
				header('location:home.php');
				$_SESSION['email'] = $email;
				//$_SESSION['emailemail'] = $email;
			}
			else{
				echo "<script>window.alert('username or password invalid');</script>";
				
			}
		}else{
		echo "<script>window.alert('username or password invalid');</script>";
			}
	} 
?>
		
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<a href="login.php">click here to go back</a>
</body>
</html>