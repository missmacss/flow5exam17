<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">	
	
<style>

* {
    padding:0;
    margin:0;
}	
	
	
.video-container {
  position: relative;
}

.vheader {
top: 0;
  height: auto;
  vertical-align: middle;
  width: 100%;
	z-index: -1;
}
.overlay-desc {
  background: transparent;
  position: absolute;
 /* top: 0; left: 0; right: 0; bottom: 0; */
  display: flex;
  align-items: center;
  justify-content: center;
	width: 30%;
	margin-top: 9%;
	margin-left: 33%;
	
	

}	
	
	
.navbar {
    overflow: hidden;
    background-color: cadetblue;
    font-family: 'Amatic SC', cursive;
	
	letter-spacing: 2px;
	
	
}

.navbar a {
    float: left;
    font-size: 30px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}

.dropdown {
    float: left;
    overflow: hidden;
	
}

.dropdown .dropbtn {
    font-size: 30px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
	font-family: 'Amatic SC', cursive;
	letter-spacing: 2px;
	
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: yellowgreen;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 2;
	
    
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
	
	
	.footer {
			background-color: cadetblue;
			height: 200px;
			padding-left: 20%; 
			
			
			
		}	
	
	
	
	.f {
			font-family: 'Amatic SC', cursive;
			color: white;
			font-size: 30px;
		}	
	
	
	
	
	
	
	
	
	
	</style>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

</head>
<body>
<div class="form">



	<div class="navbar">
  <a href="#home">Home</a>
  <a href="dashboard.php" target="_blank">About</a>

<a href="http://www.worldsurfleague.com/" target="_blank">Surf News</a>
	<a href="https://magicseaweed.com/" target="_blank">Surf Reports</a>
		
  <div class="dropdown">
    <button class="dropbtn">Surf Library 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="library/library.php#history" target="_blank">History</a>
      <a href="library/library.php#slang" target="_blank">Slang</a>
      <a href="library/library.php#surfboards" target="_blank">Surfboards</a>
	<a href="library/library.php#apparel" target="_blank">Apparel</a>
		<a href="library/library.php#report" target="_blank">Reports</a>
		<a href="library/library.php#start" target="_blank">Start</a>
		<a href="library/library.php#tricks" target="_blank">Tricks</a>
		
	
    </div>
  </div> 
	
<div class="dropdown">
    <button class="dropbtn">Interactive 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="virtualreality.php" target="_blank">VR Surfing</a>
      <a href="custom/custom.php" target="_blank">Custom Board</a>
      <a href="merch/products.php" target="_blank">Merchandising</a>
    </div>
  </div> 
	<a href="logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>
	
	
<!-- home section -->

<div class="video-container">
 
 
 <!-- my header --> 
  <img src="logotypo.svg" class="overlay-desc">
	
   
	   <video class="vheader" autoplay loop position="fixed" z-index="1" width=" 100%">
		     <source src="hurricane.mp4" type="video/mp4">
		     
	</video>
     </div>
	
	
	
<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
</div>
</body>
</html>
