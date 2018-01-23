<?php

//connect to the database
mysql_connect('localhost', 'zgoodspe', 'password') or
	die("Couldn't connect to the database");

mysql_select_db('zgoodspe') or
	die("I couldn't find the database table ($table)");

?>
