<div align = "center" id="id10">
<br>
<?php 
	
	
	echo"Today is ";
	echo date("d F");
	echo ", ";
	echo date("Y");
	echo "<br>";
	echo "The time is: ";
	echo date('H:i');
	echo "<br>"; 
	$time = date('H:i');
	if (($time < 12) and ($time > 6))
		echo "GOOD MORNING";
		else if (($time > 12) and ($time < 19))
			echo "GOOD DAY";
		else 
		{
			echo "GOOD EVENING";
		}
	
?>
</div>
<style>
#id10 {color: #FFFFFF;
	font-size: 30px;
	position: absolute;
	left:727px;
	top: 150px;
	}
</style>