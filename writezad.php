<?php
session_start();

if (! $_SESSION['count']) {
	$_SESSION['count'] = 1;
} else {
	$_SESSION['count'] += 1;
}
if ($_SESSION['count'] > 9)
{
	session_destroy();
}
//$count = 1;


?>
<form action="writezad.php" method="POST">
Type your question here : <input type="text" name="">
			<br><br>
			type answer :
			<input type="text" name="">
			<input type="radio" name="<?php $count;?>" value="a">a
			<input type="text" name="">
			<input type="radio" name="<?php $count;?>" value="b">b
			<input type="text" name="">
			<input type="radio" name="<?php $count;?>" value="c">c
			<input type="text" name="">
			<input type="radio" name="<?php $count;?>" value="d">d
			<br>
			<input type="submit" name="submit" value="Submit">
			<input type="text" name="ddz" value="<?php echo $_SESSION['count']
?>">
</form>
<?php
if($_SESSION['count'] == 10){

	$az=<<<az
	<form action="visual.php" method="POST">
	<input type="submit" name="submit1" value="vizualizirai">
	</form>
az;
echo $az;
}?>

