<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = strval($_GET['q']);
$user = $_GET['users'];

$con = mysqli_connect('localhost','root','vi98','differentests1');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT name FROM options WHERE predmet = '".$q."'";
$result = mysqli_query($con,$sql);


echo "<select name='selected'>";
echo "<option value=''>Select a person</option>";

$teacher_name = array();
while($row = mysqli_fetch_assoc($result)) {
		
    if($row['name'] != "")
	{
		
			
			
		
		if($name1 != $row['name']){
			
		
		$teacher_name[] = $row['name'];
		
		$freqs = array_count_values($teacher_name);
		$freq_12 = $freqs[$row['name']];
		
		
		if($freq_12 < 2) 
		{
			echo "<option>" . $row['name'] . "</options>"; 
		}	
			}
			$name1 = $row['name'];
			//masiv trqva da sytvorq i gotovo za start :) 
			
	}
		$i++;	
		
}












echo "</select>";
mysqli_close($con);
?>
</body>
</html>