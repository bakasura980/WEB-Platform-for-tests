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
$q = intval($_GET['q']);

$con = mysql_connect('localhost','root','vi98');
mysql_select_db("proect","ajax_demo");




$sql="SELECT Name FROM Sign WHERE id = '".$q."'";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Sign_id'] . "</td>";
   
    echo "</tr>";
}
echo "</table>";
mysql_close();
?>
</body>
</html>
