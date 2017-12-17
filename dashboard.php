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
<title>About</title>
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
			color:#5F9EA0;
			text-align: center;
			padding-top: 4%;
		}
		
		.vrp{
			font-family: 'Amatic SC', cursive;
			font-size: 200%;
			color:white;
			text-align: center;
			padding-top: 4%;
		}
		
		

.parallax {
    /* The image used */
    background-image: url("622.jpeg");
	

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}				
		
		.boxie {
			width: 100%;
			background-color: rgba(95,158,160,.5);
			margin-bottom: 10%;
			padding-bottom: 5%;
			
		}		
		
		
		
		
		
		
	
	</style>

<body>
	
<div class="form">
	<div class="navbar">
  <a href="home.php">Home</a>
  <a href="#">About</a>

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
      <a href="virtualreality.php">VR Surfing</a>
      <a href="custom/custom.php">Custom Board</a>
      <a href="merch/products.php">Merchandising</a>
    </div>
  </div> 
	<a href="logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>	
	
	<div class="parallax">
	
	<h1 class="vrh">Mission</h1>
		<div class="boxie">
	<p class="vrp"><b>Pacifica's mission is to collect the most important information about surfing in a user friendly platform.<br> Once you are a member, you get access to all the surf library resources and sources, you also get access to a bit of extra and interactive action in the website.<br> Pacifica does it for you, ocean hearted surfer - to turn your journey towards your lifestyle easier to learn, study and access.</b></p>
		</div>
		
	
		
		<h1 class="vrh">Questions?</h1>
		<div class="boxie">
	<p class="vrp"><b>Please contact Pacifica directly through: pacificasurf@gmail.com.
She will be online to answer any requests, and in direct chatting with the gmail chat.<br><br>
<span style="color:greenyellow;">For merchandising orders</span>, please send the request to pacificasurf@gmail.com with the subject"Order *name/size of the product*",<br> to receive the details of the payment method and delivery expenses.<br>
<br><span style="color:greenyellow;">For copyright and source enquires</span>, send an email to pacificasurf@gmail.com with the subject "Copyrights".<br><br>
<span style="color:greenyellow;">For events or press media</span> please contact pacificasurf@gmail.com with the subject "Marketing".<br><br>
<span style="color:greenyellow;">For enquires of advertisment</span> of your surf brand in our website, contact pacificasurf@gmail.com with the subject "Advert".<br>
<br>Pacifica takes from 1-7 working days to answer your beloved email.<br><br>
<span style="color:greenyellow;">For custom made and shaped surfboards</span> please contact our recommendation: adams surfboards<br>

The video on the home page is a combination of several shortclips from wsl and surf films. Song performed by netsky ft emeli sande,</b> </p>
	</div>
	
<a href="https://www.booksurfcamps.com/" onclick="$('#video').show(); $(this).hide();" target="_blank">		
	<video loop autoplay width="100%" id="video">
  <source src="banner(bsc).mp4" type="video/mp4"> 
  
</video>
</a>	
	
	<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
	
	
	</div>
	
	
	
	
	
	
	<script>
$('#video').hide();
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>	
	
</body>
</html>

