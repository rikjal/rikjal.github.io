<?php 
	session_start();
	require 'dbconfig/config.php';
 ?>
<?php 
			if(isset($_POST['login'])){
				$username = $_POST['uname'];
				$password = md5($_POST['pass']);
				$query = "select * from user where username='$username' and password='$password'";
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0){
					$_SESSION['username']=$username;
					header('location:home.php');
				}
				else{
					echo '<script type="text/javascript">alert("Error! Check username or password.");
					window.location="login.php";
					</script>';

					}
			}
		 ?>