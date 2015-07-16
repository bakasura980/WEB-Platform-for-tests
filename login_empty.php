<?php
	if(empty($_POST['user']) or empty($_POST['pass']))
	{
		echo "Някое поле не е попълнено, моля изчакайте да ви пренасочим.";
		include "ahref1.php";
	} else {  
		
		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		if(($_POST['user'] == 'test') and 
	   ($_POST['pass'] == 'test'))
	   {
			$connect = mysql_connect("localhost", "root", "vi98");
		
			mysql_select_db("login");
			
			$insert = "INSERT INTO test(name) " .
						"VALUES ('$username')";
						
			$results = mysql_query($insert) or die (mysql_error());			
				
			echo ("<script>location.href = 'test_panel.php'</script>");
			
			}else 
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
		
		mysql_select_db("proect");


		$select3 = "SELECT privilegii,Sign_id " .
					"FROM Sign " .
					"WHERE Name = '$username' AND Password = '$password'";
		
		$result3 = mysql_query($select3) or die (mysql_error());
		
		while($row3 = mysql_fetch_assoc($result3))
		{
			extract($row3);
		}
		$privileg = $privilegii;	
		$id = $Sign_id;
		
		
		$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("login");
		
		$insert = "INSERT INTO submitlog(name_l, password_l, teacher_id, options) " .
						"VALUES ('$username','$password','$id','$privileg')";
						
		$results = mysql_query($insert) or die (mysql_error());	
		if($privileg == 'uchenik'){
		echo ("<script>location.href = 'student_page.html'</script>");} elseif($privileg == 'uchitel'){
		echo ("<script>location.href = 'teacher_page.html'</script>");}
		} else {
		echo "Вашето име или парола е навлидно";
		include "login_chek.php";
		}	
	
	}	}
	
?>



	