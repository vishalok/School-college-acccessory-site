
<?php
$sname = "localhost";
$uname = "root";
$password = "1234";

$db_name = "project";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$con=mysqli_select_db($conn,$db_name);

if($con)
{
	echo("connection ok");

}else{
	die("failed connection".mysqli_connect_error());

}

	?>
	<html>
	<body>
	<form name="form1" action="" method="post">
	<table>
	
	<tr>
	<td>name</td>
	<td><input type="text" name="name" placeholder="Enter name"></td>
	</tr>
	<tr>
	<td>Roll no</td>
	<td><input type="text" name="roll" placeholder="Enter Roll no"></td>
	</tr>
	<tr><td> phone</td>
	
  </tr>
	<tr>
	<td>
	<select name="ph" id="ph">
    <option value="india">+91</option>
   <!-- <option value="usa">+1</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option> -->
  </select>
  </td>
	<td> <input type="tel" id="phone" name="phone" placeholder="Enter 10 digit number" pattern="[0-9]{10}"></td>
	</tr>
	<tr>
	<td>Age</td>
	<td><input type="text" name="age" placeholder="Enter age"></td> 
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="email" name="email" placeholder="Enter email"></td>
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
	</body>
	</html>
	
	<?php
	if(isset($_POST["submit1"]))
	{
		mysql_query($conn,"insert into usertable values('$_POST[name]','$_POST[roll]','$_POST[email]')");
		echo "recor saved successfull ";
	}
	if(isset($_POST["submit2"]))
	{
		mysqli_query($conn,"delete from usertable where email='$_POST[email]'");
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
		$res=mysqli_query($conn,"select * from usertable where name='$_POST[name]'");
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
	?>