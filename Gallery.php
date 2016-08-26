<!DOCTYPE HTML>
<html>
	<head>
		<title>Shameless Customs - Cabinet Gallery</title>
		<link rel="shortcut icon" href="./favicon.ico">
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>

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
		<li><a href="./Gallery.php">Gallery</a>
		</li>

		<li><a href="./Contact.html">Contact</a></li>
		<li><a href="./login.php">Login</a></li>
		<li><a href="index.html">Home</a></li>
	</ul>
</nav>						<!-- /Nav -->



		<!-- Banner Wrapper -->
			<div id="banner-wrapper">

			<hr>
			<?php
				$image_dir = "./gallery/images/";	// Directory holding the full-sized images.

				$thumbnail_dir = "./gallery/thumb";// Directory holding the thumbnail images.

				$new_window = false;		// Open new window? T/F

				$height = 300;	// Maximum height of each thumbnail. Default=0
				$width = 150;	// Maximum width of each thumbnail. Default=0

				$border = 1;	// Size of the border around each image.

				display_images($image_dir, $thumbnail_dir, $new_window, $height, $width, $border);


			?>
			</div>
			<hr>
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

	</body>
</html>

<?php

function display_images($image_dir, $thumbnail_dir, $new_window, $height, $width, $border)
{
	if ( $thumbnail_dir == "" )	$thumbnail_dir = ".";

	if ( !is_numeric($border) || ($border < 0) )	$border = 0;

	if ( !is_numeric($height) )	$height = 0;
	if ( !is_numeric($width) )	$width = 0;

	if ( ($image_handle = opendir(getcwd() . "/" . $image_dir))
		&& ($thumbnail_handle = opendir(getcwd() . "/" . $thumbnail_dir)) ) {
			$image_length = 0;
			while ( ($image_file = readdir($image_handle)) !== false )	{
					if ( strpos(strtolower($image_file), '.jpg', 1)) {
							$image_array[$image_length] = $image_file;
							$image_length++;
					}
			}

			sort($image_array);

		$thumbnail_length = 0;

		 while ( ($thumbnail_file = readdir($thumbnail_handle)) !== false )	{
   		    if ( strpos(strtolower($thumbnail_file), '.jpg', 1)) {
		    		$thumbnail_array[$thumbnail_length] = $thumbnail_file;
		    		$thumbnail_length++;
	    	}
	    }

		 sort($thumbnail_array);

	    if ( ($height <= 0) || ($width <=0) )	{
	    	$use_image_size = true;
	    } else {
	    	$use_image_size = false;
	    }

	    $index = 0;

		$stream_length = min($image_length, $thumbnail_length);

	    if ( $use_image_size )	{
			if ( $new_window )	{
			    while ($index < $stream_length)	{
					echo '<A HREF="' . $image_dir . '/' . $image_array[$index]
						. '"><IMG SRC="' . $thumbnail_dir . '/' .
						$thumbnail_array[$index] . '" style="border:' .
						$border	. "px solid black\" TARGET=new></A>\n";
					$index++;
				}
			} else {
			    while ($index < $stream_length)	{
					echo '<A HREF="' . $image_dir . '/' . $image_array[$index]
						. '"><IMG SRC="' . $thumbnail_dir . '/' .
						$thumbnail_array[$index] . '" style="border:' .
						$border . "px solid black\" ></A>\n";
					$index++;
				}
			}
		} else {
//			$window_ar = $height / $width;
			$index = 0;
		    foreach ( $thumbnail_array as $file )	{
				list($image_width, $image_height) = getimagesize(getcwd() . '/'
					. $thumbnail_dir . '/' . $thumbnail_array[$index]);

				$ratioh = $height/$image_height;
				$ratiow = $width/$image_width;
				$ratio = min($ratioh, $ratiow);

// New dimensions
				$new_width = 350;
				$new_height = 300;;

				echo '<A HREF="' . $image_dir . '/' . $image_array[$index] . '"';
				if ( $new_window == true )	{
					echo ' TARGET="new"';
				}
				echo  '><IMG SRC="' . $thumbnail_dir . '/' .
					$thumbnail_array[$index] . '" style="border:' . $border .
					'px solid black" HEIGHT=' . $new_height . ' WIDTH=' .
					$new_width . "></A>\n";
				$index++;
			}
		}

	   	closedir($image_handle);
   		closedir($thumbnail_handle);
	} else {
		echo "Couldn't open " . getcwd() . "/" . $image_dir . " or " .
			$thumbnail_dir . "<BR>";
	}
}
?>

