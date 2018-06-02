<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" type="image/png" href="CSS/img/icon1.png">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">

	<title>Login System</title>
</head>
<body id="log">
	<ul>
		<li><a href="index.php">Home |</a></li>
		<li><a href="register.php">Sign Up</a></li>
	</ul>
	<div id="wrapper">
		<center>
			<h2 id="ls">Login System</h2>
			<img src="CSS/img/avatar.png" class="avatar" />
		</center>
	<form class="myform" action="loginprocess.php" method="post">
		<label><b>Username:</label><br>
		<input type="text" name="uname" class="inp" placeholder="Type your Username!" required /><br>
		<label><b>Password:</label><br>
		<input type="password" name="pass" class="inp" placeholder="Type your Password!" required /><br>
		<input type="submit" name="login" id="loginbtn" value="Login" ><br>
		<a href="register.php"><input type="button" id="regbtn" value="Register" /></a>
	</form>
		<center><p><a href="#" id="forgot">Forgot Password?</a></p></center>
	</div>
</body>
</html>