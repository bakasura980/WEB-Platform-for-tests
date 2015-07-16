<form action="tochki1.php" method="POST">
<?php

foreach (range(1,3) as $i) {
	$az=<<<az
Type question : $i
<input type="text" name="tochki[$i][razmer]">
az;
echo $az;
}
?>

<input type="submit" name="submit" value="NExT">
</form>