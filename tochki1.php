<?php

	$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('tochki');

	$sum = 0;
if(isset($_POST['submit']))
	{
		
				
		foreach	($_POST['tochki'] as $zad_tochki)
		{

			$zad = $zad_tochki['razmer'];

			$insert1 = "INSERT INTO tochici (tochki_t, id_test) " . 
					"VALUES ('$zad',3)";
		 
			$result1 = mysql_query($insert1)
			or die (mysql_error());
		}
	}
	$select1 = "SELECT * FROM tochici " .
				"WHERE id_test = 3";
				
	$result1 = mysql_query($select1)
	or die (mysql_error());
	
	while($rows2 = mysql_fetch_assoc($result1))
	{
		extract($rows2);
		
		$sum = $sum + $tochki_t;
	}
	echo $sum;

?>
This insert is successfully :)