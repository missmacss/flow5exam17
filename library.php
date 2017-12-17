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
<title>Surf Library</title>
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
			margin-bottom: 10%;
		}
		



.parallax {
    /* The image used */
    background-image: url("268.jpeg");
	

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}				
		
		
		
		
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
	background-color: white;
	color: darkgray;
	font-family: 'Amatic SC', cursive;
	font-size: 150%;
	
	display: block;
    margin: auto;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
		
		
		
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: cadetblue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  
	background: rgba(173,255,47, 1.0);
}		
		
		.log {
			text-decoration: none; 
			color: white;
		}	
		
		.log:hover {
			
			color:greenyellow;	
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
      <a href="#history">History</a>
      <a href="#slang">Slang</a>
      <a href="#surfboards">Surfboards</a>
	<a href="#apparel">Apparel</a>
		<a href="#report">Reports</a>
		<a href="#start">Start</a>
		<a href="#tricks">Tricks</a>
		
	
    </div>
  </div> 
	
<div class="dropdown">
    <button class="dropbtn">Interactive 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../virtualreality.php">VR Surfing</a>
      <a href="../custom/custom.php">Custom Board</a>
      <a href="../merch/products.php">Merchandising</a>
    </div>
  </div> 
	<a href="../logout.php">Logout</a>		
<p style="color: greenyellow;">Welcome <?php echo $_SESSION['username']; ?>!</p>		
	
</div>	
	
	<div class="parallax">
	
	<h1 class="vrh">Pacifica's Surf Library</h1>
		

		
		
		
		<div class="card">
  <img src="hawaiiansurfers.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="history"><b>History</b></h4> 
    <p>The riding of waves has likely existed since humans began swimming in the ocean.
Surfing was a central part of ancient Polynesian culture and predates European contact. 
The ruling class had the best beaches and the best boards, and the commoners were not allowed on the same beaches, but they could gain prestige by their ability to ride the surf on their boards.
The Ancient Hawaiian people did not consider surfing a mere recreational activity, hobby, extreme sport, or career as it is viewed today.
Around the start of the 20th century, Hawaiians living close to Waikiki began to revive surfing, and soon re-established surfing as a sport. </p> 
  </div>
</div>
		
		
		
		<div class="card">
  <img src="hangloose.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="slang"><b>Slang</b></h4> 
    <p>Surf Lingo Every Beginner Should Know. If you’re learning to surf, you’ll need to immerse yourself in the language as well as the water. Drop into the sampling of surf lingo and surf slang below.<br><br>
		<b>A-Frame:</b>A wave that breaks both left and right<br>
	  <b>Air to Fakie:</b>To go airborne and land back on the same wave<br>
		<b>Ankle Busters:</b>Small waves<br>
		<b>Backdoor:</b>To pull into a tube from behind the peak<br>
		<b>Barney:</b>A novice<br>
		<b>Barrel:</b>The hollow, covered portion of a wave forming a tube<br>
		<b>Blown-Out:</b>Poor surf condition due to high winds<br>
		<b>Bowl:</b>As a wave breaks outside and peels inside, the foam ball reforms into another wave over the inside sandbar/reef. <br>
		<b>Carve:</b>A sharp turn<br>
		<b>Caught Inside:</b>A surfer who is repeatedly getting caught on the inside foam section and having a hard time paddling out of the wave.<br>
		<b>Face of the Wave:</b>The unbroken section of the wave. The broken section is the foam ball that moves toward shore.<br>
		<b>Goofy Foot:</b>Style where the right foot is placed in front of the left foot on the board<br>
		<b>GGroundswell:</b>Waves that were generated from storms that were way offshore, generally thicker, more powerful waves.<br>
		<b>Kick Out:</b>go over or through the back of wave in order to end a ride<br>
		<b>Lineup:</b>queue or line of surfers waiting to take a wave<br>
		<b>Lip:</b>top part where a wave is starting to break<br>
		<b>Offshore:</b>wind from the shore blowing onto the ocean, usually resulting in great surf conditions<br>
		<b>Ollie:</b>hopping the board and lifting the front of the board<br>
		<b>Over the Falls:</b>wipeout while going from the top to bottom of a wave<br>
		<b>Pearl:</b>drive the nose of a board into the water to slow down<br>
		<b>Pit:</b>bottom and most hollow part of a tube or barrel<br>
		<b>Point Break:</b>area where readable waves form around a piece of land<br>
		<b>Re-entry:</b>Surfing to the top of the wave (the lip), usually getting air, and then cutting back into the wave<br>
		<b>Ripping:</b>Making any series of fast-action surf moves while riding a wave<br>
		<b>Set:</b>group of similar waves, usually used to describe a series of good waves<br>
		<b>Wipe out:</b>to fall off the board while surfing<br>
		<b>Rip currents:</b>carry or float your board next to you until you get to deep water<br>
		<b>Turtle Roll:</b>flip the board so you’re beneath it underwater, holding tight<br>
		<b>Duck Dive:</b>dive under the wave and pop out the other side<br>
		
	  
	  
	  </p> 
  </div>
</div>
		
		
		<div class="card">
  <img src="boards.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="surfboards"><b>Surfboards</b></h4> 
    <p>Picking a surfboard depends a lot on your type of surfing. Big or small waves? The best beginner surfboards are long and thick for good stability and flotation. These types of surfboards allow you to catch more waves with less effort. Intermediate and advanced level surfers experiment with everything from a 10’6 longboard to a 5’4 fish surfboard.<br><br>
	  <b>Shortboards</b> range in length from 5’ to 7’ feet - level from intermediate to pro<br>
	<b>Gun boards</b> range in length from 8’ to 9’feet - level pro big waves surfer<br>
		<b>Longboards</b> range in length from 8’ to 10’6 feet - all levels<br>
		<b>Fishboards</b> range in length from 5’to 7' feet - all levels, faster in small waves<br>
		<b>Funboard</b> range in length from 7’to 8'2 feet - all levels, between a short and longboard<br><br>
		
		
    <p><b>Pintail</b> designed to provide maximum control and surface hold, on the wave.</p><img src="pintail.jpg" alt="Avatar" style="width:20%">
	  <p><b>Roundpin Tail</b>have less release and create smoother, more drawn out turns.</p><img src="roundpintail.jpg" alt="Avatar" style="width:20%">
	  <p><b>Round Tail</b>gives the board a bit more lift in the rear and allows for a looser, more turnable board.</p><img src="roundtail1.jpg" alt="Avatar" style="width:20%">
	  <p><b>Squash Tail</b>provides all the surface and planing area of a round tail, contributing to speed and lift and helping to maintain speed in slower spots. Most popular tail for a shortboard.</p><img src="squashtail.jpg" alt="Avatar" style="width:20%">
	  <p><b>Swallow Tail</b> provides more surface area from rail to rail, allowing for planing speed and lift. </p><img src="swallowtail2.jpg" alt="Avatar" style="width:20%">
	  <p><b>Bat Tail </b>  It’s a version of the swallow tail and essentially performs the same way</p><img src="battail.jpg" alt="Avatar" style="width:20%">
	  <p><b>Diamond Tail</b> designed to soften up the square tail but keep some of its speed.</p><img src="diamondtail.jpg" alt="Avatar" style="width:20%">
	  <p><b>Square Tail </b> like the squash, but the pointed corners create more square turns with less release </p><img src="squaretail.jpg" alt="Avatar" style="width:20%"><br><br>
	  
	  <p><b>Leash</b> handy invention that allows you to completely wipe out and not have to swim back to shore to get your board.<br>Use a leash length that’s approximately equal to or slightly longer than your board length. EX: Board is 7'0 feet get a 8'0 feet leash</p><img src="leash.jpg" alt="Avatar" style="width:30%">
	  <p><b>Traction Pads</b> When wax just isn't gonna do the trick. Placed on the end of the deck (tail) for better grip and to do safer maneuveurs.</p><img src="pad.jpg" alt="Avatar" style="width:20%">
	  <p><b>Surf Wax</b> gives you a better grip in the board and keeps you from slipping off. Important to get the right wax for the temperature of the water you’re going to be surfing in.<br>You apply it from the nose down to the tail, and you use a wax comb to take it off once the wax gets old (brown).</p><img src="wax.jpg" alt="Avatar" style="width:40%">
	  
	  </p> 
  </div>
</div>
		
		
		
		<div class="card">
  <img src="surfshop.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="apparel"><b>apparel</b></h4> <br>
    <p><a href="http://www.surfinghandbook.com/surf-gear/wetsuit-guide/" style="text-decoration: none; color: cadetblue; font-weight: bold;">wetsuit guide 1</a><br>Wetsuits were created to keep your body warmed up from the water, there are different mm suits for different water degrees, you can read about it there. </p>
	  <p><a href="http://www.surfinghandbook.com/surf-gear/wetsuit-guide/" style="text-decoration: none; color: cadetblue; font-weight: bold;">wetsuit guide 2</a><br>There are different kinds of wetsuits for all sizes and preferences, check the information before buying your first wetsuit. </p>
	  <p><a href="http://www.thesurfingsite.com/Surf-Apparel.html" style="text-decoration: none; color: cadetblue; font-weight: bold;">Surf Gear Guide</a><br>When the water is good and the weather is shiny, there are other surf clothes you can use, rash vests and surf shorts are the most known for warm areas, they protect your body from UV lights, sunburns and skin rashes. Read more about the surf gear you can use on warm water by clicking on the link above. </p>
  </div>
</div>
		
		
		
		
		<div class="card">
  <img src="report.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="report"><b>Surf Reports</b></h4> <br>
	  
    <p><b>Wave Heigh</b></a><br>1 to 2 ft surf is typically knee to thigh high.<br>
2 to 3 ft surf is typically thigh to waist high, with some chest high sets.<br>
3 to 5 ft surf is typically waist to head high.<br>
4 to 6 ft surf is typically chest to head high occasional 1 ft. overhead.<br>
	  If the water is flat, the report will show you it's flat.</p>
	  
	<p><b>Swell Direction</b></a><br>swell it's a wave originated by distant weather systems. Swell direction is the direction from which the swell is coming. It is measured in degrees (as on a compass), and often referred to in general directions, such as a NNW or SW swell. On the report you can read its size (1.1m) and the speed it travels (5s). </p>
	  
	<p><b>Local Winds</b><br>the report always shows you the speed and direction of the wind.<br> It is recommended to surf on <b>offshore wind</b> (but not a strong wind), because a clean wave is one that is lightly fanned by an offshore wind or no wind at all. <b>Onshore wind</b> it's the wind blowing onto the shore, imagine you are standing on the beach facing the ocean with a strong breeze in your face, that is not the best day to surf.<br><br>
	  
		At <a href="https://magicseaweed.com/" style="text-decoration: none; color: cadetblue; font-weight: bold;">magic sea weed</a>, the surf reports come with water and air temperature, which is great if you do not want to surf in water that is 4 degrees celcius.</p>
  </div>
</div>
		
		
		

		
		
<div class="card">
  <img src="firstwave.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="start"><b>Start Surfing</b></h4> 
    <p>Now that you know the basics, are you ready to learn how to surf? This is the most important part of the guide, now it is your time to shine, from here we will redirect you to a website where you can watch in videos what you need to do to start surfing.Your first wave will not be 3 meters high, you are gonna fall, the surfboard will hit you in the head, it takes practice to surf a big wave, it will take practice to paddle out to catch a clean wave or to do barrels. If this is what you love, don't give up, everybody learns with their own time. We do this for fun, because it makes us enjoy life a bit more, and if you didn't have a surf family before, you have one now. Pacifica welcomes you to her home, keep coming back to us, and check our updates in social media so you can meet & surf with this sunshine turtle personally.<br><br>
	  <a href="http://www.thesurfingsite.com/How-to-Surf.html" style="text-decoration: none; color: cadetblue; font-weight: bold;">How to surf here!</a><br><br>
	  <b>Regular or Goofy? Warm up your muscles and your popping up, wax your board, tight your leash, run into the water, paddle, turtle roll or duckdive, pick your wave, turn your board around, pop up and hang loose.</b><br>Remember to fall with style :)
	  </p> 
  </div>
