<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
. a{position:relative;
	align:center;
    }
.aa{
	width:500;
	height:500;
     }
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
<title>form</title>
</head>
<body bgcolor="bisque" >
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
</div>
<h1><center><font color="blue">your details</font></center></h1>
<table align="center">
<tr>
<th>Name</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area of Interest</th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username</th>
</tr>
<?php
 include("regcon.php");
$result=mysqli_query($con,"select * from registerdata");
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
	{
		?>
		<tr>
		<td> <?php echo $row[0];?></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[1];?></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[2];?></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[3];?></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4];?></td>
		</tr>
		<?php
	}
}
?>
</table>
<br><br>
<form method="post" action="formlogin.php">
<input type="submit" name="logout" value="logout">
</form>
<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 <a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 <a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 <a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 <a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>
