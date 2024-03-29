﻿<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>

</head>
<body>
<div class="container">
	<div class="row">
        <h2>Multi level dropdown menu in Bootstrap 3</h2>
        <hr>
        <div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn-lg btn-warning" data-target="#" href="/page.html">
                Оценки <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level btn btn-danger" role="menu" aria-labelledby="dropdownMenu">
              <li role="presentation"><a href="#">Елементи</a></li>
		      <li role="presentation"><a href="#">Цифрова</a></li>
		      <li role="presentation"><a href="#">Математика</a></li>
			  <li role="presentation"><a href="#">География</a></li>
             
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">История</a>
                <ul class="dropdown-menu btn btn-danger">
                  
                  <li class="dropdown-submenu">
                    <a href="#">8</a>
                    <ul class="dropdown-menu btn btn-danger">
                        <li><a href="#">А</a></li>
                    	<li><a href="#">Б</a></li>
						<li><a href="#">В</a></li>
						<li><a href="#">Г</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">9</a>
                    <ul class="dropdown-menu btn btn-danger">
                        <li><a href="#">А</a></li>
                    	<li><a href="#">Б</a></li>
						<li><a href="#">В</a></li>
						<li><a href="#">Г</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">10</a>
                    <ul class="dropdown-menu btn btn-danger">
                        <li><a href="#">А</a></li>
                    	<li><a href="istoriq.php">Б</a></li>
						<li><a href="#">В</a></li>
						<li><a href="#">Г</a></li>
                    </ul>
                  </li>
				  <li class="dropdown-submenu">
                    <a href="#">11</a>
                    <ul class="dropdown-menu btn btn-danger">
                        <li><a href="#">А</a></li>
                    	<li><a href="#">Б</a></li>
						<li><a href="#">В</a></li>
						<li><a href="#">Г</a></li>
                    </ul>
                  </li>
				  <li class="dropdown-submenu">
                    <a href="#">12</a>
                    <ul class="dropdown-menu btn btn-danger">
                        <li><a href="#">А</a></li>
                    	<li><a href="#">Б</a></li>
						<li><a href="#">В</a></li>
						<li><a href="#">Г</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
        </div>
	</div>
</div>
</body>