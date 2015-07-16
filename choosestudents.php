<form method="POST" action="writeid1.php">
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


Изберете предмет :
<select name='users' onchange='showUser(this.value)'>
	<option  value="Elementi">Елементи</option>
	<option  value="Cifrova">Цифрова</option>
	<option  value="Matematika">Математика</option>
	<option  value="Istoriq">История</option>
	<option  value="Geografiq">География</option>
</select>

<br><br>

Изберете клас :
<select name="class">
	<option  value="8">8</option>
	<option  value="9">9</option>
	<option  value="10">10</option>
	<option  value="11">11</option>
	<option  value="12">12</option>
</select>
<br><br>
Изберете паралелка :
<select name="paralelka">
<option  value="A">A</option>
<option  value="B">Б</option>
<option  value="V">В</option>
<option  value="G">Г</option>
</select>
<br><br>
Изберете преподавател : 
<b id="txtHint" name="selected"></b>

<br><br>
<input type="submit" name="submit" value="Next">
</form>
