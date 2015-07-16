<?php

	$connect = mysql_connect("localhost", "root" , "vi98");
	
	mysql_select_db("login");
	
		$select = "SELECT name_l " .
				"FROM submitlog " .
				"WHERE id_l=(SELECT max(id_l) FROM submitlog) AND options = 'uchitel'";
	
		$result = mysql_query($select) or die (mysql_error());
		while($row1 = mysql_fetch_assoc($result))
		{
			extract($row1);
		}
		$teacher_name1 = $name_l;


	$connect = mysql_connect("localhost", "root" , "vi98");
	
	mysql_select_db("edittest");
	
	echo "<h1 align='center' >Елементи</h1>";
	echo "<h3 align='center' >Ако в таблицата се срещне два пъти един и същи номер - истинската оценка на реалните знания е от първия номер</h3>";
	if(isset($_POST['A'])){
	
	$select17 = "SELECT test_id " .
				"FROM questions " .
				"WHERE predmet = 'Elementi' AND paralelka = 'A' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
		$result17 = mysql_query($select17) or die (mysql_error());
		
			while($row17 = @mysql_fetch_assoc($result17))
		{
			extract($row17);
		}
		$test_id1 = $test_id;
	$select11 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id = $test_id1  AND predmet = 'Elementi' AND paralelka = 'A' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
	$result11 = mysql_query($select11) or die (mysql_error());
	
	while($row11 = @mysql_fetch_assoc($result11))
	{
		extract($row11);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	$select12 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Elementi' AND test_id = $test_id1 AND student_id != 0 AND paralelka = 'A' AND klas = '12' AND teacher_name = '$teacher_name1' " .
			"ORDER BY user_id ASC";
			
	$result12 = mysql_query($select12) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row12 = @mysql_fetch_assoc($result12))
	{
		echo "<tr>\n";
		
		foreach($row12 as $value12)
		{
			echo "<td>\n";
			echo $value12;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";
	}elseif(isset($_POST['B'])){
	
	
	$select17 = "SELECT test_id " .
				"FROM questions " .
				"WHERE predmet = 'Elementi' AND paralelka = 'B' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
		$result17 = mysql_query($select17);
		
			while($row17 = @mysql_fetch_assoc($result17))
		{
			extract($row17);
		}
		$test_id1 = $test_id;	
	$select13 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id = $test_id1  AND predmet = 'Elementi' AND paralelka = 'B' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
	$result13 = mysql_query($select13) or die (mysql_error());
	
	while($row13 = @mysql_fetch_assoc($result13))
	{
		extract($row13);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	$select14 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Elementi' AND test_id = $test_id1 AND student_id != 0 AND paralelka = 'B' AND klas = '12' AND teacher_name = '$teacher_name1' " .
			"ORDER BY user_id ASC";
			
	$result14 = mysql_query($select14) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row14 = @mysql_fetch_assoc($result14))
	{
		echo "<tr>\n";
		
		foreach($row14 as $value12)
		{
			echo "<td>\n";
			echo $value12;
			echo "</td>\n";
		}
		echo "</tr>\n";
	}


	echo "</table>\n";
	}elseif(isset($_POST['V'])){
	
	$select17 = "SELECT test_id " .
				"FROM questions " .
				"WHERE predmet = 'Elementi' AND paralelka = 'V' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
		$result17 = mysql_query($select17);
		
			while($row17 = @mysql_fetch_assoc($result17))
		{
			extract($row17);
		}
		$test_id1 = $test_id;	
	
	
	$select5 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id = $test_id1  AND predmet = 'Elementi' AND paralelka = 'V' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
	$result5 = mysql_query($select5) or die (mysql_error());
	
	while($row5 = @mysql_fetch_assoc($result5))
	{
		extract($row5);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	$select6 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Elementi' AND test_id=$test_id1 AND student_id != 0  AND paralelka = 'V' AND klas = '12' AND teacher_name = '$teacher_name1' " .
			"ORDER BY user_id ASC";
			
	$result6 = mysql_query($select6) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row6 = @mysql_fetch_assoc($result6))
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
	
	
	$select17 = "SELECT test_id " .
				"FROM questions " .
				"WHERE predmet = 'Elementi' AND paralelka = 'G' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
		$result17 = mysql_query($select17);
		
			while($row17 = @mysql_fetch_assoc($result17))
		{
			extract($row17);
		}
		$test_id1 = $test_id;
	
	
	
	$select5 = "SELECT nameoftest " .
				"FROM questions " .
				"WHERE test_id = $test_id1  AND predmet = 'Elementi' AND paralelka = 'G' AND klas = '12' AND prepodavatel = '$teacher_name1'";
	
	$result5 = mysql_query($select5) or die (mysql_error());
	
	while($row5 = @mysql_fetch_assoc($result5))
	{
		extract($row5);
	}
	echo "<h2 align = 'center' >Тест : $nameoftest</h2>";
				
	
	
	
	
	$select6 = "SELECT user_id,name,ocenka FROM student " .
			"WHERE predmet = 'Elementi' AND test_id=$test_id1 AND student_id != 0  AND paralelka = 'G' AND klas = '12' AND teacher_name = '$teacher_name1' " .
			"ORDER BY user_id ASC";
			
	$result6 = mysql_query($select6) or die (mysql_error());
	
	
		
	
	echo "<table width='5%' border='10' cellpadding='6' cellspacing='1'  align='center'>\n";
	
	echo "<tr>\n";
		echo "<th>Номер</th>";
		echo "<th>Име</th>";
		echo "<th>Оценка</th>";
		
	while($row6 = @mysql_fetch_assoc($result6))
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
}


?>