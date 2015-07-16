<p>
<?php

	
	$connect = mysql_connect("localhost", "root", "vi98");

	mysql_select_db("proect");
	
	$select1 = "SELECT name " .
				"FROM Sign " .
				"WHERE privilegii = 'uchitel'";
	$result1 = mysql_query($select1) or die (mysql_error());
	
	while($row1 = mysql_fetch_assoc($result1))
	{
		
		extract($row1);
		echo "<h1>";
		echo $name;
		echo "</h1>";
		
	}
	
?>
</p>


