<?php
session_start();
error_reporting(0);
include("db_conn.php");
$userprofile = $_SESSION['email'];
if($userprofile==true)
{
	
}else{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School & College Accessory site</title>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/home.css">

<link rel="stylesheet" href="css/flickity.css">

<script src='js/flickity.js' ></script>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
 <div class="topnav" id="myTopnav">
 <a href="cart.php" style="float:left;"><i style='font-size:25px;color:yellow;' class='fas'>&#xf290</i></a>

  <a href="home.php"><i class="fa fa-fw fa-home" style="font-size:18px"></i>Home</a>
  <a href="about1.php">
About <i class="fa fa-info-circle"></i></a>
  <a href="contact1.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
 <a href="shop.php"><i class="fa fa-shopping-cart" style="font-size:18px" ></i> Store</a>
 <!-- <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-shopping-cart" style="font-size:18px" ></i> Shop 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
    </div>
  </div> -->
  <a href="userblog.php"><i class="fa fa-fw fa-user" ></i>user blog</a>
  <a href="logout.php"><i class="fa fa-fw fa-user" ></i>logout</a>
</div>

<body>
<div style="overflow-x:auto;">
<div style="background-color:white;">
<p style="text-align:right;color:green;"><b><?php echo "Welcome&nbsp;".$_SESSION['email']; 

?></b></p>
<h2 align="center">Your Cart Products</h2>
<style>
.hideit:first-child{
	display:none;
}
.hidecell:nth-child(even){
	display:none;
}
.hidecell:last-child{
	display:inline;
}
</style>
<center>
<table align="center" border="1" style="background-color:blue;color:white;border-radius:5px;border-color:yellow;" style="overflow-x:auto;" >
<thead>
<tr>
<th>Sno</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>

<tbody>

</tbody>
<?php
$total = 0;
$bill = 0;
$sno =0;
foreach($_SESSION as $products){
	$p = 0;
	$q = 0;
	echo "<tr class='hideit'>";
	echo "<td>".($sno++)."</td>";
echo"<form action='editcart.php' method='post'>";
foreach($products as $key => $value){
		if($key == 2){
			//echo "<td>".$value."</td>";
			echo "<td><input type='text' name='name$key' value='".$value."' ></td>";
			$q=$value;
			
		}elseif($key == 1){
			
			echo "<input type='hidden' name='name$key' value='".$value."'>";
			echo "<td>".$value."</td>";
			$p =$value;
		}elseif($key == 0){
			echo "<input type='hidden' name='name$key' value='".$value."'>";
			echo "<td>".$value."</td>";
		}
	}

	$bill =($q * $p);
	
	echo"<td>".($bill)."</td>";
	echo "<td><input type='submit' name='event' value='Update' > </td>";
	echo "<td><input type='submit' name='event' value='Delete' > </td>";
		echo"</form>";
		
	echo "</tr>";
/******/
$total =0;
$total += $bill;

$a+= $total;

echo"<tr class='hidecell'><td> <div class='hidepro'>total : ".$a." </div></td></tr>";


}
?>

</table>
<br>
<form action="home.php" method="post">
<input type='submit' name='' style='background-color:green;color:white;' value='Continue Shopping' >
</form>
<!--<form action="checkout.php" method="post">
<input type='submit' name='' style='background-color:blue;color:white;' value='checkout'>-->
</form>
</center>
<br><br><br><br>
</div>
</div>









<footer>
        <div class="footer-content">
            <h3>School & College Accessory Site</h3>
            <p>This site is specially developed for Students and Teachers</p>
			<button onclick="myFunction1()">Toggle dark mode</button>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
          <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Vishal Rathod & Dipesh Halde</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <li><a href="blog.php" class="active">Blog</a></li>
                      </ul>
                    </div>
        </div>
    </footer>

<!----><center>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="userlogin.php"><i class="fa fa-fw fa-user" style="color:cyan" ></i>login/signup</a>
      <a href="#home">Home</a>
      
   
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a><a href="store.php">Store</a>
	<!--<div class="dropdown">
    <a style="float:center;padding-left:200px">Shop</a>
      <div class="dropdown-content1">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a></>
      </div>-->
  </div><br> 
    <div>
  </div>
</div>
<!---->
</center>
<!---navigation---->
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>
<!---dark mode script----->
<script>
function myFunction1() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<!----------->
<!-------------------->


<!-------------------->
<!--------footer css------------>
<style media="screen">
	 
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    position:none ;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;
	
    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: flex;
  margin-top: 10px;
  margin-bottom: 20px;
}
}

/**************/
.main {
  background-color: #f1f1f1;
  padding: 20px;
  float: left;
  width: 60%; /* The width is 60%, by default */
}

.right {
  background-color: #04AA6D;
  padding: 20px;
  float: left;
  width: 20%; /* The width is 20%, by default */
}

/* Use a media query to add a break point at 800px: */
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>
</body>
</html>