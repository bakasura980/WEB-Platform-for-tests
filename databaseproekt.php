<?php

	$connect = mysql_connect("127.0.0.1", "root");
	
	$create = mysql_query("CREATE DATABASE IF NOT EXISTS proect") or die (mysql_error());
	
	mysql_select_db("proect");
	//sign for normaly user
	$Sign = "CREATE TABLE Sign(
		Sign_id int(255) NOT NULL auto_increment,
		Name varchar(10) NOT NULL,
		Password varchar(10) NOT NULL,
		Sex varchar(10) NOT NULL,
		City varchar(20) NOT NULL,
		PRIMARY KEY (Sign_id)
		)";
	
	
	
	$results = mysql_query($Sign)
	or die (mysql_error());
	//sign for admins
	$Admin= "CREATE TABLE Admin(
		Admin_id int (5) NOT NULL auto_increment,
		Admin_Name varchar(10) NOT NULL,
		Amin_Password varchar(10) NOT NULL,
		Admin_Sex varchar(10) NOT NULL,
		Admin_City varchar(20) NOT NULL,
		PRIMARY KEY (Admin_id)
		)";
	
	
	
	$results = mysql_query($Admin)
	or die (mysql_error());
	
	
	echo "Proect Database successfully created! ";
	
?>
		
	
	
