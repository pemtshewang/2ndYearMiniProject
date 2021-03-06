<?php
	session_start();
	include_once './database/includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doem-Toen-Khang</title>
	<script src="https://kit.fontawesome.com/fb7a544822.js" crossorigin="anonymous"></script>
</head>
<body>
	<div id="homerows">
		<div id="banner">
			<h1 id="art"><font id="t">T</font>he<strong>A<font id="rt">RT</font></strong>Ga<font id="ll">ll</font>er<font id="y">y</font></h1>
		</div>
		<div id="list">
			<nav class="homelist">
				<ul>
					<li><a href="#" id="here">Home</a></li>
					<li><a href="./exhibition.html">Exhibition</a></li>
					<li><a href="./nft.html" id="nft">NFTs</a></li>
					<li><a href="topcharts.htm">Top Charts</a></li>
					<!-- to make it dynamic --->
					<!-- need to remove this tag if above php is commented out" 
					<li><a href="./login.html">Login | Signup</a></li>
					lets bring the change here-->
					<li><a href="aboutme.htm">About Me</a></li
					<li class="profile">
                        		<?php
                            			if(isset($_SESSION['usersid'])){
                                		echo "<a href='./index.php'> Logged as " . $_SESSION['usersuid']. "</a>";
                                		echo "<a href='./database/includes/logout.inc.php'> Log Out </a>";
                            		}else{
                                	echo "<a href='./login.html'>Login | Signup</a>";
                            }
                        ?> -->
                    </li>
                </ul>
			</nav>
		</div>
	</div>
	<hr>
	<div class="content">
		<div class="container">
			<div class="intro">
				<header>The Gallery that makes you feel Home</header>
				<header>We recruit artist and enthusiast</header>
				<header>45+ NFT collectibles </header>
				<header>Promotes content-creator </header>
				<header>Safe secure and runs on blockchain</header>
				<header>More excitement is yet to come </header>
			</div>
			<div class="started">
				<div class="heading">
					<h1>Why We Started Art Gallery?</h1>
				</div>
				<div class="reason">
					<p>To Promote Bhutanese Artist to the International Level</p>
					<p>50% of Profit will be donated for Humanitarian Aids</p>
					<p>Bringing Crypto to the currency platform</p>
					<a href="./aboutme.htm">Know the Intentions</a>
					<br>
					<br>
					<br>
					<hr width="50%">
					<br>
					<a href="#desc" id="desc">See Next ></a>
				</div>
			</div>
		</div>
		<br>
		<hr class='hr2'>
		<div class='desc'>
				<div>
					<h1>Quality</h1>
					<p>We bring you only the quality images and NFTs</p>
				</div>
				<div>
					<h1>Secure and Reliable Database</h1>
					<p>We Store Your Credentials and Data with Strong Encryption Algorithms</p>
				</div>
				<div>
					<h1>Secure Transactions</h1>
					<p>Transactions are secure and exchanging funds made easy</p>
				</div>
		</div>
		<hr class='hr3'>
		<div class='projects'>
			<p>We recommend you the following sites </p>
		</div>
		<div id="slider">
		   <input type="radio" name="slider" id="slide1" checked>
		   <input type="radio" name="slider" id="slide2">
		   <input type="radio" name="slider" id="slide3">
		   <div id="slides">
		      <div id="overflow">
		         <div class="inner">
		         	<a href="https://openai.com/dall-e-2/" target="_blank">
			            <div class="slide slide_1">
			               <div class="slide-content">
			                  <h1>DALL.E</h1>
			                  <br>
			                  <p>An AI that creates ART out of text</p>
			               </div>
			            </div>
			         </a>
			         <a href="https://artsandculture.google.com/project/street-art" target="_blank">
			            <div class="slide slide_2">
			               <div class="slide-content">
			                  <h2>Google Street Art</h2>
			               </div>
			            </div>
			         </a>
			         <a href='https://www.vastbhutan.org.bt/' target='_blank'>
			            <div class="slide slide_3">
			               <div class="slide-content">
			                  <h2>Visit VAST Bhutan</h2>
			               </div>
			            </div>
			         </a>
		         </div>
		      </div>
		   </div>
		   <div id="controls">
		      <label for="slide1"></label>
		      <label for="slide2"></label>
		      <label for="slide3"></label>
		   </div>
		   <div id="bullets">
		      <label for="slide1"></label>
		      <label for="slide2"></label>
		      <label for="slide3"></label>
		   </div>
		</div>
		<div class='services'>
			<p>???? Avail our nearest services and trading partners (CLICK) ????</p>
		</div>
				<div class="topics">
					<div class="topic topic-1">
						<a  class="atopic" href="https://www.etsy.com/market/bhutan_art">Presenting You the Most Rated Art of Bhutan<br>(International)</a>
					</div>
					<div class="topic topic-2">
						<a  class="atopic" href="./nft.html">NFTS at Auction for a limited Time!</a>
					</div>
					<div class="topic topic-3">
						<a  class="atopic" href="https://nft-generator.art/" target="_blank">Digitalized Marilyn Monroe and Create Your Own</a>
					</div>
					<div class="topic topic-4">
						<a  class="atopic" href="https://www.vastbhutan.org.bt" target="_blank">Visit Our Nearest Art Gallery</a>
					</div>
					<div class="topic topic-5">
						<a  class="atopic" href="https://www.bhutanfound.org">Buy to help our Animals!</a>
					</div>
				</div>
			</div>
	<div id="footer">
		<footer class="footer">
			<div class="socialmedia">
				<h1>Get connected with us</h1>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-github"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-reddit"></i></a></li><li>
				</ul>
			</div>
			<div class="start">
				<form action="">
					<h1>Get news and updates from us</h1>
					<br>
					<br>
					<input type="email" name="email" id="email" placeholder="Your E-mail Here"><button type="submit">Subscribe</button>
				</form>
				<br><br>
				<p><i class="fa-solid fa-phone"> Call Us Here +975-17-531-1019</i></p>
				<br>
			</div>
			<div class="overview">
				<h1>Overview</h1>
				<ul>
					<li><a href="">Themes</a></li>
					<li><a href="">Pricing</a></li>
					<li><a href="">FAQs</a></li>
					<li><a href="">Home</a></li>
					<li><a href="">Buy Or Sell</a></li>
					<li><a href="">New to Our Platform?</a></li>
				</ul>
			</div>
			<div class="partner">
				<h1>Our Partners</h1>
				<ul>
					<li><a href=""><i class="fa-brands fa-bitcoin"></i>Binance</a></li>
					<li><a href=""><i class="fa-brands fa-ethereum"> Axie Infinity</i></a></li>
					<li><a href=""><i class="fa-solid fa-palette">VAST Bhutan</i></a></li>
					<li><a href=""><i class="fa-brands fa-youtube">Youtube</i></a></li>
				</ul>
			</div>
			<div class="rights">
				<h1>&copy;</h1>
				<p>2022 The Art Gallery</p>
				<p>Digital Drukyul Flagship Program</p>
				<p>Get Our App From</p>
				<p><i class="fa-brands fa-google-play"></i>Play Store</p>
				<p><i class="fa-brands fa-app-store-ios"></i>App Store</p>
			</div>
		</footer>
	</div>
</body>
</html>
