<form method="POST" action="testready.php">
<?php

	$test_id2 = $_POST['test_id1'];

 $connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid1 = $_POST['lastid'];
$count = 1;
foreach (range(1, $_POST['broi']) as $i) {
	$az=<<<az
Напишете въпрос : $i
<input type="text" name="questions[$i][question]">
<br><br>
Напишете брой точки на задача : 
<input type="text" name="questions[$i][tochki]">	


<br><br>
Напишете отгворо на задача $i :
<br><br>
<input type="radio" name="questions[$i][answer]" value="a">a
<input type="text" name="questions[$i][answer_a]">
<input type="radio" name="questions[$i][answer]" value="b">b
<input type="text" name="questions[$i][answer_b]">
<input type="radio" name="questions[$i][answer]" value="c">c
<input type="text" name="questions[$i][answer_c]">
<input type="radio" name="questions[$i][answer]" value="d">d
<input type="text" name="questions[$i][answer_d]">

<br>
<br>

az;
echo $az;
}



?>
<input type="hidden" name="test_id" value="<?php echo $test_id2;?>">
<input type="submit" name="submit" value="Ready">
</form>