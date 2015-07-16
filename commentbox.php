<?php
require('connect.php');
error_reporting (E_ALL ^ E_NOTICE);
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

if ($submit){
    if ($name&&$comment){
        $insert=mysql_query("INSERT INTO comment (name,comment) VALUES('$name','$comment')");
        header("Location: success.php");
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

	<title>comment box</title>
</head>

<body>
<form action="commentbox.php" method="POST">
<table>
<tr><td>Name:  </td><td><input type="text" name="name" /></td></tr>
<tr><td colspan="2" > Comment: </td> </tr>
<tr><td colspan="2" ><textarea name="comment"> </textarea> </td> </tr>
<tr><td colspan="2" ><input type="submit" name="submit" value="Comment" /></td></tr>


</table>
</form>
<?php
$getquery=mysql_query("SELECT * FROM comment ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery)){
    $id=$rows['id'];
    $name=$rows['name'];
    $comment=$rows['comment'];
    echo '<font color="black" font weight=bold;>' . 'Name:' . '<font color="red" font weight=bold;>' . $name . '<br />' . '<br />' . '<font color="green">' . $comment . '<br />' . '<hr width=100% />'
;}

?>
</body>
</html>