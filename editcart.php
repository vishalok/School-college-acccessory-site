 <?php

//inserting cart 

session_start();
$name = $_POST['name0'];
$price = $_POST['name1'];
$qty = $_POST['name2'];
$event =$_POST['event'];

$product = array($name,$price,$qty);

if($event == "Update"){
	$_SESSION[$name] = $product;
}elseif($event == "Delete"){
	unset($_SESSION[$name]);
	//session_destroy();
}
//print_r($product);
//exit;
//session creating for particular product


//to check->  


header('location:cart.php');

?>