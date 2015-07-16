<?php
	$connect = mysql_connect("localhost", "root", "vi98");
	
	
	mysql_select_db("edittest");
	
	$edit1 = "CREATE TABLE student(
		id1 int(255) NOT NULL auto_increment,
		user_id int(255) NOT NULL,
		teacher_id int(255) NOT NULL,
		question1 varchar(255) NOT NULL,
		answer1 varchar(255) NOT NULL,	
		answer_a1 varchar(255) NOT NULL,
		answer_b1 varchar(255) NOT NULL,
		answer_c1 varchar(255) NOT NULL,
		answer_d1 varchar(255) NOT NULL,	
		PRIMARY KEY (id1)
		)";
		$results = mysql_query($edit1)
		or die (mysql_error());
		

	
	
	

	
	
	echo "Proect Database successfully created! ";


?>