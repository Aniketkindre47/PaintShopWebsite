<html>
<head>
<title>Paint shop</title>
<style type="text/css">
<!--
.style9 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-style: italic; font-size: 18px; color: #333333; }
-->
</style>
</head>
<body>
<br><center>
<img src="images/PS_01_Logo_F.jpg"  hspace="180" ></center>
<br>
<br>
<hr>
<br>
<br>
<br>
<form action="order.php" method="POST" name="f1">
  <table width="591" height="440" border=0 align=center>
<tr>
	<th width="224" align="left"><div align="left"><span class="style9">Full name: </span></div></th>
	<td colspan=4><input type="text" id="name" name="name" size=50></td>
</tr>
<tr>
	<th align="left"><div align="left"><span class="style9">e.mail ID: </span></div></th>
	<td colspan=4><input type="text" id="email" name="email" size=50></td>
</tr>
<tr>
	<th align="left"><div align="left"><span class="style9">Mobile number: </span></div></th>
	<td colspan=4><input type="text" id="mobile" name="mobile" size=30></td>
</tr>
<tr>
	<th align="left"><div align="left"><span class="style9">Landline number :</span></div></th>
	<td colspan=4><input type="text" id="land" name="land" size=30 ></td>
</tr>
<tr>
	<th align="left" valign="top"><div align="left"><span class="style9">Address:</span></div></th>
	<td colspan=4><input type="text" id="addr" name="addr" size=50></td>
</tr>
<tr>
<th align="left" valign="top"><div align="left"><span class="style9">Order things name <br>and color code:</span></div></th>
<td colspan="4"> <input type="text" id="order" name="order" size=50> </td>
<td width="4"></td>
</tr>
<tr>
	<th align="left"><div align="left"><span class="style9">Special requirements if any    :</span></div></th>
	<td colspan=4><input type="text" id="special" name="special" size=50></tr>
<tr>
	<td colspan=2 align="center"><input type="submit" name="submit" value="order" onClick="return validate()" style="background-color:#890A46">
	<input type="reset" name="s2" value="clear" style="background-color:#890A46"></td>
</tr>
</table>
</form>
<br>
<br>
<br>
<hr>
</body>
</html>

<script>
function validate()
{

var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var mobile=document.getElementById("mobile").value;
var tel=document.getElementById("land").value;
var address=document.getElementById("addr").value;
var name_code=document.getElementById("order").value;
var other=document.getElementById("special").value;
if (name == ""||name==null) {
        alert("Enter Full Name");
        return false;
    }
	if (email == ""||email==null) {
        alert("Enter Email Id");
        return false;
    }
	if (mobile == ""||mobile==null) {
        alert("Enter Mobile Number");
        return false;
    }
	if (tel == ""||tel==null) {
        alert("Enter Telephone Number");
        return false;
    }
	if (address == ""||address==null) {
        alert("Please Enter Address");
        return false;
    }
	
	if (name_code== ""||name_code==null) {
        alert("Enter Color code or Product Name");
        return false;
    }
	if (other == ""||other==null) {
        alert("Enter Special Details");
        return false;
    }
}

</script>

<?php
if (isset($_POST['submit']))
    {      
    include "db.php";
                    $name=$_POST['name'];
                    $email=$_POST['email'];                 
                    $mob=$_POST['mobile'];
                    $land=$_POST['land'];
                    $addr=$_POST['addr'];
					$order=$_POST['order'];
                    $special=$_POST['special'];
					

  if(mysqli_query($conn,"insert into order values ('','$name','$email','$mob','$land','$addr','$order','$special')"))
		{
		 echo"<script> alert('Your Order is successfully place')</script>";
		 header('Location:insert.php');
		} 
		else
		{
		echo mysqli_error($conn);
		 //echo"<script> alert('Order can not place')</script>";
		}
      }
		
?>


	
	
			
		