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
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Input Code</title>
</head>

<body>
<form action="Frontpage.php" method="POST">
<table>
<tr><td>Name:  </td><td><input type="text" name="name" /></td></tr>
<tr><td colspan="2" > code: </td> </tr>
<tr><td colspan="2" ><textarea name="text"> </textarea> </td> </tr>
<tr><td colspan="2" ><input type="submit" name="submit" value="Submit" /></td></tr>


</table>
</form>
</body>
</html>



