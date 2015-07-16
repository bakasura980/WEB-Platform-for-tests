<?php
	$connect = mysql_connect("localhost", "root", "vi98");
	

	
	mysql_select_db("test10");
	
	$student_10 = "CREATE TABLE student_10_10(
		Sign_id10 int(255) NOT NULL auto_increment,
		1_10 varchar(3) NOT NULL,
		2_10 varchar(3) NOT NULL,
		3_10 varchar(3) NOT NULL,
		4_10 varchar(3) NOT NULL,
		5_10 varchar(3) NOT NULL,
		6_10 varchar(3) NOT NULL,
		7_10 varchar(3) NOT NULL,
		8_10 varchar(3) NOT NULL,
		9_10 varchar(3) NOT NULL,
		10_10 varchar(3) NOT NULL,
		PRIMARY KEY (Sign_id10)
		)";
	
	
	
	$results = mysql_query($student_10)
	or die (mysql_error());
	
	echo "Proect Database successfully created! ";


?>