<?php
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('test10');
	
	$id2 = mysql_insert_id();

?>