<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VR Surfing</title>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
	
</head>
	<style>
	


* {
    padding:0;
    margin:0;
}	
	
	
.video-container {
  position: relative;
	margin-top: 5%;
	
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
	
		.vrh{
			font-family: 'Amatic SC', cursive;
			font-size: 600%;
			color:cadetblue;
			text-align: center;
			padding-top: 4%;
		}
		
		.vrp{
			font-family: 'Amatic SC', cursive;
			font-size: 200%;
			color:black;
			text-align: center;
			padding-top: 4%;
		}
		
		.vcenter{
			display: block;
    margin: auto;
			padding-bottom: 4%;
		}

.parallax {
    /* The image used */
    background-image: url("wwall.jpeg");
	

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}				
		
		
		
		
		
		
		
		
	
	</style>

<body>
	
<div class="form">
	<div class="navbar">
  <a href="home.php">Home</a>
  <a href="dashboard.php">About</a>

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
      <a href="#">VR Surfing</a>
      <a href="custom/custom.php">Custom Board</a>
      <a href="merch/products.php">Merchandising</a>
    </div>
  </div> 
	<a href="logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>	
	
	<div class="parallax">
	
	<h1 class="vrh">Virtual Reality Surfing Lessons</h1>
	<p class="vrp">Pacifica recommends you to play the video in full screen and navigate in HD through the whole experience.<br>Get ready to learn how to surf in virtual reality, with this 360 view video made by big-wave surfer <b>Kyle Thiermann.</b><br> Experiencing this can also help you get prepared to be familiar with the real experience, or to just make you feel at easy if you miss surfing. </p>
	
<div class="video-container">
 
 
 <!-- my header --> 
	
   
	   <iframe class="vcenter" width="1083" height="600" src="https://www.youtube.com/embed/pFzHrgdUTdc?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
	
     </div>	
	
	
	
	<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>	
	
</body>
</html>
