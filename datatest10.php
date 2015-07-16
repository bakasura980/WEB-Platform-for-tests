<?php
	$connect = mysql_connect("localhost", "root", "vi98");
	
	$create = mysql_query("CREATE DATABASE IF NOT EXISTS test10") or die (mysql_error());
	
	mysql_select_db("test10");
	
	$test_10 = "CREATE TABLE test_10(
		Sign_id int(255) NOT NULL auto_increment,
		1_ varchar(3) NOT NULL,
		2_ varchar(3) NOT NULL,
		3_ varchar(3) NOT NULL,
		4_ varchar(3) NOT NULL,
		5_ varchar(3) NOT NULL,
		6_ varchar(3) NOT NULL,
		7_ varchar(3) NOT NULL,
		8_ varchar(3) NOT NULL,
		9_ varchar(3) NOT NULL,
		10_ varchar(3) NOT NULL,
		PRIMARY KEY (Sign_id)
		)";
	
	
	
	$results = mysql_query($test_10)
	or die (mysql_error());
	
	echo "Proect Database successfully created! ";


?>