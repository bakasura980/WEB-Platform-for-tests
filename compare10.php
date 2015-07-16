<?php


	$id2 = $_POST['random'];
	
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('test10');

 if (isset($_POST['submit'])) 
 { 
	$a = $_POST['1'];
	
	$b=$_POST['2'];

	$c=$_POST['3'];

	$d=$_POST['4'];

	$e=$_POST['5'];

	$f=$_POST['6'];

	$g=$_POST['7'];

	$h=$_POST['8'];

	$j=$_POST['9'];

	$k=$_POST['10']; 
	}

	$insert = "INSERT INTO student_10_10 (t1_10,t2_10,t3_10,t4_10,t5_10,t6_10,t7_10,t8_10,t9_10,t10_10) " .
			"VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$j','$k')" ;
	
	$result = mysql_query($insert)
	or die (mysql_error());
		
	$id1 = mysql_insert_id();
		
	$select1 = "SELECT * FROM student_10_10 " .
				"WHERE Sign_id10 = '$id1'";
		
	$results1 = mysql_query($select1)
	or die (mysql_error());

	
	$select2 = "SELECT * FROM test_10 " .
				"WHERE Sign_id = '$id2'";
		
	$results2 = mysql_query($select2)
	or die (mysql_error());
	
	while($rows1 = mysql_fetch_assoc($results1))
	{
		extract($rows1);
	}
	
	while($rows2 = mysql_fetch_assoc($results2))
	{
		extract($rows2);
	}
	
	echo "<br>";
	if ($t1_ == $t1_10)
	{
		echo "1 - yes";
	} else echo "1 - no - '$t1_'" ;
	echo "<br>";
	if ($t2_ == $t2_10)
	{
		echo "2 - yes";
	} else echo "2 - no - '$t2_'" ;
	echo "<br>";
	if ($t3_ == $t3_10)
	{
		echo "3 - yes";
	} else echo "3 - no - '$t3_'" ;
	echo "<br>";
	if ($t4_ == $t4_10)
	{
		echo "4 - yes";
	} else echo "4 - no - '$t4_'" ;
	echo "<br>";
	if ($t5_ == $t5_10)
	{
		echo "5 - yes";
	} else echo "5 - no - '$t5_'" ;
	echo "<br>";
	if ($t6_ == $t6_10)
	{
		echo "6 - yes";
	} else echo "6 - no - '$t6_'" ;
	echo "<br>";
	if ($t7_ == $t7_10)
	{
		echo "7 - yes";
	} else echo "7 - no - '$t7_'" ;
	echo "<br>";
	if ($t8_ == $t8_10)
	{
		echo "8 - yes";
	} else echo "8 - no - '$t8_'" ;
	echo "<br>";
	if ($t9_ == $t9_10)
	{
		echo "9 - yes";
	} else echo "9 - no - '$t9_'" ;
	echo "<br>";
	if ($t10_ == $t10_10)
	{
		echo "10 - yes";
	} else echo "10 - no - '$t10_'" ;
	
	
?>
<br>
<input type="submit" name="submit2" value="End">
<form action = "student10.php" method = "POST">
<input type="submit" name="submit1" value="Next student">
</form>