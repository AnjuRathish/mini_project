<?php
session_start();
if(isset($_POST['submit']))
{
 $uname=$_POST['name'];
 $password=$_POST['psswd'];
 include("regcon.php");
 $s=mysqli_query($con,"select * from registerdata where username='$uname' and password='$password'" );
 if(mysqli_num_rows($s)>0)
 {
	$rows=mysqli_fetch_array($s);
  if($rows[4]==$uname && $rows[5]==$password)
	{
		$_SESSION["vnm"]=$uname;
		$_SESSION["pwd"]=$password;
	header('location:user.php');
	}
 }
  else
  {
	  //echo "invalid";
	  //exit;
	  echo "<script>alert('invalid');</script>";
  }
}
if(isset($_POST['login']))
{
	$name=$_POST['nam'];
    $password=$_POST['pswd'];
 include("regcon.php");
 $t=mysqli_query($con,"select * from registerdata where username='$name' and password='$password'" );
 if(mysqli_num_rows($t)>0)
 {

	$rows=mysqli_fetch_array($t);

  if($rows[0]=$name && $rows[0]=$password)
  {
	header('location:admin.php');
  }
 }
  else
   {
	  //echo "invalid";
	  //exit;
	  echo "<script>alert('invalid');</script>";
    }
}
  ?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
. a{position:absolute;
	
	top:100px;
    }
.aa{
	top:500px;
	width:1550px;
	height:700px;
     }
	 body {
  margin: 10;
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
  .topnav.responsive .icon
  {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a
  {
    float: none;
    display: block;
    text-align: left;
  }
  . a
  {position:absolute;
  }
.aa{
	top:200px;
	width:580px;
	height:300px;
   }
}
</style>
<title>form</title>
<script type="text/javascript">
	function validateform()
	{ 
		var uname=document.myform.name.value; 
		var password=document.myform.psswd.value;
		if(uname===null || uname==="") 
	 	{ 
			alert("Please enter the username"); 
			return false; 
		}else if(password===null || password==="" )
		{
			alert("Please enter the password"); 
			return false; 
		}
	}
	function validation()
	{ 
		var aname=document.form1.nam.value; 
		var password=document.form1.pswd.value;
		if(aname===null || aname==="")
	 	{ 
			alert("Please give your user id"); 
			return false; 
		}
		 else if(password===null || password==="" )
			 { 
			alert("Please give your password"); 
			return false; 
		}

	}
	</script>
	<script>
	
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
<body bgcolor="bisque" >
<div class="topnav" id="myTopnav">
  <a href="dance.php">Dance</a>
  <a href="contact.php">Music</a>
  <a href="art.php">Art</a>  
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div>
  <div class="a">
  &nbsp;&nbsp;<img src="mainimg.jpg" class="aa" alt="image"/><br><br>
   </div>
  <a href="javascript:void(0);">
  </a>
</div>
<center>
<form method="post" name="myform" onsubmit="validateform()">
<h1 align="center"><b>welcome</b></h1><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3><b><u>user login</u></b></h3>
&nbsp;&nbsp;&nbsp;username:<input type="text" name="name"/><br><br><br>
&nbsp;&nbsp;&nbsp;password:<input type="password"  name="psswd" /><br><br>
&nbsp;&nbsp;&nbsp;<input type="reset" value="clear"/>
&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="log in"/>
</form>
<b>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</b><br><br>
<form method="post" name="form1" onsubmit="validation()"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3><b><u>admin login</u></b></h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username:<input type="text" name="nam"/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;password:<input type="password"  name="pswd" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="clear"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="log in" />
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p><a href="reg.php"> for registration click here </a></p><br><br><br><br><br><br><br><br><br><br><br><br>
</center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>