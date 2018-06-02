<?php 
if(isset($_POST['gologin'])){
	header('location:login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="CSS/style2.css" />
	<link rel="icon" type="image/png" href="CSS/img/icon1.png" />
	<link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland|Mina|Lobster" rel="stylesheet">
	<title>Music of Life!</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116371032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116371032-1');
</script>
 <link rel="stylesheet" type="text/css" href="CSS/animate.min.css" />
 <script type="text/javascript" src="js/wow.min.js"></script>
 <script type="text/javascript">
 	new WOW().init();
 </script>
</head>
<body >
	
<div id="side-menu" class="side-nav">
   <a href="#" class="btn-close" onclick="closemenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="login.php">Sign In</a>
    <a href="register.php">Sign Up</a>
    <a href="#">About Us</a>
  </div>
  <nav class="sidebar">
		<span class="open">
			<a href="#" onclick="openmenu()">
			<svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
		</a>
		</span>
		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="login.php">Sign In</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</nav>
<div id="phnx"><img src="CSS/img/phnx.png" id="image" /></div>
	<CENTER><div class="animated zoomIn"><H1 id="heading">Music of Life</H1></div></CENTER>
	<center><div class="imgg"><img class="imggg" src="CSS/img/saptarshi.jpg"></div></center>
<div class="main wow fadeInDown animated" data-wow-delay="0.8s">
	<div class="datat">
	<center><H2 id="ready">Are You Ready?</H2>
	<form style="margin-top: 5px;" id="ready" method="post" action="index.php">
		<input class="btn" type="submit" name="gologin" value="Get Started Now!" />
	</form><br></center></div></div>
	<center><div class="container wow shake animated" data-wow-delay="1.8S"><p1>Here you can keep your personal profile and can save your personal notes. We use MySQL Services as our database and a free webhosting from <a href="http://hostinger.com">hostinger.com</a></p1></div></center><br></center>
</div>
	<center class="allrights"><p>All Rights Reserved™ ©</p></center>
<div id="particles-js"></div>
</body>
<footer>
<div id="particles-js"></div>

<script type="text/javascript">
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            alert('No F-12');
            return false;
        }
    }
/////////////////////end///////////////////////
</script>
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script type="text/javascript" src="js/toggle.js"></script>
	<script type="text/javascript" src="js/particles.min.js"></script>
	<script type="text/javascript">
		particlesJS.load('particles-js','js/particles.json',
			function(){
				console.log("particles loaded")
			})
	</script>
</footer>
</html>