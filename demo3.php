
<!DOCTYPE html>

<html>
<head>
    <title> blog</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
        .auto-style2 {
            margin-left: 0px;
        }
        .auto-style3 {
            width: 164px;
        }
        .auto-style4 {
            width: 519px;
        }
        </style>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
 /* display: none;  Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
        </style>
</head>
<body bgcolor="#f2f2f2" >
<div style="overflow-x:auto;">
    <form id="form1" method="post">
    <h1>Welcome to Admin Panel
        </h1>
        <div>
            <table  border="2" bgcolor="#f2f2f2">
                <tr>
                    <td  align="right" colspan="3">
                        
     <input type="submit" style="background-color:blue;color:white" value="Insert to blog">
<input type="submit" style="background-color:green;color:white" value="View blog Records">
<input type="reset" style="background-color:red;color:white" value="Reset">
<input type="submit" style="background-color:black;color:white" value="Back">
                    </td>
                     
                </tr>
            <tr>
                <td class="auto-style3">Title </td>

                <td class="auto-style4">
				<textarea type="text" rows="1" cols="70"></textarea>
				</td>
               
                <br>
            </tr>
             
               <tr>
                <td class="auto-style3">Category</td>
                <td class="auto-style4" width="100%"> 
				<select name="category" id="category">
				<option selected disabled>Select Categories</option>
    <option>Arts & Crafts</option>
    <option>Teachers Stationery</option>
    <option>College Materials</option>
    <option>Others</option>
  </select>
				</td>
              
            </tr> 
               
                 <tr>
                <td class="auto-style3">Published</td>
                <td class="auto-style4">
				<input type="time" id="time" name="time" > 

                </td>
                 <tr>
            <td class="auto-style3">Created</td>
                <td> 
				  <input type="date" id="date" name="date">
				</td>
               
                 
            </tr> 
                    
                <tr>
                    <td>
                        
                       upload Image

                        </td>
                    <td>
                        
                        <input type="file" id="myFile" name="filename">

                        </td>
                    </tr>

                    <tr>
                <td class="auto-style3">Post</td>
                <td class="auto-style4">
				<textarea type="text" rows="25" cols="70"></textarea>
				</td></form>
                <form>
                  <td style="background-color:black;color:cyan;border-color:white;border-style:ridge;" ><center><b style="text-decoration: underline yellow;">Add Products to blog</b>
				</center>
				<br>
				Product Name :-  <input type="text" id="pname" name="pname" placeholder="Enter Product name.."><br>
				Product qty :-  &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="qty" name="qty"  placeholder="Enter Product qty.."><br>
				Product price :- &nbsp;&nbsp;<input type="text" id="price" name="price"  placeholder="Enter Product price.."><br>
				Product description :- <br><textarea type="text" name="desc" rows="10" cols="70" placeholder="Enter product description.."></textarea><br>
			<center>	<input type="submit" style="background-color:blue;color:white" value="Add product to blog"> <input type="submit" style="background-color:yellow;color:brown" value="View product on blog"><input type="reset" style="background-color:red;color:white" value="Reset"> </center>
			</td> 
            </tr>
                </table>
				
        </div>
        <p>
            &nbsp;</p>
    </form>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>
</html>
