<!DOCTYPE html>
<!-- This is how you make a comment -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Still in Alpha</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<style>
		.page-header {
			text-align:center;
			float:left;
			border-left-style: ridge;
			border-left-color: #6B6B6B;
			border-right-style: ridge;
			border-right-color: #6B6B6B;
			background-color:black;
			color:white;
			height: 120px;
			width: 90%;
			margin-top: 0px;
			margin-bottom: 0px;
			margin-left: 5%;
			margin-right: 5%
			padding-top: 1%;
			padding-bottom: 1%;
		}
		h1 {
			font-size: 300%;
		}
		.jumbotron{
			float: left;
			width: 67%;
			height: 190px;
			border-right-style: solid;
			border-bottom-style: solid;
			border-left-style: solid;
			margin-left: 16%;
			margin-right: 16%;
			margin-top: -0.05%;
			margin-bottom: 0%;
			padding-top: 1%;
			padding-bottom: 0%;
			padding-left: 5%;
			padding-right: 5%;
		}
		.dropdown{
		
		}
	</style>
</head>
<body>
	<div class="page-header">
		<h1>Project Name</h1>
	</div>
	
	<div class="jumbotron">
		<h2>About The Project and Us</h2>
	</div>
	<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Choose task to show
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">JavaScript</a></li>
			</ul>
	</div>
<?php
require('connect2.php');
error_reporting (E_ALL ^ E_NOTICE);
$name=$_POST['name'];
$text=$_POST['text'];
$submit=$_POST['submit'];

if ($submit){
    if ($name&&$text){
        $insert=mysql_query("INSERT INTO text (name,text) VALUES('$name','$text')");
        header("Location: success2.php");
    }
    else{
        echo "Please fill out all the fields";
    }
}

?>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>text box</title>
	
	<form action="Frontpage.php" method="POST">
	<table>
	<tr><td>Name:  </td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2" > text: </td> </tr>
	<tr><td colspan="2" ><textarea name="text"> </textarea> </td> </tr>
	<tr><td colspan="2" ><input type="submit" name="submit" value="text" /></td></tr>


	</table>
	</form>
<?php
$getquery=mysql_query("SELECT * FROM text ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery)){
    $id=$rows['id'];
    $name=$rows['name'];
    $text=$rows['text'];
    echo '<font color="black" font weight=bold;>' . 'Name:' . '<font color="red" font weight=bold;>' . $name . '<br />' . '<br />' . '<font color="green">' . $text . '<br />' . '<hr width="1500px" />'
;}

?>
	</body>
	</html>





