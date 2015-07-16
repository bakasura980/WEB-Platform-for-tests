<?php

	$connect = mysql_connect("localhost", "root", "vi98");
	
	$create = mysql_query("CREATE DATABASE IF NOT EXISTS Login") or die (mysql_error());
	
	mysql_select_db("Login");
	
	
	$Submitlog = "CREATE TABLE submitlog(
		id_l int(255) NOT NULL auto_increment,
		name_l int(255) NOT NULL,
		password_l varchar(255) NOT NULL,
		PRIMARY KEY (id_l)
		)";
		$results = mysql_query($Submitlog)
		or die (mysql_error());

echo "Successfully creation";
?>