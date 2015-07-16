<?php

	$test_id = $_POST['test_id'];
	
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid2 = $_POST['lastid1'];
	if(isset($_POST['submit']))
	{
	$rand_id = 1;
		$connect = mysql_connect("localhost","root","vi98");

		mysql_select_db('edittest');
	
			$insert1 = "INSERT INTO tests (id) " .
				"VALUES ('$test_id')";
	
				$results1 = mysql_query($insert1)
				or die (mysql_error());
	
foreach	($_POST['questions'] as $question) {
 
  $tochki = $question['tochki'];
  $a = $question['answer'];
  $b = $question['question'];
  $c = $question['answer_a'];
  $d = $question['answer_b'];
  $e = $question['answer_c'];
  $f = $question['answer_d'];
  
  
 $insert1 = "INSERT INTO questions (test_id,tochkinazad, question, answer, answer_a, answer_b ,answer_c ,answer_d) " . 
			"VALUES ('$test_id',$tochki, '$b','$a','$c','$d','$e','$f' )";
 
 
	$result1 = mysql_query($insert1)
	or die (mysql_error());
 	
}
}
?>
<form action="teacher_page.html" method="POST">

	Вашият тест се генерира успешно, номер на тест : <?php echo $test_id; ?>
	<br><br>
	Оценката на теста се пресмята по формулата : (а*6)/б
	<br>
	(а - броят на точките на ученика, б - максималният брой точки)
	<br><br>
	<input type="submit" name="submit" value="Ready">
	
</form>