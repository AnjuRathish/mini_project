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
.xyz{
	position:relative;
	left:500px;
}
.o{
	width:500px;
	height:750px:
}
.p{
	position:absolute;
	top:400px;
	font-size:30;
}
.l{
	font-size:25;
}
.k{
	position:absolute;
	top:10px;
	left:20px;
	font-size:25;
	font-family:algerian;
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
<body bgcolor="">
<div class="topnav" id="myTopnav">
  <a href="formlofin.php">Home</a>
  <a href="dance.php">Dance</a>
  <a href="contact.php">Music</a>
  <a href="art.php">Art</a>  
  <a href="about.php">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<h1> <center>Contact us </center></h1><br><br><br><br><br><br><br>

<p><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="xyz">
 <img src="download.jpg" alt="image" class="o" >
 <div class="k">
   <b>&nbsp;Imagica <br> Art World</b>
 </div>
</div>
<div class="p">
<div class="l"><b>Address:</b><div>    
 &nbsp;&nbsp;&nbsp;imagica art world<br>   
 &nbsp;&nbsp;&nbsp;abc p.o. <br>
 &nbsp;&nbsp;&nbsp;xyz    <br><br>
<div class="l"><b>Email us at:</b></div>
 &nbsp;&nbsp;&nbsp;imagica123@gmail.com <br><br>
<div class="l"><b>contact number:</b><div>
 &nbsp;&nbsp;&nbsp;1230123045
 </div>
 </p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Help">HELP</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="PTA">PTA</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ALUMNI">ALUMNI</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="COMMITMENT">COMMITMENT</a>&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="FEEDBACK">FEEDBACK</a>&nbsp;&nbsp;&nbsp;
 <h3><p><center><b>@copy right</b></center></p></h3>
</body>
</html>