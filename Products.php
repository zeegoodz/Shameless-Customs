<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Shameless Customs - Products</title>
		<link rel="shortcut icon" href="./favicon.ico">
		<link type="text/css" rel="stylesheet" href="ProductsCss.css"/>
		<link rel="stylesheet" href="./Jquery/css/style.css" type="text/css" media="screen, projection"/>
		<link href="jquery-ui.css" rel="stylesheet">
		<script type="text/javascript" src="./Jquery/js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="./Jquery/js/jquery.dropdownPlain.js"></script>
	<script type="text/javascript" src="./Builder.js"></script>
	</head>
	<body class="homepage">
			<h1 id="logo"></h1>



			<nav id="nav">
	<ul>
		<li>
			<a href="./Products.php">Products</a>

			<!-- for PHP pages later -->
			<!-- <ul>
				<li><a href="guitar_cabinets.php">Guitar Cabinets</a></li>
				<li><a href="bass_cabinets.php">Bass Cabinets</a></li>
				<li><a href="guitar_heads.php">Guitar Heads</a></li>
				<li><a href="led_guitar.php">LED Guitar Cabinets</a></li>
				<li><a href="led_bass.php">LED Bass Cabinets</a></li>
				<li><a href="information.php">General Information</a></li>
			</ul> -->
		</li>
		<li><a href="Gallery.php">Gallery</a>
		</li>

		<li><a href="./Contact.html">Contact</a></li>
		<li><a href="./login.php">Login</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
</nav>						<!-- /Nav -->



		<!-- Banner Wrapper -->
			<div id="banner-wrapper">
			</div>
		<div id="builder-wrapper">

		<div id="optionsForms">
		<ul class="dropdown">
			<li id="cabStyle"><a href="#">Cabinet Style</a>
        		<ul class="sub_menu">
					<li><a href="#">Classic</a></li>
					<li><a href="#">LED</a></li>
				</ul>
			</li>

			<li id="speakerLayout"><a href="#">Speaker Layout</a>
        		<ul class="sub_menu">
					<li><a href="#">Guitar Cab</a>
						<ul>
        					<li><a href="#">1x12</a></li>
							<li><a href="#">2x12</a></li>
	       					<li><a href="#">4x12</a></li>
							<li><a href="#">6x12</a></li>
						</ul>
					</li>
        			<li>
        				<a href="#">Bass Cab</a>
        				<ul>
        					<li><a href="#">2x10</a></li>
        					<li><a href="#">4x10</a></li>
        					<li><a href="#">6x10</a></li>
        					<li><a href="#">8x10</a></li>
        				</ul>
        			 </li>
        		</ul>
        	</li>

        	<li id="mainTolex"><a href="#">Main Tolex Color</a>
        		<ul class="sub_menu">
					<li><a href="#">Black Bronco</a></li>
        			<li><a href="#">Black Fender</a></li>
        			<li><a href="#">Red Bronco</a></li>
        			<li><a href="#">Blue Bronco</a></li>
        			<li><a href="#">White Bronco</a></li>
					<li><a href="#">Classic Tweed</a></li>
				</ul>
			</li>

			<li id="twoToneTolex"><a href="#">Two-Tone Tolex Color</a>
				<ul class="sub_menu">

					<li><a href="#">None</a></li>
					<li><a href="#">Black Bronco</a></li>
        			<li><a href="#">Black Fender</a></li>
        			<li><a href="#">Red Bronco</a></li>
        			<li><a href="#">Blue Bronco</a></li>
        			<li><a href="#">White Bronco</a></li>
					<li><a href="#">Classic Tweed</a></li>
				</ul>
			</li>

				<li id="pipingOptions"><a href="#">Piping Otions</a>
					<ul class="sub_menu">
						<li><a href="#" id="style">Single Pipe</a>
							<ul>
								<li><a href="#" id="location">Front Quarter</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
								<li><a href="#" id="location">Rear Quarter</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Double Pipe</a>
							<ul>
								<li><a href="#" id="location">Front Quarter</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
								<li><a href="#" id="location">Rear Quarter</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Two Tone Piping</a>
							<ul>
								<li><a href="#">Single Pipe</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
								<li><a href="#">Double Pipe</a>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Gold</a></li>
										<li><a href="#">Silver</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>

			<li id="grillOptions" ><a href="#">Grill Mesh Color</a>
				<ul class="sub_menu">

					<li><a href="#">Black</a></li>
					<li><a href="#">Silver</a></li>
        			<li><a href="#">Gold</a></li>
        			<li><a href="#">Ampeg</a></li>
        			<li><a href="#">White</a></li>
        			<li><a href="#">Red & Black Weave</a></li>
					<li><a href="#">Blue & Black Weave</a></li>
				</ul>
			</li>

			<li id="casters"><a href="#">Casters</a>
				<ul class="sub_menu">

					<li><a href="#">3" Industrial Casters</a></li>
					<li><a href="#">2"x1" Rubber Feet</a></li>
        		</ul>
			</li>
		</ul>
	</div>


	<div id="displayForms">
	<div id="cabForm">
	<div id="cabWindow"><img src="./Cabs/6x12_Cover.jpg"></div>
	<div id="tolex"></div>
	<div id="grill"></div>
	</div>

	<div id="cartForm">
		<h2>My Cabinet</h2><br>
		<ul id="cart">
			<li id="cart1"></li>
			<li id="cart2"></li>
			<li id="cart3"></li>
			<li id="cart4"></li>
			<li id="cart5"></li>
			<li id="cart6"></li>
			<li id="cart7"></li>
			<li> <hr></li>
			<li id="Total"></li>






		</ul>
	</div>

	</div>




			</div>
	</div>


		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<!-- Footer -->
					<div id="footer" class="container">
						<header>
							<h2>All products proudly designed and built by SHAMELESS Customs in the USA.</h2>
						</header>
						<ul class="contact">
							<li><a href="http://www.youtube.com/user/ShamelessDesgins" target="_blank" class="icon icon-youtube"><span>YouTube</span></a></li>
							<li><a href="http://instagram.com/ShamlessDesigns" target="_blank" class="icon icon-instagram"><span>Instagram</span></a></li>
							<li><a href="https://www.facebook.com/shamelessdesigns" target="_blank" class="icon icon-facebook"><span>Facebook</span></a></li>
						</ul>
					</div>
			</div>
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script type="text/javascript" src="forms.js"> </script>
  </body>
</html>

