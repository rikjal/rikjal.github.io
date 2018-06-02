<?php 
	session_start();
	require 'dbconfig/config.php';
	$un = $_SESSION['username'];
	$sql = "select name, gender, occupation from user where username='$un'";
	$result = $con->query($sql);
	if($result->num_rows>0){
		while ($row = $result->fetch_assoc()) {
			$name = $row["name"];
			$job = $row["occupation"];
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" type="image/png" href="CSS/img/icon1.png">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 
	<title>Home Page</title>
</head>
<body id="hm">
	<div id="wrapper1">
		<center>
			<h2 id="ls">Welcome to the Home Page!</h2>
			<img src="CSS/img/avatar.png" class="avatar" />
			<h3>Welcome <tttt id="tt"><?php echo $name; ?></tttt>!<br>You are now successfully logged in.</h3>
			<h3>You are basically a <tttt id="ttt"><?php echo $job ?></tttt></h3><br>
		</center>
	<form class="myform" action="logout.php" method="post">
		<input type="submit" name="logout" id="logoutbtn" value="Log Out" />

	</form>
	</div>

</body>
</html>