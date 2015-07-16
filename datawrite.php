<?php
	$connect = mysql_connect("localhost", "root", "vi98");
	
	$create = mysql_query("CREATE DATABASE IF NOT EXISTS edittest") or die (mysql_error());
	
	mysql_select_db("edittest");
	
	$edit = "CREATE TABLE questions(
		id int(255) NOT NULL auto_increment,
		random_id int(255) NOT NULL,
		test_id int(255) NOT NULL,
		question varchar(255) NOT NULL,
		answer varchar(255) NOT NULL,	
		answer_a varchar(255) NOT NULL,
		answer_b varchar(255) NOT NULL,
		answer_c varchar(255) NOT NULL,
		answer_d varchar(255) NOT NULL,	
		PRIMARY KEY (id)
		)";
		$results = mysql_query($edit)
		or die (mysql_error());
		

	
	
	

	
	
	echo "Proect Database successfully created! ";


?>