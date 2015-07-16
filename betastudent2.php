<?php session_unset();?>
<?php @session_start();?>
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
	#lenny{
	margin-top:2%;
	}
</style>
</head>
<body>
<div class="col-sm-12 text-center" id="lenny"><img src="rsz_lennyface.jpg"></div>
<div class="container">
<div class="jumbotron text-left">
<form method="POST" action="finishtest1.php">
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
	
	$predmet1 = $_POST['predmet'];
	$testid = $_POST['selected'];
	$ime = $_POST['ime'];
	$studentid = $_POST['unique1'];
	$paralelka3 = $_POST['paralelka2'];
	$klas2 = $_POST['klas1'];	
	$selected3 = $_POST['selected2'];
	
	
	$select1 = "SELECT * FROM questions " .
				"WHERE test_id = '$testid'";
				
	$result1 = mysql_query($select1)
	or die (mysql_error());
	
	while ($row1 = mysql_fetch_array($result1)){extract($row1);} echo "<h2 align = 'center'>$nameoftest</h2>";
	$i = 1;
	
	$select = "SELECT * FROM questions " .
				"WHERE test_id = '$testid'";
				
	$result = mysql_query($select)
	or die (mysql_error());
	
	while ($row = mysql_fetch_array($result))
		{
		
		extract($row);
		
		$ti=<<<EOD

		
<h4>
$i) 
$question
</h4>
<div class="radio">
<label>	
<input type="radio" name="questions[$id][answer]" id="optionsRadios1" value="a">a)
$answer_a
</label>
</div>

<div class="radio">
<label>	
<input type="radio" name="questions[$id][answer]"  id="optionsRadios2" value="b">б)
$answer_b
</label>
</div>

<div class="radio">
<label>	
<input type="radio" name="questions[$id][answer]" id="optionsRadios3" value="c">в)
$answer_c
</label>
</div>

<div class="radio">
<label>	
<input type="radio" name="questions[$id][answer]" id="optionsRadios4" value="d">г)
$answer_d
</label>
</div>
<br>


EOD;
echo $ti;
$i++;		
}


?>
<input type="hidden" name="ime1" value="<?php echo $ime;?>">
<input type="hidden" name="paralelka4" value="<?php echo $paralelka3;?>">
<input type="hidden" name="predmet1" value="<?php echo $predmet1;?>">
<input type="hidden" name="selected4" value="<?php echo $selected3;?>">
<input type="hidden" name="teacherid" value="<?php echo $test_id;?>">
<input type="hidden" name="testid1" value="<?php echo $testid;?>">
<input type="hidden" name="studentid" value="<?php echo $studentid;?>">
<input type="hidden" name="number" value="<?php echo $number_class;?>">
<input type="hidden" name="klas3" value="<?php echo $klas2;?>">
<div class="col-sm-12 text-center">
<input class="btn btn-primary" name="submit" type="submit" value="Finish Test">
</div>
</div>
</div>
</form>
</body>