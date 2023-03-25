<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Online College Magazine</title>
<style>
* {
  box-sizing: border-box;
}
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 30px 20px;
  overflow: hidden;
  background-color: cyan;
}
.right {
  background-color: lightblue;
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}

/*download buuton*/
.btn8 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn8:hover {
  background-color: RoyalBlue;
  
 .btn32 {
  background-color: #6D85D9;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.btn32:hover {
  opacity: 1;
}
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="cyan" style="font-family:Verdana;">

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
    <button class="dropbtn">--><a href="store.php"><i class="fa fa-shopping-cart" style="font-size:18px" ></i> Store</a> 
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

<div style="overflow:auto">
  <div class="menu">
     <form action="login.php">
       <div class="menuitem"><button type="submit" class="btn8">login</button></div>
       </form>
  </div>

  <div class="main">
    <div style="overflow-x:auto;">
   <!--write content here-->
     <center>
        
		<h1 style="color:blue">Register here</h1>
		<form action="signup.php" method="post">

                <table border="2" bgcolor="grey" style="color:blue">
 <tr>

                        <td>

                            <b>id:</b>

                        </td>

                        <td>						
&nbsp
      <b>                  
<input type="text"  name="id" value="
                            <?php 
							
$randomid = mt_rand(100000,999999); 
echo $randomid; 

?> "  style="color:green;" readonly></b>



                        </td>

                    </tr>
                    <tr>

                        <td>

                            <b>Name:</b>

                        </td>

                        <td>

                            <input type="text" name="name" placeholder="Enter your name">

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <b>Roll no</b>

                        </td>

                        <td>

                            <input type="text" name="roll" placeholder="eg :- 19302C0031">

                        </td>

                    </tr>
<tr>

                        <td>

                            <b>Phone no</b>

                        </td>

                        <td>

                          <label for="phone">Enter a phone number:</label><br><br>
						 &nbsp; <select name="ph" id="ph">
    <option value="india">+91</option>
   <!-- <option value="usa">+1</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option> -->
  </select>
  
  <input type="tel" id="phone" name="phone" placeholder="Enter 10 digit number" pattern="[0-9]{10}" required><br><br>
  
  

                        </td>

                    </tr>
                    <tr>

                        <td>

                            <b>Age</b>

                        </td>

                        <td>

                            <input type="text" name="age" placeholder="Enter your age">

                        </td>

                    

                    <tr>
<tr>

                        <td>

                            <b>Email</b>

                        </td>

                        <td>

                            <input type="email" name="email" placeholder="eg :- abc@gmail.com">

                        </td>

                    

                    <tr>
                        <tr>

                        <td>

                            <b>Password</b>

                        </td>

                        <td>

                            <input type="password" name="password" placeholder="********">

                        </td>

                    

                    <tr>
                        <td>

                            <b>Gender:</b>                       

                        </td>
<td></td>
                        </tr>

                    <tr>  

                        <td>

                            <input type="radio" name="gender" value="Male">Male

                        </td>

                        <td>

                            <input type="radio" name="gender" value="Female">Female

                        </td>

                        <td>

                            <input type="radio" name="gender" value="Other">Other

                        </td>
                        
                    </tr>

                    
                    <tr>

                        <td>

                            <b>Branch</b>

                        </td>

                        <td>

                            <select name="branch">
        <option selected disabled>Select branch</option>
        <option>B.Sc.IT</option>
        <option>BBI</option>
        <option>BMS</option>
        <option>BAF</option>
        <option>BFM</option>
        <option>B.Sc. Data Science</option>
        <option>BAMMC(BMM)</option>
        <option>M.Sc.IT</option>
        <option>M.Com(B&F)</option>
        <option>M.Com(AA)</option>
        <option>M.Com(Business Management)</option>
        <option>M.A.(Entertainment,Media and Advertising)</option>
        <option>Ph.D</option>
		<option>Other</option>
    </select>
                        </td>

                    </tr>   
<!---->
      <tr>


                        <td>

                            <select name="ques">
        <option selected disabled>Security Question</option>
        <option>What is your favourite colour?</option>
        <option>What is your car colour?</option>
        <option>what is your best friend name</option>
        
    </select>
                        </td>

                        <td>

                          <input type="text" name="ans" placeholder="Enter your answer" > 

                        </td>
                    </tr>              
                    <!---->
                    <tr>

                        <td>

                            <input type="submit" value="Submit" >

                        </td>

                        <td>

                            <input type="reset" value="Reset">

                        </td>
                    </tr>

                </table>

        </form>
       </center>
   </div>
  </div>

 
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
                        
                      </ul>
                    </div>
        </div>

    </footer>
<!---->

<!---->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="userlogin.php"><i class="fa fa-fw fa-user" style="color:cyan" ></i>login/signup</a>
      <a href="index.php">Home</a>
    
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
	<a href="blog.php">blog</a>
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

</body>
</html>


