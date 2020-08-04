<html>
<head>
<style>

	 body {
  margin: 20;
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
}
p{
	font-size:20;
}
</style>
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
<body>
<div class="topnav" id="myTopnav">
  <a href="formlogin.php">Home</a>
  <a href="dance.php">Dance</a>
  <a href="contact.php">Music</a>
  <a href="art.php">Art</a>  
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<p>
<h2><center><b>About Us</b></center></h2>
imagica is an institution not merely for the development of art.
 It exists in order that youth may be educated, 
not to become artists alone, but to have the right attitude to life, 
the right attitude to art, in order that they may be of great service to our country.<br><br><br>
<img src="mad2.jpg" alt="image">
<h1><center>Thank You..!!!!</center></h1>
</p><br><br><br><br><br><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>