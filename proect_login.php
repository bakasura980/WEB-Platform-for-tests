<head>
<meta charset="utf-8">

<title>LennyFaCe</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap Start -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--Bootstrap end-->
</head>
<?php
	//take the variables from file where we have session_start tag
	session_unset();
?>
<?php
// define variables and set to empty values
$nameerr = $passerr = "";
$name2 = $pass2 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST['user'])) {
     $nameerr = "Name is required";
   } else {
     $name2 = test_input($_POST['user']);
   }
   
   if (empty($_POST['pass'])) {
     $passerr = "Password is required";
   } else {
     $pass2 = test_input($_POST['pass']);
   }
}   
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>		
	
<form method="post" class="form-horizontal" action="<?php 
if (empty($_POST["user"]) or empty($_POST["pass"]))
{
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
} else echo "loginproect.php";?>">
  <div class="form-group">
	<div class="col-sm-3"></div>
    <font color="white"><label for="id1" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-4">
      <input type="text" name="user" maxlength = "7" class="form-control" id="id1" value ="<?php echo $name2;?>" placeholder="Username">
	  <span class="error"><?php echo $nameerr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div>
  <div class="form-group">
	<div class="col-sm-3"></div>
    <label for="id2" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="pass" maxlength="10" value ="<?php echo $pass2;?>" id="id2" placeholder="Password">
      <span class="error"><?php echo $passerr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div></font>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-7">
      <button type="submit" name = "Submit" value = "Submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<style>
.form-horizontal{
position: absolute;
top: 50%;
margin-top: -60px;
height: 120px;
left: 50%;
margin-left: -300px;
width: 600px;
}
body {
		background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#id9{
            width: 60%;
            bottom: 0;
			float: left;
            position: absolute;
			background-size : 100%;
		background: url("LoginBackground.jpg") no-repeat center center fixed ; 
		background-size: cover;
			font-weight: bold;
			border-color: #eee;
			border-left-style: solid;
			border-right-style: solid;
			border-top-style: solid;
			margin-left: 20%;
			margin-right: 20%;
			text-align: center;
        }
</style>
<!-- <style>
	#id1 {
		position: absolute;
		top: 36%;
		left:34%;
		font-size: 125%;
		color: #FFFFFF;
	}
	#id2 {
		position: absolute;
		top:45%;
		left: 34%;
		font-size: 125%;
		color: #FFFFFF;
	}
	#id3 {
		position: absolute;
		top: 52%;
		left: 50%;
		font-size: 150%;
		color: #FFFFFF;
	}
	body {
		background-size : 100%;
		background: url("image1.jpg") no-repeat center center fixed ; 
		background-size: cover;
	}
	#id9{
            width: 60%;
            bottom: 0;
			float: left;
            position: absolute;
			background-color: #000000 ;
			font-weight: bold;
			border-color: #eee;
			border-left-style: solid;
			border-right-style: solid;
			border-top-style: solid;
			margin-left: 20%;
			margin-right: 20%;
			text-align: center;
        }
	</style> -->
	
		<div id = "id9" class="jfott"><p><font color= "#FFFFFF">Lenny FaCe@HackTUES2015</font></p></div>