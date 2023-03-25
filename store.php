 
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


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School & College Accessory site</title>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='js/flickity.js' ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/home.css">

<link rel="stylesheet" href="css/flickity.css">
</head>
<body>

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
 <div class="topnav" id="myTopnav">
 <a href=""  onclick="myFunction5()" style="float:left;"><i style='font-size:25px;color:yellow;' class='fas'>&#xf290;</i></a>
<script>
function myFunction5() {
  alert("To access this login/signup first....");
}
</script>

  <a href="index.php"><i class="fa fa-fw fa-home" style="font-size:18px"></i>Home</a>
  <a href="about.php">
About <i class="fa fa-info-circle"></i></a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
  <!--<div class="dropdown">
    <button class="dropbtn"><a href="arts-crafts.php"><i class="fa fa-shopping-cart" style="font-size:18px" ></i>  Shop</a> 
      <!--<i class="fa fa-caret-down"></i>-->
    <!--</button>
    <div class="dropdown-content">
      <a href="arts-crafts.php">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
    </div>  </div> -->
 
  <a href="userlogin.php"><i class="fa fa-fw fa-user" ></i>login/signup</a>
  
 <!-- <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>-->
  <!--<span style="font-size:35px;cursor:pointer;float:right;padding-right:15px;color:white; " onclick="openNav()">&#9776; </span>-->
<a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="openNav()">&#9776;</a>
</div>
</div>
<div>


<form name="form1" action="" method="post"><center>
<h1>
 <select name="category" style="background-color:yellow;font-size:14px;">
        <!--option selected disabled>Select category</option-->
        <option>Arts & Crafts</option>
        <option>Teachers Stationery</option>
        <option>College Materials</option>
		<option>Other</option>
    </select> 
	<button style="color:white;background-color:blue;" type="submit" name="submit1"><i style="color:white;background-color:blue;" class="fa fa-search"></i></button>
</h1></center></form>
  

<center><button onclick="myFunction1()">Toggle dark mode</button>
<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "groupCells": true }'>

 
		<?php
if(isset($_POST["submit1"]))
	{
		$res=mysqli_query($conn,"select * from products where   category='$_POST[category]' ");
		echo"<table style='border-color:blue;' border=1>";
		
		
		
	while($row=mysqli_fetch_array($res))
	{
?> 
  <div class="card" style="background-color:cyan;">
 <p style="color:while;background-color:pink;padding-top:0.2px;"><b>Selected Category is <?php echo $row["category"]; ?></p></b><hr>
  <p style="color:blue">Available Stock :<?php echo $row["qty"]; ?></p>
  <img src="images/<?php echo $row['img'];   ?>" alt="image" style="width:50%;border-radius: 50%;" >
<h1><?php echo $row["name"];   ?></h1>
	<p class="price">₹<?php echo $row["price"]; ?></p> <p style="color:green;">discount :<b><?php echo $row["discount"]; ?>%</b><br></p>
  <p>Qty:<select>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>

  </select> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<a>Buy now</a></p><br>
  <p><button>Add to Cart</button></p>
	
	</div> <?php }}else{
		echo"<center><h1>Some thing!went Wrong!!</h1></center></p>";
	}?> 
</div>
</div>
 
  <!-- <footer>
        <div class="footer-content">
            <h3>School & College Accessory Site</h3>
            <p>This site is specially developed for Students and Teachers</p>
			
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
                        <li><a href="blog.php">Blog</a></li>
                      </ul>
                    </div>
        </div>

    </footer>-->
  


 





<style>
.card {
  box-shadow:0 4px 15px 0 rgba(0, 0, 0, 0.2);
  max-width: 280px;
  margin:5px;
  text-align: center;
  font-family: arial;
  border-radius: 20px;
  
  
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.card a {
  border: none;
  outline: 0;
  padding:7px;
  color: white;
  background-color: green;
  text-align: right;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card a:hover {
  opacity: 0.5;
}
</style>




<br>






































<!---->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="userlogin.php"><i class="fa fa-fw fa-user" style="color:cyan" ></i>login/signup</a>
      <a href="index.php">Home</a>
      
   
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a><div class="dropdown">
   <!-- <a style="float:center;padding-left:200px">Shop</a>
      <div class="dropdown-content1">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
	  <a href="#">Other</a>
      </div-->
  </div><br> 
    <div>
  </div>
</div></div>
<!---->

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
