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
          <a href="#" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
        <!--  <a href="#">
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
          <a href="userdetails.php">
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
        <!--  <a href="#">
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
      <div class="search-box">
       <!-- <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i-->
      </div>
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
          <div class="title">Product details</div>
          <div class="sales-details">
            <ul class="details">
              <form name="form1" action="" method="post">
	<table>
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
	<td>Name</td>
	<td><input type="text" name="name" placeholder="Enter Product name.."></td>
	</tr>
	<tr>
	
	
	<td>

                            <b>category</b>

                        </td>

                        <td>

                            <select name="category">
        <option selected disabled>Select category</option>
        <option>Arts & Crafts</option>
        <option>Teachers Stationery</option>
        <option>College Materials</option>
		<option>Other</option>
    </select>
                        </td>

                    </tr>   
	<tr>
	<td>Price</td>
	<td><input type="text" name="price" placeholder="Enter Price.."></td>
	</tr>
	<tr>
	<td>Qty</td>
	<td><input type="text" name="qty" placeholder="Enter Available Qty.."></td>
	</tr>
	<td>image</td>
	<td><input type="file" 
                   name="img" 
                   value="" /></td>
	</tr>
	<td>Discount</td>
	<td><input type="text" name="discount" placeholder="Enter discount here.."></td>
	</tr>
	<td>Description</td>
	<td>
	<textarea rows="4" cols="50" name="description" placeholder="Enter description..">
</textarea>

	</td>
	</tr>
	
	
	<td colspan="2" align="center">
	<input type="submit" name="submit1" value="insert">
	<input type="submit" name="submit2" value="delete">
	<input type="submit" name="submit3" value="update">
	<input type="submit" name="submit4" value="display">
	<input type="submit" name="submit5" value="search"> 
	<input type="reset" value="Reset">
	</td>
	</tr>
	</table>
	</form>
			
			  
			  
			  </ul>
          </div>
          
        </div>
        <div class="top-sales box">
          <div class="title">View products</div>
          <ul class="top-sales-details">
           <?php
	if(isset($_POST["submit1"]))
	{
		mysqli_query($conn,"insert into products values('$_POST[id]','$_POST[name]','$_POST[category]','$_POST[price]','$_POST[qty]','$_POST[img]','$_POST[discount]','$_POST[description]')");
		echo "record saved successfully!!! ";
	}
	if(isset($_POST["submit2"]))
	{
		mysqli_query($conn,"delete from products where name='$_POST[name]' or category='$_POST[category]'");
		echo "record deleted successfully!!! ";
	}
	if(isset($_POST["submit3"]))
	{
		mysqli_query($conn,"update products set category='$_POST[category]' or price='$_POST[price]' or qty='$_POST[qty]' or img='$_POST[img]' or discount='$_POST[discount]' or description='$_POST[description]' where name='$_POST[name]'");
		echo "record updated successfully!!! ";
	}
	if(isset($_POST["submit4"]))
	{
		$res=mysqli_query($conn,"select * from products");
		echo"<table border=1>";
		
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
		echo"<b>category</b>: ";
		echo $row["category"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>price </b>: ";
		echo $row["price"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>qty </b>: ";
		echo $row["qty"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>";
		echo"<b>img </b>: ";
		echo"<img src='images/";
		echo $row["img"];
		echo" ' width='300px'>";
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>discount </b>: ";
		echo"<p style='color:green;'><b>";
		echo $row["discount"];
		echo"%off </b></p>";
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>description </b>: ";
		echo $row["description"];
		echo"<hr color='cyan'>";
		echo "<hr color='red'>";
		echo"</td>";
		echo"</tr>";
	}
	echo"</table>";
	}
	if(isset($_POST["submit5"]))
	{
		$res=mysqli_query($conn,"select * from products where  name='$_POST[name]' or category='$_POST[category]' or price='$_POST[price]' or qty='$_POST[qty]' or img='$_POST[img]' or discount='$_POST[discount]' or description='$_POST[description]'");
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
		echo"<b>category</b>: ";
		echo $row["category"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>price </b>: ";
		echo $row["price"];
		echo"<hr color='cyan'>";
		echo"</td>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>qty </b>: ";
		echo $row["qty"];
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";

		echo"<tr>";
		echo"<td>";
		echo"<b>img </b>: ";
		echo"<img src='images/";
		echo $row["img"];
		echo" ' width='300px'>";
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>discount </b>: ";
		echo"<p style='color:green;'><b>";
		echo $row["discount"];
		echo"%off </b></p>";
		echo"<hr color='cyan'>";
		echo"</td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td>";
		echo"<b>description </b>: ";
		echo $row["description"];
		echo"<hr color='cyan'>";
		echo "<hr color='red'>";
		echo"</td>";
		echo"</tr>";
	}
	echo"</table>";
	}
	?>
          </ul>
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

