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
<title>Custom SurfBoard</title>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
	
</head>
	<style>
	


* {
    padding:0;
    margin:0;
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
			margin-top: 20%;
			
			
		}	
	
	
	
	.f {
			font-family: 'Amatic SC', cursive;
			color: white;
			font-size: 30px;
		}	
	
		.vrh{
			font-family: 'Amatic SC', cursive;
			font-size: 600%;
			color:white;
			text-align: center;
			padding-top: 4%;
		}
		
		.vrp{
			font-family: 'Amatic SC', cursive;
			font-size: 200%;
			color:cadetblue;
			text-align: center;
			padding-top: 4%;
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
		
		
		
		
	/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: white;
	margin-top: 10%;
	
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 200%;
	font-family: 'Amatic SC', cursive;
	color: darkgray;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: greenyellow;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: cadetblue;
	color:white;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
	margin-bottom: 20%;
	background-color: white;
	font-family: 'Amatic SC', cursive;
	color: darkgray;
	font-size: 200%;
}	
		
		

		
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(255,255,255,0.10);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: left;
    margin-top: 30px;
    color:white;
	margin-left: 11.8%;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	</style>

<body>
	
<div class="form">
	<div class="navbar">
  <a href="../home.php">Home</a>
  <a href="../dashboard.php">About</a>

<a href="http://www.worldsurfleague.com/" target="_blank">Surf News</a>
	<a href="https://magicseaweed.com/" target="_blank">Surf Reports</a>
		
  <div class="dropdown">
    <button class="dropbtn">Surf Library 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
     <a href="../library/library.php#history" target="_blank">History</a>
      <a href="../library/library.php#slang" target="_blank">Slang</a>
      <a href="../library/library.php#surfboards" target="_blank">Surfboards</a>
	<a href="../library/library.php#apparel" target="_blank">Apparel</a>
		<a href="../library/library.php#report" target="_blank">Reports</a>
		<a href="../library/library.php#start" target="_blank">Start</a>
		<a href="../library/library.php#tricks" target="_blank">Tricks</a>
		
	
    </div>
  </div> 
	
<div class="dropdown">
    <button class="dropbtn">Interactive 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../virtualreality.php">VR Surfing</a>
      <a href="#">Custom Board</a>
      <a href="../merch/products.php">Merchandising</a>
    </div>
  </div> 
	<a href="../logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>	
	
	<div class="parallax">
	
	<h1 class="vrh">A Pacifica Surfboard</h1>
	<p class="vrp">Get yourself a custom made surfboard with Pacifica's signature.This is a BETA version, so it only has one template to choose for you board<br>and only 3 surfboard models that you can personalize. Click on the tabs below to pick your board, and on the green title to open your template in order to place it<br> in the desired area. Once your board it's finished, print screen it and send it to: <a href="http://www.adamssurfboards.co.uk/order/" style="text-decoration: none;color: white;font-weight: bold;" target="_blank">Adams Surfboards</a>. <br>They cut, shape and paint the board of your dreams, with the best prices and the cheapest delivery.</p>
	

 
 
 <!-- content here --> 
	
   
	  
 
 
 <!-- my header --> 
	
   <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Short')">Shortboard</button>
  <button class="tablinks" onclick="openCity(event, 'Fish')">Fishboard</button>
<button class="tablinks" onclick="openCity(event, 'Egg')">Eggboard</button>

</div>

<div id="Short" class="tabcontent">
  <h3>Click on the title below, to decorate your board</h3><br>
	<p><span style="font-size:30px;cursor:pointer;color:greenyellow;font-weight: bold;" onclick="openTem()">Pacifica's Logo</span></p><br>
 <p>scroll up and down to place the template on your prefered board area,<br> print screen and send it to Adams Surfboards, to buy your personalized board.</p>
	
	<img src="shortboard.JPG" width="30%">
</div>
		  

		  
<div id="Fish" class="tabcontent">
  <h3>Click on the title below, to decorate your board</h3><br>
	<p><span style="font-size:30px;cursor:pointer;color:greenyellow;font-weight: bold;" onclick="openTem()">Pacifica's Logo</span></p><br>
 <p>scroll up and down to place the template on your prefered board area,<br> print screen and send it to Adams Surfboards, to buy your personalized board.</p>
	
	<img src="fishboard.jpg" width="30%">
</div>



		  
<div id="Egg" class="tabcontent">
 <h3>Click on the title below, to decorate your board</h3><br>
	<p><span style="font-size:30px;cursor:pointer;color:greenyellow;font-weight: bold;" onclick="openTem()">Pacifica's Logo</span></p><br>
 <p>scroll up and down to place the template on your prefered board area,<br> print screen and send it to Adams Surfboards, to buy your personalized board.</p>
	

	<img src="eggboard.JPG" width="30%">
</div>
		  

		
		
		
<div id="myTem" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeTem()">&times;</a>
  <div class="overlay-content">
   <img src="logotypo.png" width="8%">
  </div>
</div>		
		
		
 <!-- content here --> 	
	
	
	<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
	
	
	
	
	
	
	
	
	
	
	<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
	
	
	
	<script>
function openTem() {
    document.getElementById("myTem").style.width = "100%";
}

function closeTem() {
    document.getElementById("myTem").style.width = "0%";
}
</script>
	
	
	
	
	
	
	
	
	
	
	
</div>	
	
</body>
</html>
