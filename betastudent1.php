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
		margin-top: 5%;
		margin-bottom:4%;
		margin-left:auto;
		margin-right:auto;
		padding:4%;
	}
</style>
</head>
<div class="container">
<div class="jumbotron text-left">
<form method="POST" class="form-inline" action="finishtest.php">
<?php
 $connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('edittest');
	
	$teacherid = $_POST['unique'];
	$studentid = $_POST['unique1'];
	
	$select = "SELECT * FROM teacher " .
				"WHERE teacher_id = $teacherid";
				
	$result = mysql_query($select)
	or die (mysql_error());
	$i = 1;
	while ($row = mysql_fetch_array($result))
		{
		
		extract($row);
		
		$ti=<<<EOD

		
		
$i
$question
<label class="radio-inline">
<input type="radio" name="questions[$id][answer]" id="inlineradio1" value="a">a
$answer_a
</label>
<label class="radio-inline">
<input type="radio" name="questions[$id][answer]" id="inlineradio2" value="b">b
$answer_b
</label>
<label class="radio-inline">
<input type="radio" name="questions[$id][answer]" id="inlineradio3" value="c">c
$answer_c
</label>
<label class="radio-inline">
<input type="radio" name="questions[$id][answer]" id="inlineradio3" value="d">d
$answer_d
</label>
EOD;
echo $ti;
$i++;		
}


?>
<input type="hidden" name="teacherid" value="<?php echo $teacherid;?>">
<input type="hidden" name="studentid" value="<?php echo $studentid;?>">

<div class="col-sm-12 text-center">
<input class="btn btn-default" name="submit" type="submit" value="Finish Test">
</div>
</div>
</div>
</form>