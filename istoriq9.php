<?php

	$connect = mysql_connect("localhost", "root" , "vi98");
	
	mysql_select_db("edittest");
	
	echo "<h1 align='center' >История</h1>";
	echo "<h3 align='center' >Ако в таблицата се срещне два пъти един и същи номер - истинската оценка на реалните знания е от първия номер</h3>";
	
	if(isset($_POST['A'])){
	$select1 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id=(SELECT max(test_id) FROM questions) AND predmet = 'Istoriq' AND paralelka = 'A' AND klas = '9' ";
	
	$result1 = mysql_query($select1) or die (mysql_error());
	
	while($row1 = mysql_fetch_assoc($result1))
	{
		extract($row1);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	
	$select2 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Istoriq' AND test_id=(SELECT max(test_id) FROM student) AND student_id != 0 AND paralelka = 'A' AND klas = '9'" .
			"ORDER BY user_id ASC";
			
	$result2 = mysql_query($select2) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row2 = mysql_fetch_assoc($result2))
	{
		echo "<tr>\n";
		
		foreach($row2 as $value1)
		{
			echo "<td>\n";
			echo $value1;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";
	}elseif(isset($_POST['B'])){
	$select3 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id=(SELECT max(test_id) FROM questions) AND predmet = 'Istoriq' AND paralelka = 'B' AND klas = '9' ";
	
	$result3 = mysql_query($select3) or die (mysql_error());
	
	while($row3 = mysql_fetch_assoc($result3))
	{
		extract($row3);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	
	$select4 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Istoriq' AND test_id=(SELECT max(test_id) FROM student) AND student_id != 0 AND paralelka = 'B' AND klas = '9'" .
			"ORDER BY user_id ASC";
			
	$result4 = mysql_query($select4) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row4 = mysql_fetch_assoc($result4))
	{
		echo "<tr>\n";
		
		foreach($row4 as $value2)
		{
			echo "<td>\n";
			echo $value2;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";
	}elseif(isset($_POST['V'])){
	$select5 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id=(SELECT max(test_id) FROM questions) AND predmet = 'Istoriq' AND paralelka = 'V' AND klas = '9' ";
	
	$result5 = mysql_query($select5) or die (mysql_error());
	
	while($row5 = mysql_fetch_assoc($result5))
	{
		extract($row5);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	
	$select6 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Istoriq' AND test_id=(SELECT max(test_id) FROM student) AND student_id != 0  AND paralelka = 'V' AND klas = '9'" .
			"ORDER BY user_id ASC";
			
	$result6 = mysql_query($select6) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row6 = mysql_fetch_assoc($result6))
	{
		echo "<tr>\n";
		
		foreach($row6 as $value3)
		{
			echo "<td>\n";
			echo $value3;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";
	}elseif(isset($_POST['G'])){
	$select7 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id=(SELECT max(test_id) FROM questions) AND predmet = 'Istoriq' AND paralelka = 'G' AND klas = '9' ";
	
	$result7 = mysql_query($select7) or die (mysql_error());
	
	while($row7 = mysql_fetch_assoc($result7))
	{
		extract($row7);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	
	$select8 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Istoriq' AND test_id=(SELECT max(test_id) FROM student) AND student_id != 0  AND paralelka = 'G' AND klas = '9'" .
			"ORDER BY user_id ASC";
			
	$result8 = mysql_query($select8) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row8 = mysql_fetch_assoc($result8))
	{
		echo "<tr>\n";
		
		foreach($row8 as $value4)
		{
			echo "<td>\n";
			echo $value4;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";}



?>