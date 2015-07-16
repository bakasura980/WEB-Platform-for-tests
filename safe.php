<?php
$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('login');
	
	$select7 = "SELECT * " .
					"FROM submitlog " .
					"WHERE id_l=(SELECT MAX(id_l) FROM submitlog)";
		
		$results5 = mysql_query($select7)
		or die (mysql_error());	
		
	while($rows2= mysql_fetch_assoc($results5))
	{
		extract($rows2);
	}
		
	if ($name_l == 'test' and $password_l == 'test'){


	
		
echo "<div align='center'>";

$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('textarea');


			
$select = "SELECT * " .
					"FROM area " .
					"WHERE Sign_id = 52";
		
		$results = mysql_query($select)
		or die (mysql_error());	
		

	while($rows = mysql_fetch_assoc($results))
	{
		extract($rows);
		echo $Text;
		echo "<br>";
	}
//DA GO NAUCHAAAAAA TOZI STYLE DESIGN !
   $test =<<<test
</div>
<head>
<style>
	div{
		float: none;
		font-family: Consolas, 'Liberation Mono', Menlo, Courier, monospace;//
		font-kerning: auto;
		font-size: 12px;
		tab-size: 8;
		text-align: start;
		white-space: pre;
	}

</style>
</head>
<form action=" text.php " method = "POST">
<input type="submit" name="submit" value="Upload">
</form>
test;
echo $test;
} else {
echo "<div align='center'>";

$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('textarea');


			
$select = "SELECT * " .
					"FROM area " .
					"WHERE Sign_id = 52";
		
		$results = mysql_query($select)
		or die (mysql_error());	
		
		$results = mysql_query($select)
		or die (mysql_error());	
		

	while($rows = mysql_fetch_assoc($results))
	{
		extract($rows);
		echo $Text;
		echo "<br>";
	}
//DA GO NAUCHAAAAAA TOZI STYLE DESIGN !
   $test1 =<<<test1
</div>
<head>
<style>
	div{
		float: none;
		font-family: Consolas, 'Liberation Mono', Menlo, Courier, monospace;//
		font-kerning: auto;
		font-size: 12px;
		tab-size: 8;
		text-align: start;
		white-space: pre;
	}

</style>
</head>
test1;
echo $test1;
}
?>