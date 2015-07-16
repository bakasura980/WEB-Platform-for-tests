<?php

	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$i = 1; $sum = 0; $count = 0;
	$teacherid2 = $_POST['teacherid1'];
	$studentid2 = $_POST['studentid1'];
	$numberclass1 = $_POST['num'];
	
	$select = "SELECT * FROM questions " .
				"WHERE test_id = $teacherid2";
				
	$result = mysql_query($select)
	or die (mysql_error());
	
	$select1 = "SELECT * FROM student " .
				"WHERE user_id = $studentid2 AND number_in_class = $numberclass1";
				
	$result1 = mysql_query($select1)
	or die (mysql_error());
	
	$select2 = "SELECT * FROM questions " .
				"WHERE test_id = $teacherid2";
				
	$result2 = mysql_query($select2)
	or die (mysql_error());
	
	while($rows1 = mysql_fetch_assoc($result) and $rows2 = mysql_fetch_assoc($result1) and $rows3 = mysql_fetch_assoc($result2))
	{
		extract($rows1);
		extract($rows2);
		extract($rows3);
		if($answer == $answer1)
		{
			echo "$i - yes";
			$sum = $sum + $tochkinazad; 
		} else echo "$i - no - '$answer'";
		echo "<br>";
		$i++;
		$count = $count + $tochkinazad;
	}
	echo "Общ брой точки : ";
	echo $count;
	echo "<br><br>";
	echo "Твоите точки : ";
	echo $sum;
	$rating = ($sum * 6) / $count;
	echo "<br><br>";
	echo "Твоята оценка е : ";
	echo round($rating, 2);
	
?>
<form action="student_page.html" method="POST">
<input type="submit" value="Next">
</form>