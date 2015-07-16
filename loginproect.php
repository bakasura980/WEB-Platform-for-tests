<?php
	session_start();
	
	
	
	
	$_SESSION['username'] = $_POST['usern'];
	$_SESSION['userpass'] = $_POST['passn'];
	$_SESSION['id'] = 1;
	$_SESSION['test_id'] = 6;
	$_SESSION['authuser'] = 0;
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	
	if(($_SESSION['username'] == 'test') and 
	   ($_SESSION['userpass'] == 'test'))
	   {
			$connect = mysql_connect("localhost", "root", "vi98");
		
			mysql_select_db("login");
			
			$insert = "INSERT INTO submitlog(name_l, password_l) " .
						"VALUES ('$username','$password')";
						
			$results = mysql_query($insert) or die (mysql_error());			
				
			header("Location: teacher_page.html");
			
			}else {
	
	
	
	
		
	if ($_SESSION['username'])
	{
				
		$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("proect");
		
		
		
		
		$select1 = "SELECT Password " .
					"FROM Sign " .
					"WHERE Password = '$password'";
					
		$results1 = mysql_query($select1)
		or die (mysql_error());
		
		
		$select = "SELECT Name " .
					"FROM Sign " .
					"WHERE Name = '$username'";
		
		$results = mysql_query($select)
		or die (mysql_error());
		
		
		while ($row = mysql_fetch_array($results)) {
		extract($row);
		}
		
		while ($row1 = mysql_fetch_array($results1)) {
		extract($row1);
		}
		
		if ($_POST['user'] == $Name and $_POST['pass'] == $Password){
//		 include "ahref.php";
		$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("login");
		
		$insert = "INSERT INTO submitlog(name_l, password_l) " .
						"VALUES ('$username','$password')";
						
		$results = mysql_query($insert) or die (mysql_error());	
header("Location: student_page.html");
		} else {
		echo "Your username or password is invalid, try again";
		include "login_chek.php";
		}	
	
	}	}
	
	exit();
	
?>