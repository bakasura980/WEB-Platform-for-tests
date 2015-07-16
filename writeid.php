<form action="betastudent.php" method="POST">
<?php

	$predmet = $_POST['choice'];
	$klas = $_POST['class'];
	$paralelka = $_POST['paralelka'];	
		
	$connect = mysql_connect("localhost", "root", "vi98");
	
	mysql_select_db("differentests1");

	$select = "SELECT id " .
			"FROM options " .	
			"WHERE predmet='$predmet' AND paralelka='$paralelka' AND klas='$klas'";
	
	$result = mysql_query($select)
	or die (mysql_error());
	
	echo "<select name='selected'>";
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		echo "<option>";
		echo $id;
		echo "</option>";

	}
		
	echo "</select>";
	

?>




<br><br>
Type your number in class : 
<input type="text" name="unique1">
<br><br>
<input type="submit" name="Submit" value="Make the test">
</form>