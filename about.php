<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School & College Accessory site</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/home.css">

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
 
    <!--<button class="dropbtn"--><a href="store.php"><i class="fa fa-shopping-cart" style="font-size:18px" ></i>  Shop</a> 
      <!--<i class="fa fa-caret-down"></i>-->
    <!--</button>
    <div class="dropdown-content">
      <a href="arts-crafts.php">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
    </div>-->
 
  <a href="userlogin.php"><i class="fa fa-fw fa-user" ></i>login/signup</a>
  
 <!-- <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>-->
  <!--<span style="font-size:35px;cursor:pointer;float:right;padding-right:15px;color:white; " onclick="openNav()">&#9776; </span>-->
<a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="openNav()">&#9776;</a>
</div>
</div>
<div style="">

</div>


<body>


<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<div style="overflow-x:auto;">
<table>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card"  >
      <img src="images/img.jpg" alt="Vishal" style="width:100%; border-radius: 50%;">
      <div class="container">
        <h2>Vishal Rathod</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button" style="background-color:blue;">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/dip1.jpeg" alt="Dipesh" style="width:100%;border-radius: 80%;">
      <div class="container">
        <h2>Dipesh Halde</h2>
        <p class="title"> Director & Co-Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button" style="background-color:blue;">Contact</button></p>
      </div>
    </div>
  </div>
  
</div>


</table>
</div>


























   <footer>
        <div class="footer-content" style="position:none;">
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
                        <li><a href="blog.php">Blog</a></li>
                      </ul>
                    </div>
        </div>

    </footer>



















































<!---->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="userlogin.php"><i class="fa fa-fw fa-user" style="color:cyan" ></i>login/signup</a>
      <a href="index.php">Home</a>
      
   
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
	<a href="store.php">Store</a>
	<!--<div class="dropdown">
    <a style="float:center;padding-left:200px">Shop</a>
      <div class="dropdown-content1">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
      </div>-->
  </div><br> 
    <div>
  </div>
</div>
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
<!-------------------->
<!-------------------->
</body>
</html>
