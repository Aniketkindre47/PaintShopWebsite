<html>
<head>
<title>Register</title>
<style type="text/css">
<!--
.style7 {font-family: "Times New Roman", Times, serif; font-size: x-large; font-weight: bold; font-style: italic; }
.style8 {
	color: #A20222;
	font-size: large;
	font-weight: bold;
	font-style: italic;
}
.style9 {color: #800040}
.style11 {font-family: "Times New Roman", Times, serif; font-size: x-large; font-weight: bold; font-style: italic; color: #800040; }
-->
</style>
</head>
<body><p align="center">&nbsp;
</p>
<p align="center"><a href="home.php"><img src="images/PS_01_Logo_F.jpg" align="middle"></a></p>
<br><br><hr><br><br>
<table width="490" height="380" align="center"> 
  <tr><td width="517" height="374">
<form action="signup.php" method ="POST" name="register_form">
  <table width="484" height="328" id="title">
    <tr>
      <td width="186"><div align="right" class="style7 style9">First Name:</div></td>
        <td width="286"><input type="text" id="fname" name="fname" width="200" /></td>
      </tr>
    <tr>
      <td><div align="right" class="style7 style9">Last Name:</div></td>
        <td><input type="text" id="lname"name="lname" width="200" class="reuired"/></td>
      </tr>
    <tr>
	<tr>
      <td><div align="right" class="style7 style9">Mobile:</div></td>
        <td><input type="text" id="mobile" name="mobile" width="200"/></td>
      </tr>
    <tr>
	<tr>
      <td><div align="right" class="style7 style9">Email-Id:</div></td>
        <td><input type="text" id="email" name="email" width="200"/></td>
      </tr>
    <tr>
      <td><div align="right" class="style7 style9">Address:</div></td>
        <td><input type="text" id="address" name="address" width="200" /></td>
      </tr>
    <tr>
      <td><div align="right" class="style7 style9">Username:</div></td>
        <td><input type="text" id="username" name="username" width="200"/></td>
      </tr>
    <tr>
      <td><div align="right" class="style7 style9">Password:</div></td>
        <td><input type="password" id="password" name="password" width="200"/></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Sign Up"  onClick="return validateForm()" style="background-color:#CCCCCC; width:70px;height:30px"/>
		<input type="reset" name="clear" style="background-color:#CCCCCC; width:60px;height:30px">		</td>
      </tr>
  </table>
</form>
</td></tr></table>
<div align="center"><span class="style8">Go to... <a href="index.html">login </a></span><br>
  <br>
</div>
<hr><br><br>



<?php
if (isset($_POST['submit']))
    {      
    include "db.php";

                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
					          $mobile=$_POST['mobile'];
					          $email=$_POST['email'];                 
                    $address=$_POST['address'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];

         if(mysqli_query($conn,"insert into `database` (`fname`, `lname`, `mobile`, `email`, `address`, `username`, `password`) values ('$fname','$lname','$mobile','$email','$address','$username','$password')"))
		      {
		       echo"<script> alert('Registrstion successful')</script>";
		      header('Location:home.php');
		      } 
		 else
		      {
		    echo"<script> alert('Fail try Again')</script>";
		      }
			}
?>
</body>
</html>
<script>
function validateForm() {
    var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var mobile = document.getElementById("mobile").value;
	var email = document.getElementById("email").value;
	var address = document.getElementById("address").value;
	var uname = document.getElementById("username").value;
	var pwd = document.getElementById("password").value;
    if (fname == ""||fname==null) {
        alert(" First Name must be filled out");
        return false;
    }
	if (lname == ""||lname==null) {
        alert(" Last Name must be filled out");
        return false;
    }
	if (mobile == ""||mobile==null) {
        alert("Enter Mobile Number");
        return false;
    }
	if (email == ""||email==null) {
        alert("Enter Valid Email  Id");
        return false;
    }
	if (address == ""||address==null) {
        alert("Please Enter The Address");
        return false;
    }
	if (uname == ""||uname==null) {
        alert("Enter User Name");
        return false;
    }
	if (pwd == ""||pwd==null) {
        alert("Please Enter Password ");
        return false;
    }
	 
}

</script>
