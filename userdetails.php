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
<!---->
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='css/boxicons.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
     <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name"> &nbsp;Company logo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admindash.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
      <!--    <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>-->
          <a href="userdetails.php"class="active" >
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="message.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
      <!--    <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>-->
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <!--div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div-->
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">
		<div style="text-align:right;color:blue;">
<b><?php echo $_SESSION['email']; 

?></b>
</div>
		</span>
        <i class='bx bx-chevron-down' > </i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">User details</div>
          <div class="sales-details">
            <ul class="details">
              
              <li>
			  <form name="form1" action="" method="post">
	<table>
	
	<tr>
	<td>Enter name</td>
	<td><input type="text" name="name"></td>
	</tr>
	<tr>
	<td>Enter Roll no</td>
	<td><input type="text" name="roll"></td>
	</tr>
	<tr>
	<td>Enter email</td>
	<td><input type="email" name="email"></td>
	</tr>
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
	<tr>
	
	<td colspan="2" align="center">
	<!--input type="submit" name="submit1" value="insert"-->
	<input type="submit" name="submit2" value="delete">
	<!--input type="submit" name="submit3" value="update"-->
	<input type="submit" name="submit4" value="display">
	<input type="submit" name="submit5" value="search"> 
	<input type="reset" value="Reset">
	</td>
	</tr>
	</table>
	</form>
			  
			  </li>
            </ul>
            
          </div>
          
        </div>
        <div class="top-sales box">
          
	<?php
	if(isset($_POST["submit1"]))
	{
		mysql_query($conn,"insert into usertable values('$_POST[name]','$_POST[roll]','$_POST[email]')");
		echo "recor saved successfull ";
	}
	if(isset($_POST["submit2"]))
	{
		mysqli_query($conn,"delete from usertable where name='$_POST[name]' or roll='$_POST[roll]' or email='$_POST[email]' ");
		echo "record deleted successfull ";
	}
	if(isset($_POST["submit3"]))
	{
		mysql_query($conn,"update usertable set email='$_POST[email]' where roll='$_POST[roll]'");
		echo "record updated successfull ";
	}
	if(isset($_POST["submit4"]))
	{
		$res=mysqli_query($conn,"select * from usertable");
		echo"<table border=1>";
		echo"<tr>";
		echo"<th>";
		echo"name";
		echo"</th>";
		
		echo"<th>";
		echo"roll";
		echo"</th>";
		
		echo"<th>";
		echo"email";
		echo"</th>";
		echo"</tr>";
    while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo"<td>";
		echo $row["name"];
		echo"</td>";
		echo"<td>";
		echo $row["roll"];
		echo"</td>";
		echo"<td>";
		echo $row["email"];
		echo"</td>";
		echo"<tr>";
		
	}
	echo"</table>";
	}
	if(isset($_POST["submit5"]))
	{
		$res=mysqli_query($conn,"select * from usertable where name='$_POST[name]' or roll='$_POST[roll]' or email='$_POST[email]' or branch='$_POST[branch]'");
		echo"<table style='border-color:blue;' border=1>";
		
		
		
	while($row=mysqli_fetch_array($res))
	{

		echo"<tr>";
		echo"<td>";
		echo"<hr color='red'>";
		echo"<b>id </b>: ";
		echo $row["id"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>Name </b>: ";
		echo $row["name"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>Roll </b>: ";
		echo $row["roll"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>country </b>: ";
		echo $row["ph"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>phone </b>: ";
		echo $row["phone"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>";
		echo"<b>email </b>: ";
		echo $row["email"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>gender </b>: ";
		echo $row["gender"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>branch </b>: ";
		echo $row["branch"];
		echo"<hr color='cyan'>";
		echo "<hr color='red'>";
		echo"</td>";
		echo"</tr>";
	}
	echo"</table>";
	}
	?>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

