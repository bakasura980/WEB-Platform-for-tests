<html>
<head>
<meta charset="utf-8">

<title>LennyFaCe</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap Start -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--Bootstrap end-->
</head>
<style>
	.jumbotron {
		border-style:solid;
		border-width: 3px;
		width:85%;
		margin-top: 3%;
		margin-bottom:4%;
		margin-left:auto;
		margin-right:auto;
		padding:3%;
	}
	body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#Lenny{
		margin-top: 2%;
		border-bottom:0;
		text-align: center;
	}
</style>
<body>
<div id="lenny">
<img src="rsz_lennyface.jpg">
</div>
<font color="white">
<?php

	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$i = 1; $sum = 0; $count = 0;
	$teacherid2 = $_POST['teacherid1'];
	$studentid2 = $_POST['studentid1'];
	$numberclass1 = $_POST['num'];
	$paralelka7 = $_POST['paralelka6'];
	$klas6 = $_POST['klas5'];
	
	
	$select = "SELECT * FROM questions " .
				"WHERE test_id = $teacherid2";
				
	$result = mysql_query($select)
	or die (mysql_error());
	
	$select1 = "SELECT * FROM student " .
				"WHERE user_id = $studentid2 AND number_in_class = $numberclass1 AND test_id = $teacherid2";
				
	$result1 = mysql_query($select1)
	or die (mysql_error());
	
	
	
	while($rows1 = mysql_fetch_assoc($result) and $rows2 = mysql_fetch_assoc($result1))
	{
		extract($rows1);
		extract($rows2);
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
	if($rating < 2)
	{
		$rating = 2;
		echo $rating;
	}else
		echo round($rating, 2);
		
	$select3 = "SELECT max(id1) " .
				"FROM student " .
				"WHERE user_id = $studentid2";
				
	$result4 = mysql_query($select3) or die (mysql_error());
	
	while($rows4 = mysql_fetch_assoc($result4))
	{
	
		extract($rows4);
		$id4 = $id1;
		$update = "UPDATE student " .
			"SET ocenka = $rating " .
			"WHERE user_id = $studentid2 AND id1 = '$id4'";
	
		$result = mysql_query($update) or die (mysql_error());
	
	
	}
	
	
	
	$select7 = "SELECT max(id1) " .
				"FROM student " .
				"WHERE user_id = $studentid2";
				
	$result7 = mysql_query($select7) or die (mysql_error());
	
	while($rows6 = mysql_fetch_assoc($result7))
	{
		extract($rows6);
		$id = $id1;
	
		$update1 = "UPDATE student " .
			"SET student_id = $studentid2 " .
			"WHERE user_id = $studentid2 AND id1 = $id";
	
		$result = mysql_query($update1) or die (mysql_error());
	}
	
	$select3 = "SELECT max(id1) " .
				"FROM student " .
				"WHERE user_id = $studentid2";
				
	$result4 = mysql_query($select3) or die (mysql_error());
	
	while($rows4 = mysql_fetch_assoc($result4))
	{
	
		extract($rows4);
		$id4 = $id1;
		$update = "UPDATE student " .
			"SET paralelka = '$paralelka7' " .
			"WHERE user_id = $studentid2 AND id1 = '$id4'";
	
		$result = mysql_query($update) or die (mysql_error());
	
	
	}
	
	$select9 = "SELECT max(id1) " .
				"FROM student " .
				"WHERE user_id = $studentid2";
				
	$result9 = mysql_query($select9) or die (mysql_error());
	
	while($rows9 = mysql_fetch_assoc($result9))
	{
		extract($rows9);
		$id3 = $id1;
	
		$update3 = "UPDATE student " .
			"SET klas = '$klas6' " .
			"WHERE user_id = $studentid2 AND id1 = '$id3'";
	
		$result = mysql_query($update3) or die (mysql_error());
	}
	
?>
</font>
<form method="POST" action="student_page.html">
<input type="submit" name="submit" value="Finish">
</form>
</body>
</html>