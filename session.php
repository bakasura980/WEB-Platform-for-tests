<?php
	
	$_SESSION['username'] = $_POST['user'];
	$_SESSION['userpass'] = $_POST['pass'];
	$_SESSION['usersex'] = $_POST['sex'];
	$_SESSION['usercity'] = $_POST['city'];
	// cant take $_SESSION variable in INSERT tag, but normaly variables can 
	$name = $_POST['user'];
	$pass = $_POST['pass'];
	$sex = $_POST['sex'];
	$city = $_POST['city'];
	$privileg = $_POST['chovek'];
	
	if(empty($_POST['user']) or empty($_POST['pass']) or empty($_POST['sex']) or empty($_POST['city']) or empty($_POST['chovek']))
	{
	
		echo "Изпуснали сте да попълните някое поле, изчакайте да ви пренасочим";
		include "reload2_reg.php";
	}elseif($_POST['user'])
	{
		$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("proect");		
		//bool define ( string Name , mixed $value [, bool $case_insensitive = false ] )
		$select = "SELECT Name " .
					"FROM Sign " .
					"WHERE Name = '$name'";
	
		$results = mysql_query($select);
		
		
		
		if ($row = mysql_fetch_array($results)) 
		{
			//extract($row);
			include "reload_reg.php";
		} else {
		//need to read database for tell what is reg just!!!***
			$Sign = "INSERT INTO Sign (Name,Password,Sex,City,privilegii) " .
						"VALUES ('$name', '$pass', '$sex', '$city', '$privileg')" ;
						
		
				
			//Show the data in basadate(mysql)			
			$results = mysql_query($Sign);
			
			
			include "ahref.php";
			
		
		}
	}
	
	
?>
