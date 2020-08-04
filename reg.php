<?php
include("regcon.php");
if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$username=$_POST['ADD'];
$password=$_POST['password'];
$contact=$_POST['nmbr'];
$address=$_POST['AD'];
$interest=$_POST['interest'];
mysqli_query($con,"insert into registerdata(name,contact,address,interest,username,'password')values("$name","$contact","$interest","$username","$password")"); 
}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 10px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<script type="text/javascript">
	function validateform()
	{ 
		var name=document.myform.name.value;
		var contact=document.myform.nmbr.value;		
		var address=document.myform.AD.value;
		var area=document.myform.interest.value;
		var username=document.myform.ADD.value; 
		var password=document.myform.password.value;
		
		if(name===null || name==="" )
			{
				alert("Please fill the name field"); 
				return false; 
			}
			else if(username==="" || username===null) 
			{
				alert("Please fill the username"); 
				return false; 
			}
			else if(contact==="" || contact===null)
			{
				alert("Please fill the contact"); 
				return false; 
			
			else if(address==="" || address===null) 
			{
				alert("Please fill the address"); 
				return false; 
			}
			else if(area==="" || area===null) 
			{
				alert("Please fill the area"); 
				return false; 
			}
			else if(password==="" || password===null)  
			{
				alert("Please fill the password"); 
				return false; 
			}
			else if(isNaN(contact)||contact.length!==10)
				
			{
				alert("Invalid Contact"); 
				return false;
			}

			else
			{
				alert("registration successful");
				header('location:formlogin.php');
			}
	}
	
	function myFunction() 
	{
		var x = document.getElementById("myTopnav");
			if (x.className === "topnav") 
			{
				x.className += " responsive";
			} else 
				{
					x.className = "topnav";
				}
	}
</script>
</head>
<body bgcolor="bisque"> 
<div class="topnav" id="myTopnav">
  <a href="formlogin.php" class="active">Home</a>
  <a href="dance.php">Dance</a>
  <a href="contact.php">Music</a>
  <a href="art.php">Art</a>  
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><br><br><center>
<form method="post" name="myform" onsubmit="validateform()">
&nbsp;&nbsp;&nbsp; Name: <input name="name" type="text"/><br><br>
&nbsp;&nbsp;&nbsp; contact:<input name="nmbr" type="text"/><br><br>
&nbsp;&nbsp;&nbsp; Address:<textarea name="AD" type="text"></textarea><br><br>
&nbsp;&nbsp;&nbsp; Area of interest: <select name="interest">
									 <option value="Dance">Dance</option>
									 <option value="Music">Music</option>
									 <option value="Art">Art</option>
									 </select><br><br>
&nbsp;&nbsp;&nbsp; username:<input name="ADD" type="text"/><br><br>
&nbsp;&nbsp;&nbsp; Password: <input name="password" type="password"/>
&nbsp;&nbsp;&nbsp;<P><font color="red">*enter the password in only digits</font></P><br>
&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" value="reset" />
&nbsp;&nbsp;&nbsp; <input name="Submit" type="Submit" value="Submit" />
</form>
</center><br><br><br><br><br><br><br><br>
<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 <a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 <a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 <a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 <a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>