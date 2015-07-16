<?php

$connect = mysql_connect("localhost", "root", "vi98");
		
		mysql_select_db("proect");

$select = "SELECT privilegii " .
						"FROM Sign " .
						"WHERE Sign_id=(SELECT max(Sign_id) FROM Sign)";
			
			$result1 = mysql_query($select) or die (mysql_error());
			
			while($row = mysql_fetch_assoc($result1)){ extract($row);}
			$chovek = $privilegii;
			
			if($chovek == 'uchitel'){
			
				echo "<script>location.href = 'teacher_page.html'</script>";
			} elseif($chovek == 'uchenik') echo "<script>location.href = 'student_page.html'</script>";
								
?>

