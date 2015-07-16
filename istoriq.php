<?php
	$connect = mysql_connect("localhost", "root" , "vi98");
	
	mysql_select_db("edittest");
	
	echo "<h1 align='center' >История</h1>";
	
	$select1 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id=(SELECT max(test_id) FROM questions) AND predmet = 'Istoriq' AND paralelka = 'B' AND klas = '10' ";
	
	$result1 = mysql_query($select1) or die (mysql_error());
	
	while($row1 = mysql_fetch_assoc($result1))
	{
		extract($row1);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	echo "<h3 align='center' >Ако в таблицата се срещне два пъти един и същи номер - истинската оценка на реалните знания е от първия номер</h3>";
	
	
	$select = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Istoriq' AND test_id=(SELECT max(test_id) FROM student) AND student_id != 0 " .
			"ORDER BY user_id ASC";
			
	$result = mysql_query($select) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
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


