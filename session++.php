<?php
	session_start();
?>

<form action="session++.php" method="POST">
<?php





if ($_SESSION['test'] == 0)
{
	$_SESSION['test'] += 1;
}else $_SESSION['test'] += 1;
$az = $_SESSION['test'];
echo $az;
session_destroy();
?>

<input type="submit" name="kurec" value="submit">
</form>