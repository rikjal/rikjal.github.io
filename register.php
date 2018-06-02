<?php 
	require 'dbconfig/config.php';
 ?>
<!DOCTYPE html>
<html>
<head>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" type="image/png" href="CSS/img/icon1.png">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">

	<title>Registration System</title>
</head>
<body id="log">
	<div id="wrapper">
		<center>
			<h2 id="ls">Registration System!</h2>
			<img src="CSS/img/avatar.png" class="avatar" />
		</center>
	<form class="myform" action="register.php" method="post">
		<label><b>Full Name:</label><br>
		<input type="text" name="name" class="inp" placeholder="Enter Your Name" required /><br>
		<label><b>Gender:</label><br>
		<input type="radio" name="gender" class="radio" value="Male" checked required>Male
		<input type="radio" name="gender" class="radio" value="Female" >Female<br>
		<label><b>Occupation:</label>
		<select class="occ" name="occ">
			<option value="Student">Student</option>
			<option value="Proffessional">Professional</option>
			<option value="Jobless">Jobless</option>
		</select><br>
		<label><b>Username:</label><br>
		<input type="text" name="uname" class="inp" placeholder="Your Username" required /><br>
		<label><b>Password:</label><br>
		<input type="password" name="pass" class="inp" placeholder="Your Password" required /><br>
		<label><b>Confirm Password:</label><br>
		<input type="password" name="cpass" class="inp" placeholder="Retype Password" required /><br>
		<input type="submit" name="signupbtn" id="signupbtn" value="Sign Up!" /><br>
		<a href="login.php"><input type="button" id="backbtn" value="<<<Back to Login" /></a>
	</form>
	<?php 
		if(isset($_POST['signupbtn'])){
			$name = $_POST['name'];
			$username = $_POST['uname'];
			$password = md5($_POST['pass']);
			$cpassword = md5($_POST['cpass']);
			$gender = $_POST['gender'];
			$occ = $_POST['occ'];

			if($password == $cpassword){
				$query = "select * from user where username='$username'";
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0){
			echo '<script type="text/javascript">alert("User already exists!")</script>';
				}
				else{
					$query = "insert into user values('','$name','$username','$password','$gender','$occ')";
					$query_run = mysqli_query($con,$query);
					if($query_run){
						echo '<script type="text/javascript">alert("User registered successfully! Go to login page to login.")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("Error in registration!")</script>';
					}
				}
			}
			else{
				echo '<script type="text/javascript">alert("Passwords did not match")</script>';
			}
		}
	 ?>

	</div>

</body>
</html>