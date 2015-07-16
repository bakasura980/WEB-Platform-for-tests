<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","WARNING_getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>

<?php

	$connect = mysql_connect("localhost", "root", "vi98");

	mysql_select_db("proect");
	
	$select1 = "SELECT name,Sign_id " .
			"FROM Sign " .
			"WHERE privilegii = 'uchitel ' ".
				"ORDER BY name ASC";
	$result1 = mysql_query($select1) or die (mysql_error());
		echo "<select name='users' onchange='showUser(this.value)'>";
	while($row1 = mysql_fetch_assoc($result1))
	{
		
		extract($row1);
		echo "<option value='$Sign_id'>";
	echo $name;
		echo "</option>";
		
	}
	echo "</select>"; 
	
		
?>

</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>