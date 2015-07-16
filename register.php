<head>
<!--Bootstrap Start -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--Bootstrap end-->
</head>
<form class="form-horizontal" method="POST" action="session.php">
  <div class="form-group">
	<div class="col-sm-3"></div>
    <font color="white"><label for="id1" class="col-sm-2 control-label">Име</label>
    <div class="col-sm-4">
      <input type="text" name="user" maxlength = "7" class="form-control" id="id1"  placeholder="Username">
	  <span class="error"><?php echo $nameErr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div>
	<div class="form-group">
	<div class="col-sm-3"></div>
    <label for="id2" class="col-sm-2 control-label">Парола</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="pass" maxlength="10"  id="id2" placeholder="Password">
      <span class="error"><?php echo $passErr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div>
  
  <div class="form-group">
	<div class="col-sm-3"></div>
    <label for="id2" class="col-sm-2 control-label">Град</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="city" maxlength = "15"  id="id3" placeholder="City">
      <span class="error"><?php echo $cityErr;?></span>
	</div>
	<div class="col-sm-3"></div>
  </div></font>
  <font color="white"><div class="col-sm-offset-5 col-sm-5">Изберете своя пол :</div>
  <div class="col-sm-offset-5 col-sm-5">
  <label class="radio-inline">
  <input type="radio" name="sex" id="inlineRadio1" value="Male"> мъж
  </label>
  <label class="radio-inline">
  <input type="radio" name="sex" id="inlineRadio2" value="Female"> жена
  </label>
  </div></font>
  
   <font color="white"><div class="col-sm-offset-5 col-sm-5"></div>
  <div class="col-sm-offset-5 col-sm-5">
  <br>
  </div></font>
  
  
  
  <font color="white"><div class="col-sm-offset-5 col-sm-5">Изберете какви привилегии да имате :</div>
  <div class="col-sm-offset-5 col-sm-5">
  <label class="radio-inline">
  <input type="radio" name="chovek" id="inlineRadio1" value="uchenik"> Ученик
  </label>
  <label class="radio-inline">
  <input type="radio" name="chovek" id="inlineRadio2" value="uchitel"> Учител
  </label>
  </div></font>
  <font color="white"><div class="col-sm-offset-5 col-sm-5"></div>
  <div class="col-sm-offset-5 col-sm-5">
  <br>
  </div></font>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-5">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<style>
.form-horizontal{
position: absolute;
top: 35%;
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
	.jfott {
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
	<!-- #user {
		position: absolute;
		top: 275px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
	}
	#pass {
		position: absolute;
		top: 315px;
		left: 700px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#sex {
		position: absolute;
		top: 350px;
		left: 722px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#city {
		position: absolute;
		top: 380px;
		left: 745px;
		font-size: 125%;
		color: #FFFFFF;
		}
	#submit {
		position: absolute;
		top: 420px;
		left: 880px;
		font-size: 125%;
		color: #FFFFFF; -->
	}
		
	</style>
	<div class="jfott"><p><font color= "#FFFFFF">Lenny FaCe@HackTUES2015</font></p></div>