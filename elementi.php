<?php
	
	echo "<h2>Елементи</h2>";
	
	$connect = mysql_connect("localhost", "root" , "vi98");
	
	mysql_select_db("edittest");
	
	$select = "SELECT * FROM student " .
			"WHERE predmet = 'Elementi' AND test_id=(SELECT max(test_id) FROM student) " .
			"ORDER BY user_id DESC";
			
	$result = mysql_query($select) or die (mysql_error());
	
	echo "<table>\n";
	while($row = mysql_fetch_assoc($result))
	{
		echo "<tr>\n";
		foreach($row as $value)
		{
			echo "<td>\n";
			echo $value;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}
	echo "</table>\n";


?>