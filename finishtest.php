<?php
$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');

	$teacherid1 = $_POST['teacherid'];
	$studentid1 = $_POST['studentid'];
	$numberclass = $_POST['number'];
foreach ($_POST['questions'] as $question) {
 
  
  $b = $question['answer'];
  
	$insert2 = "INSERT INTO student (number_in_class, user_id, answer1) " . 
			"VALUES ('$numberclass' ,'$studentid1', '$b')";
 
 
	$result2 = mysql_query($insert2)
	or die (mysql_error());
	
 	
}


?>
<form action="typenum.php" method="POST">

	Тестът ви е готов за проверка
	<br><br>
	<input type="submit" name="submit" value="Проверете резултата си">
	<input type="hidden" name="teacherid1" value="<?php echo $teacherid1 ;?>">
	<input type="hidden" name="num" value="<?php echo $numberclass ;?>">
	<input type="hidden" name="studentid1" value="<?php echo $studentid1 ;?>">
</form>

