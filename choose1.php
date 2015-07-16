<?php

	$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("login");

		$select3 = "SELECT teacher_id ,name_l " .
					"FROM submitlog " .
					"WHERE id_l=(SELECT max(id_l) FROM submitlog) AND options = 'uchitel'";
		
		$result3 = mysql_query($select3) or die (mysql_error());
		
		while($row3 = mysql_fetch_assoc($result3))
		{
			extract($row3);
		}
		$id = $teacher_id;
		$name1 = $name_l;
		

	$connect = mysql_connect("localhost", "root", "vi98");
	
	mysql_select_db("differentests1");
	
	$predmet = $_POST['choice'];
	$klas = $_POST['class'];
	$paralelka1 = $_POST['paralelka'];
	
			$insert = "INSERT INTO options (predmet, klas, paralelka, teacher_id_test, name) " .
				"VALUES ('$predmet', '$klas', '$paralelka1', '$id', '$name1')";
	
				$results = mysql_query($insert)
				or die (mysql_error());
				
	$test_id1 = mysql_insert_id();
	
	
	
?>
<form action="betatest2.php" method="POST">
<br><br>
Име на тест :
<input type="text" name="ime_test" >
<br><br>
Напишете от колко въпроса да се състои тестът :
<input type="text" name="broi" >
<br><br>
<input type="submit" name="submit" value="Make test">
<input type="hidden" name="test_id1" value="<?php echo $test_id1;?>">
<input type="hidden" name="id1" value="<?php echo $id;?>">
<input type="hidden" name="predmet" value="<?php echo $predmet;?>">
<input type="hidden" name="paralelka2" value="<?php echo $paralelka1;?>">
<input type="hidden" name="klas1" value="<?php echo $klas;?>">
</form>