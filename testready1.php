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
<?php
	
	$test_id = $_POST['test_id'];
	$predmet = $_POST['predmet1'];
	$ime_test1 = $_POST['ime_test1'];
	$klas4 = $_POST['klas3'];
	$paralelka5 = $_POST['paralelka4'];
	$id4 = $_POST['id3'];
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('login');
	
	$select = "SELECT name_l " .
				"FROM submitlog " .
				"WHERE id_l=(SELECT max(id_l) FROM submitlog) AND options = 'uchitel'";
				
	$result3 = mysql_query($select) or die (mysql_query());
	while($row = mysql_fetch_array($result3))
	{
		extract($row);
	}
	$name = $name_l;
	
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid2 = $_POST['lastid1'];
	if(isset($_POST['submit']))
	{
	$rand_id = 1;
		$connect = mysql_connect("localhost","root","vi98");

		mysql_select_db('edittest');
	
			$insert1 = "INSERT INTO tests (id, predmet, teacher_id) " .
				"VALUES ('$test_id', '$predmet', '$id4')";
	
				$results1 = mysql_query($insert1)
				or die (mysql_error());
	
	foreach	($_POST['questions'] as $question) 
	{
	 
		$tochki = $question['tochki'];
		$a = $question['answer'];
		$b = $question['question'];
		$c = $question['answer_a'];
		$d = $question['answer_b'];
		$e = $question['answer_c'];
		$f = $question['answer_d'];
	
  
		$insert1 = "INSERT INTO questions (test_id,tochkinazad,predmet,question,answer,answer_a,answer_b ,answer_c ,answer_d,prepodavatel) " . 
			"VALUES ('$test_id',$tochki, '$predmet', '$b','$a','$c','$d','$e','$f','$name')";
 
	 
		$result1 = mysql_query($insert1)
		or die (mysql_error());
 	
	}
	
			
	$update1 = "UPDATE questions " .
			"SET nameoftest = '$ime_test1' " .
			"WHERE test_id	= $test_id";
	
	$result = mysql_query($update1) or die (mysql_error());
	
	$update2 = "UPDATE questions " .
			"SET paralelka = '$paralelka5' " .
			"WHERE test_id	= $test_id";
	
	$result1 = mysql_query($update2) or die (mysql_error());
	
	$update3 = "UPDATE questions " .
			"SET klas = '$klas4' " .
			"WHERE test_id	= $test_id";
	
	$result2 = mysql_query($update3) or die (mysql_error());
	

}
	
	
?>
<form action="teacher_page.html" method="POST" >
	<font color="white" id="text">	
	<div>
	Вашият тест се генерира успешно, номер на тест :  <?php echo $test_id; ?>
	</div>
	</font>
	<font color="white" id="text">	
	<div>
	Оценката на теста се пресмята по формулата : (а*6)/б 
	</div>
	</font>
	<font color="white" id="text">	
	<div>
	(а - броят на точките на ученика, б - максималният брой точки)
	</div>
	</font>
	<br><br>
	<div class="col-sm-12 text-center">
	<input class="btn btn-default" name="submit" type="submit" value="Ready">
	</div>

</form>

<body>
<style>
	body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#text{
		margin-top: 0;
		border-bottom:0;
		color:#ffffff;
		font-style: italic;
	 	text-align: center;
		font-size: 1.875em;
		/* <-- tva gornoto go gledah ot W3schools --> */
	}
	#button{
		color:black;
		background-color:white;
		border-color:white;
		margin-top: 0;
		border-bottom:0;
		text-align: center;
		float:center;
	}
</style>
</body>
</html>