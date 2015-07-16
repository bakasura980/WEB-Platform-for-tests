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
<form method="POST" action="testready1.php" class="form-horizontal">
<?php


	$test_id2 = $_POST['test_id1'];
	$predmet1 = $_POST['predmet'];
	$ime_test = $_POST['ime_test'];
	$klas2 = $_POST['klas1'];
	$paralelka3 = $_POST['paralelka2'];
	$id2 = $_POST['id1'];
	
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
	
	
	if($name == ""){ echo "Вашият тест няма да се генерира , моля влезте си в акаунта";
		include "login_chek.php";
	}elseif($name != ""){
	
	
 $connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	$lastid1 = $_POST['lastid'];
$count = 1;
foreach (range(1, $_POST['broi']) as $i) {
	$az=<<<az
	<div class="text-center">
Напишете въпрос : $i
<input type="text" name="questions[$i][question]">

<br><br>
Напишете брой точки на задача : $i
<input type="text" name="questions[$i][tochki]">	
</div>

<br><br>
Напишете отговор на задача $i :
<br><br>
<div class="col-sm-4"></div> 
<div class="col-sm-12 text-left">
<input type="radio" name="questions[$i][answer]" value="a">a
<input class="form-control" type="text" name="questions[$i][answer_a]">
<input type="radio" name="questions[$i][answer]" value="b">б
<input class="form-control" type="text" name="questions[$i][answer_b]">
<input type="radio" name="questions[$i][answer]" value="c">в
<input class="form-control" type="text" name="questions[$i][answer_c]">
<input type="radio" name="questions[$i][answer]" value="d">г
<input class="form-control" type="text" name="questions[$i][answer_d]">

<br>
<br>
</div>
<div class="col-sm-12"></div>
az;
echo $az;
}
}
?>
<input type="hidden" name="ime_test1" value="<?php echo $ime_test;?>">
<input type="hidden" name="id3" value="<?php echo $id2;?>">
<input type="hidden" name="test_id" value="<?php echo $test_id2;?>">
<input type="hidden" name="paralelka4" value="<?php echo $paralelka3;?>">
<input type="hidden" name="klas3" value="<?php echo $klas2;?>">
<input type="hidden" name="predmet1" value="<?php echo $predmet1;?>">
<div class="text-center">
<input type="submit" name="submit" value="Ready" class="btn btn-primary">
</div>
</div>
</div>
</body>
</form>
</html>