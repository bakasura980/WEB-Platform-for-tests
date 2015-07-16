<?php
$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('test10');
	
if(isset($_POST['submit'])) {
	$a1 = $_POST['10'];
	
	$b1=$_POST['20'];

	$c1=$_POST['30'];

	$d1=$_POST['40'];

	$e1=$_POST['50'];

	$f1=$_POST['60'];

	$g1=$_POST['70'];

	$h1=$_POST['80'];

	$j1=$_POST['90'];

	$k1=$_POST['100'];
}

$connect = mysql_connect("localhost","root","vi98");

	mysql_select_db('test10');
	
	$insert1 = "INSERT INTO test_10 (t1_,t2_,t3_,t4_,t5_,t6_,t7_,t8_,t9_,t10_) " .
			"VALUES ('$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$j1','$k1')" ;
	
	$result1 = mysql_query($insert1)
	or die (mysql_error());
	$id2 = mysql_insert_id();

?>

<form method="POST" action="compare10.php">
<input type="hidden" name="random" value = "<?php echo $id2;?>">

<br>
1) <input type="radio" name="1" value="a">a
<input type="radio" name="1" value="b">b
<input type="radio" name="1" value="c">c
<input type="radio" name="1" value="d">d

<br>
<br>
2) <input type="radio" name="2" value="a">a
<input type="radio" name="2" value="b">b
<input type="radio" name="2" value="c">c
<input type="radio" name="2" value="d">d

<br>
<br>
3) <input type="radio" name="3" value="a">a
<input type="radio" name="3" value="b">b
<input type="radio" name="3" value="c">c
<input type="radio" name="3" value="d">d

<br>
<br>
4) <input type="radio" name="4" value="a">a
<input type="radio" name="4" value="b">b
<input type="radio" name="4" value="c">c
<input type="radio" name="4" value="d">d

<br>
<br>
5) <input type="radio" name="5" value="a">a
<input type="radio" name="5" value="b">b
<input type="radio" name="5" value="c">c
<input type="radio" name="5" value="d">d

<br>
<br>
6) <input type="radio" name="6" value="a">a
<input type="radio" name="6" value="b">b
<input type="radio" name="6" value="c">c
<input type="radio" name="6" value="d">d

<br>
<br>
7) <input type="radio" name="7" value="a">a
<input type="radio" name="7" value="b">b
<input type="radio" name="7" value="c">c
<input type="radio" name="7" value="d">d

<br>
<br>
8) <input type="radio" name="8" value="a">a
<input type="radio" name="8" value="b">b
<input type="radio" name="8" value="c">c
<input type="radio" name="8" value="d">d

<br>
<br>
9) <input type="radio" name="9" value="a">a
<input type="radio" name="9" value="b">b
<input type="radio" name="9" value="c">c
<input type="radio" name="9" value="d">d

<br>
<br>
10) <input type="radio" name="10" value="a">a
<input type="radio" name="10" value="b">b
<input type="radio" name="10" value="c">c
<input type="radio" name="10" value="d">d

<br><br>
<input type="submit" name="submit" value="Ready">
</form>
