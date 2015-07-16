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
	}	
	
</style>
</head>
<body>
<?php
$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$ime = $_POST['ime1'];
	$predmet = $_POST['predmet1'];
	$teacherid1 = $_POST['teacherid'];
	$studentid1 = $_POST['studentid'];
	$numberclass = $_POST['number'];
	$test_id = $_POST['testid1'];
	$paralelka5 = $_POST['paralelka4'];
	$klas4 = $_POST['klas3'];
	$selected5 = $_POST['selected4'];
	
foreach ($_POST['questions'] as $question) {
 
  
  $b = $question['answer'];
  
	$insert2 = "INSERT INTO student (test_id, number_in_class, user_id, predmet, answer1, name, teacher_name) " . 
			"VALUES ('$test_id', '$numberclass' , '$studentid1', '$predmet', '$b', '$ime', '$selected5')";
 
 
	$result2 = mysql_query($insert2)
	or die (mysql_error());
	
 	
}


?>
<form action="typenum1.php" class="col-sm-12 text-center" method="POST" >
	<font color="white" id="text">	
	<div>
	Тестът ви е готов за проверка
	</div>
	</font>
	<br><br>
	<div>
	<button type="submit" name="submit" class="btn btn-default" value="Ready">Chek your answer</button>
	</div>
	<input type="hidden" name="paralelka6" value="<?php echo $paralelka5;?>">
	<input type="hidden" name="teacherid1" value="<?php echo $teacherid1 ;?>">
	<input type="hidden" name="num" value="<?php echo $numberclass ;?>">
	<input type="hidden" name="klas5" value="<?php echo $klas4 ;?>">
	<input type="hidden" name="studentid1" value="<?php echo $studentid1 ;?>">
</form>
</body>
</html>