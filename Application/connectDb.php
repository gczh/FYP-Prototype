<?php

//host, username, password
	$server_username = "root";
	$server_password = "";
	$server_hostname = "localhost"; 

	//connection to the database
	$dbhandle = mysql_connect($server_hostname, $server_username, $server_password) 
		or die("Unable to connect to MySQL");
	echo "Connected to MySQL<br>";

	//select a database to work with
	$selected = mysql_select_db("KnowLife",$dbhandle) 
		or die("Could not select KnowLife");
	echo "Selected KnowLife<br>";

?>