<?php

	$connect = mysql_connect("127.0.0.1", "root");
	
	$create = mysql_query("CREATE DATABASE IF NOT EXISTS textarea") or die (mysql_error());
	
	mysql_select_db("proect");
	//sign for normaly user
	$Sign = "CREATE TABLE area(
		Sign_id int(255) NOT NULL auto_increment,
		Text text(1000) NOT NULL,
		
		PRIMARY KEY (Sign_id)
		)";
	
	
	
	$results = mysql_query($Sign)
	or die (mysql_error());
	
	
	echo "Proect Database successfully created! ";
	
?>
		