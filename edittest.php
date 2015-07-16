<?php
	$connect = mysql_connect("localhost", "root", "vi98");
	
	mysql_select_db("differentests");
	
	$predmet = $_POST['choice'];
	$klas = $_POST['class'];
	$paralelka = $_POST['paralelka'];
			$insert = "INSERT INTO options (predmet, klas, paralelka) " .
				"VALUES ('$predmet', '$klas', '$paralelka')";
	
				$results = mysql_query($insert)
				or die (mysql_error());
				
	$test_id1 = mysql_insert_id();
	
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	
			$insert1 = "INSERT INTO tests (id) " .
				"VALUES ('$test_id1')";
	
				$results = mysql_query($insert1)
				or die (mysql_error());	


?>



<form action="betatest.php" method="POST">
<br><br>
Type number of question :
<input type="text" name="broi" >
<br><br>
<input type="submit" name="submit" value="Make test">
</form>