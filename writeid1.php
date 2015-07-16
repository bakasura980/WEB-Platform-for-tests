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
</head>
<body>
<div id="lenny">
<img src="rsz_lennyface.jpg">
</div>
<div class="container">
<div class="jumbotron text-left">
<form action="betastudent2.php" method="POST">
<?php
	
	$predmet = $_POST['users'];
	$klas = $_POST['class'];
	$paralelka1 = $_POST['paralelka'];	
	$selected1 = $_POST['selected'];
	
	
	
	
	
	$connect = mysql_connect("localhost", "root", "vi98");
	
	mysql_select_db("differentests1");

	$select = "SELECT id " .
			"FROM options " .	
			"WHERE predmet='$predmet' AND paralelka='$paralelka1' AND klas='$klas' AND name='$selected1'";
	
	$result = mysql_query($select)
	or die (mysql_error());
	
	$result1 = mysql_query($select)
	or die (mysql_error());

	if($row1 = mysql_fetch_assoc($result)){

	
	echo "Изберете тест ";
	echo "<select name='selected'>";
	
	while($row = mysql_fetch_assoc($result1))
	{
		extract($row);
		echo "<option>";
		echo $id;
		echo "</option>";

	}
	
		
	echo "</select>"; 
	} else  {
		echo "<h1>Няма генерирани тестове</h1>";
		include "ERROR404.php";
		}
	
	
	
	

?>
<br><br>
Напишете си името на кирилица :
<input type="text" name="ime">
<br><br>
Напишете своя номер в клас : 
<input type="text" name="unique1">
<br><br>
<input type="submit" name="Submit" value="Make the test" class="btn btn-primary">
<input type="hidden" name="predmet" value="<?php echo $predmet;?>">
<input type="hidden" name="selected2" value="<?php echo $selected1;?>">
<input type="hidden" name="paralelka2" value="<?php echo $paralelka1;?>">
<input type="hidden" name="klas1" value="<?php echo $klas;?>">
</form>
</div>
</div>

</body>
</html>