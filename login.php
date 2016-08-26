<?php
include_once 'functions.php';
include_once 'signup.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Shameless Customs - Custom guitar and bass cabinet speaker enclosures!</title>
		<link rel="shortcut icon" href="./favicon.ico">
		<link type="text/css" rel="stylesheet" href="Login.css"/>
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
	<div id="formLogins">
	<div id="Sign-In">
		<fieldset style="width:30%"><legend>LOG-IN HERE</legend>
		<form method="POST" action="login-handler.php"> User <br>
			<input type="text" name="user" size="40"><br>Password <br>
			<input type="password" name="pass" size="40"><br>
			<button id="button" type="submit" name="submit" value="Log-In">Login</button>
		</form>
		</fieldset>
	</div>
	<div id="Sign-In">

<form method="post" action="">

    <fieldset style ="width:30%"><legend>SIGN-UP HERE</legend>
    			<label for="username">Username:</label>
    			<input type="text" name="username" />
    			<label for="password">Password:</label>
    			<input type="password" name="password" />
    			<label for="email">Email:</label>
    			<input type="text" name="email" />
    			<input type="submit" value="Signup Now" name="signup" />

    </fieldset>

</form>

<!--

<fieldset style="width:30%"><legend>SIGN_UP HERE</legend>
		<form method="POST" action="">
    		<label for="username">Username:</label>
			<input type="text" name="username" />
   			<label for="password">Password:</label>
   			<input type="password" name="password" />
   			<label for="email">Email:</label>
   			<input type="text" name="email" />
   			<button id="button" type="submit" value="Register" name="register" />REGISTER</button>
		</form>
	</fieldset>  -->

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
							<li><a href="http://www.youtube.com/user/ShamelessDesgins" class="icon icon-youtube"><span>YouTube</span></a></li>
							<li><a href="http://instagram.com/ShamlessDesigns" class="icon icon-instagram"><span>Instagram</span></a></li>
							<li><a href="https://www.facebook.com/shamelessdesigns" class="icon icon-facebook"><span>Facebook</span></a></li>
						</ul>
					</div>
			</div>

	</body>
</html>
<?php

include_once './config.php';
include_once './functions.php';

//setup some variables/arrays
$action = array();
$action['result'] = null;

$text = array();

//check if the form has been submitted
if(isset($_POST['signup'])){

	//cleanup the variables
	//prevent mysql injection
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);

	//quick/simple validation
	if(empty($username)){ $action['result'] = 'error'; array_push($text,'You forgot your username'); }
	if(empty($password)){ $action['result'] = 'error'; array_push($text,'You forgot your password'); }
	if(empty($email)){ $action['result'] = 'error'; array_push($text,'You forgot your email'); }

	if($action['result'] != 'error'){

		$password = md5($password);

		//add to the database
		$add = mysql_query("INSERT INTO user VALUES(NULL,'$username','$password','$email',0)");

		if($add){

			//get the new user id
			$userid = mysql_insert_id();

			//create a random key
			$key = $username . $email;
			$key = md5($key);

			//add confirm row
			$confirm = mysql_query("INSERT INTO verify VALUES(NULL,'$userid','$key','$email')");

			if($confirm){

				//include the swift class
				include_once './swift/swift_required.php';

				//put info into an array to send to the function
				$info = array(
					'username' => $username,
					'email' => $email,
					'key' => $key);

				//send the email
				if(send_email($info)){

					//email sent
					$action['result'] = 'success';
					array_push($text,'Thanks for signing up. Please check your email for confirmation!');

				}else{

					$action['result'] = 'error';
					array_push($text,'Could not send confirm email');

				}

			}else{

				$action['result'] = 'error';
				array_push($text,'Confirm row was not added to the database. Reason: ' . mysql_error());

			}

		}else{

			$action['result'] = 'error';
			array_push($text,'User could not be added to the database. Reason: ' . mysql_error());

		}

	}

	$action['text'] = $text;

}
error_reporting(0);
?>