</div>




<div class="card">
  <img src="fsnap.JPG" alt="Avatar" style="width:100%">
  <div class="container">
    <h4 id="tricks"><b>Practice Tricks</b></h4> 
    <p>Your journey has just begun, thanks to riders.co you will be able to practice your surfing and surfing techniques anytime you want, with their app on your phone or a quick revision on their website, you can decide what will you practice today on your surf day, ready to become a pro? Remember it is all for fun<br><br>
	  <a href="https://riders.co/en/surf/beginners" style="text-decoration: none; color: cadetblue; font-weight: bold;">Basic tricks? Here</a><br>
		<a href="https://riders.co/en/surf/advanced" style="text-decoration: none; color: cadetblue; font-weight: bold;">Advanced tricks? Here</a><br><br>
	  <b>Pop up, catch waves, do your stance, get speed and brake, do fs and bs turns, fly and rip waves.</b><br>We are kings of the beach and queens of the waves.
	  </p> 
  </div>
</div>

		
		
		
		
	
		
	
	<div class="footer" id="footer">
		<br><p class="f">Copyright © PACIFICA SURF LIBRARY WEBSITE BY Macss Studio 2016-2018 and Sources Below. &nbsp;&nbsp;&nbsp;All rights reserved. <img alt="" src="sponsors.png" width="50%" style="margin-left: 12%;"> </p>
		</div>	
	
	
	
	</div>
	
	
	

	
	
</div>	


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>	


	
</body>
</html>
