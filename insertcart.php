 <?php
//inserting cart 
session_start();
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$product = array($name,$price,$qty);

//session creating for particular product
$_SESSION[$name] = $product;

//to check->  
 //print_r($product);

header('location:home.php');

?>