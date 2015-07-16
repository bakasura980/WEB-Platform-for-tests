<?php

$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
$connect = mysql_connect("localhost","root","vi98");

 mysql_select_db('textarea');
 
if (isset($_POST['submit'])){
    if ($comment){
        $Insert = "INSERT INTO area (Text) " .
					"VALUES ('$comment')" ;
					
	
			
					
		$results = mysql_query($Insert)
		or die (mysql_error());	
        
    }
    else{
        echo "Please fill out all the fields";
    }
}

?>

<?php
$select = "SELECT * " .
					"FROM area " .
					"ORDER BY Sign_id DESC";
		
		$results = mysql_query($select)
		or die (mysql_error());	
		
while($rows = mysql_fetch_assoc($results))
	{
		extract($rows);
		echo $Text;
		echo "<br>";
	}

?>


<form action="commentbox.php" method="POST">
<table>
<tr><td colspan="2" > The Program : </td> </tr>
<tr><td colspan="2" ><textarea name="comment"> </textarea> </td> </tr>
<tr><td colspan="2" ><input type="submit" name="submit" value="Upload" /></td></tr>
</table>
</form>

