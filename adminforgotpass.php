  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School & College Accessory site</title>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/footer.css">
</head>
<body>

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
 <div class="topnav" id="myTopnav">
 <a href="cart.php" style="float:left;"><i style='font-size:25px;color:yellow;' class='fas'>&#xf290</i></a>

  <a href="#home"><i class="fa fa-fw fa-home" style="font-size:18px"></i>Home</a>
  <a href="about.php">
About <i class="fa fa-info-circle"></i></a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
  <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-shopping-cart" style="font-size:18px" ></i> Shop 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
    </div>
  </div> 
  <a href="userlogin.php"><i class="fa fa-fw fa-user" ></i>login/signup</a>
  
 <!-- <a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="myFunction()">&#9776;</a>-->
  <!--<span style="font-size:35px;cursor:pointer;float:right;padding-right:15px;color:white; " onclick="openNav()">&#9776; </span>-->
<a href="javascript:void(0);" style="font-size:25px;" class="icon" onclick="openNav()">&#9776;</a>
</div>
</div>
<div style="">
    <center>
<h1>Forgot Password</h1>
<form action="forgot-process1.php" method="post"><br><br>
     Email ID:<input type="text" name="email" placeholder="Enter Registered Email " required><br><br>
      
      Question:<select name="ques">
        <option selected disabled>Security Question</option>
        <option>What is your favourite colour?</option>
        <option>What is your car colour?</option>
        <option>what is your best friend name</option>
		
        
      </select><br><br>
     Answer:<input type="text" name="ans" placeholder=" Enter your answer " /><br><br>
New Password:<input type="text" name="password"  placeholder=" new password to set " /><br><br>

<input type="submit" value="Save" />  &nbsp;<input type="reset" value="Reset"> &nbsp;
</form>



</center>
</div>

  

 
   

<body>
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
      <a href="#home">Home</a>
      
   
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a><div class="dropdown">
    <a style="float:center;padding-left:200px">Shop</a>
      <div class="dropdown-content1">
      <a href="#">Arts & Ctrafts</a>
      <a href="#">Teachers Stationery</a>
      <a href="#">College materials</a>
      </div>
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

</body>
</html>
