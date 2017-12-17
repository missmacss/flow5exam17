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
<title>Merchandising</title>
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
			margin-bottom: 10%;
		}
		
		

.parallax {
    /* The image used */
    background-image: url("417.jpeg");
	

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}				
		
		
		

.row > .column {
 
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}		
/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.3);
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1000px;

	
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: cadetblue;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(249,248,248,0.9);
}

/* Number text (1/3 etc) */
.numbertext {
  color: cadetblue;
  font-size: 500%;
  padding: 8px 12px;
  position: absolute;
  top: 0;
	font-family: 'Amatic SC', cursive;
}

img {
  display: block;
    margin: auto;
}



.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}		
		

		
		
		
	
		
		
		
		
		.gallery {
			background-color: white;
			margin-bottom: 10%;
			
		}		
		
		
		
		.order:hover{
			color: cadetblue;
			font-weight: bold;
		}
		
		.order{
			color: black;
			text-decoration: none;
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
      <a href="../library/library.php#history">History</a>
      <a href="../library/library.php#slang">Slang</a>
      <a href="../library/library.php#surfboards">Surfboards</a>
	<a href="../library/library.php#apparel">Apparel</a>
		<a href="../library/library.php#report">Reports</a>
		<a href="../library/library.php#start">Start</a>
		<a href="../library/library.php#tricks">Tricks</a>
		
	
    </div>
  </div> 
	
<div class="dropdown">
    <button class="dropbtn">Interactive 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../virtualreality.php">VR Surfing</a>
      <a href="../custom/custom.php">Custom Board</a>
      <a href="#">Merchandising</a>
    </div>
  </div> 
	<a href="../logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>	
	
	<div class="parallax">
	
	<h1 class="vrh">Pacifica's Stuff</h1>
	<p class="vrp">Pacifica made a small selection of products with her signature that you are welcome to get, not only to show<br>your love and gratitude for her amazing mission.But to support the maintenance of the onlie surf library. <br><a href="#" class="order">Click here to place your order,</a> <b>remember to indicate the product name and size.</b> </p>
	

		
<!-- -->
		<div class="gallery">
	<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
		
	
			
<div class="row">
  <div class="column">
    <img src="psbook.jpg" style="width:70%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="pstotebag.png" style="width:55%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="pscup.jpg" style="width:70%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="psgymbag.jpg" style="width:70%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
	<div class="column">
    <img src="psmhoodie.jpg" style="width:70%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
	<div class="column">
    <img src="pswtee.jpg" style="width:70%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
	<div class="column">
    <img src="psmtee.jpg" style="width:70%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
	<div class="column">
    <img src="pswcrop.jpg" style="width:70%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
	
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext"><b>20,00€</b><br>Surf Library<br>Pocket Book</div>
      <img src="psbook.jpg" style="width:50%">
    </div>

    <div class="mySlides">
      <div class="numbertext"><b>8,00€</b><br>Pacifica's<br>Tote Bag</div>
      <img src="pstotebag.png" style="width:40%">
    </div>

    <div class="mySlides">
      <div class="numbertext"><b>3,00€</b><br>Pacifica's<br>Mug</div>
      <img src="pscup.jpg" style="width:50%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext"><b>10,00€</b><br>Pacifica's<br>Gym Bag</div>
      <img src="psgymbag.jpg" style="width:50%">
    </div>
	  
	  <div class="mySlides">
      <div class="numbertext"><b>18,00€</b><br>Pacifica's<br>Hoodie</div>
      <img src="psmhoodie.jpg" style="width:50%">
    </div>
	  
	  <div class="mySlides">
      <div class="numbertext"><b>10,00€</b><br>XS/S/M/L<br>W Tee</div>
      <img src="pswtee.jpg" style="width:50%">
    </div>
	  
	  <div class="mySlides">
      <div class="numbertext"><b>12,00€</b><br>S/M/L/XL<br>M Tee</div>
      <img src="psmtee.jpg" style="width:50%">
    </div>
	  
	  <div class="mySlides">
      <div class="numbertext"><b>15,00€</b><br>XS/S/M<br>Cropped<br>Hoodie</div>
      <img src="pswcrop.jpg" style="width:50%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


   
  </div>
</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
</div>		
		
		
		
		
<!-- footer -->	
	
	
	<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
	
	
	</div>
	
	
	
	
	
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
	
	
	
	
	
	
	
	
	
	
	
	
</div>	
	
</body>
</html>
