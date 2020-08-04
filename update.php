<?php
session_start();
include("regcon.php");
if(isset($_POST['update']))
{
$name=$_POST['name'];
$username=$_POST['ADD'];
$password=$_POST['password'];
$contact=$_POST['nmbr'];
$vnmt=$_SESSION["vnm"];
$p=$_SESSION["pwd"];
$_session["abc"]=$username;
mysqli_query($con,"update registerdata set name='$name',contact='$contact',username='$username',password='$password' where username='$vnmt' and password='$p'");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title></title>
<style>
body {
  margin: 0;
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
	
	function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
	</script>
</head>
<body bgcolor="burlywood"> 
<h3>update form</h3>
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
</div><br><br><br><br><br>
			<form method="post" name="myform" onsubmit="validateform()">
			Name: <input name="name" type="text"/><br><br><br>
			Username: <input name="ADD" type="text"/><br><br><br>
			Password: <input name="password" type="text"/><br><br><br>
			contact:<input name="nmbr" type="text"/><br><br>
			<input name="update" type="Submit" value="update" /><br><br><br>
			</form>
<a href="user.php">view the updated details</a><br><br><br><br><br>
<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 <a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 <a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 <a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 <a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>