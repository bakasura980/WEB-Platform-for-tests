<?php session_unset();?>
<?php @session_start();?>
<form method="POST" action="finishtest.php">
<?php

		if($_POST['unique1'])
		{
			if ($_SESSION['test'] == 0)
			{
				$_SESSION['test'] += 1;
			}else $_SESSION['test'] += 1;
				$number_class = $_SESSION['test'];
		}
	
	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	
	$testid = $_POST['selected'];
	$studentid = $_POST['unique1'];
	
		
	
	$select = "SELECT * FROM questions " .
				"WHERE test_id = '$testid'";
				
	$result = mysql_query($select)
	or die (mysql_error());
	$i = 1;
	while ($row = mysql_fetch_array($result))
		{
		
		extract($row);
		
		$ti=<<<EOD

		
		
$i) 
$question
	


<p>
<input type="radio" name="questions[$id][answer]" value="a">a)
$answer_a
<input type="radio" name="questions[$id][answer]" value="b">b)
$answer_b
<input type="radio" name="questions[$id][answer]" value="c">c)
$answer_c
<input type="radio" name="questions[$id][answer]" value="d">d)
$answer_d
</p>

EOD;
echo $ti;
$i++;		
}


?>
<input type="hidden" name="teacherid" value="<?php echo $test_id;?>">
<input type="hidden" name="studentid" value="<?php echo $studentid;?>">
<input type="hidden" name="number" value="<?php echo $number_class;?>">
<input type="submit" name="submit" value="Finish test :)">
</form>