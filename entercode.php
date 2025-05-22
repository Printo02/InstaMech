<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="login_template/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="login_template/css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->

<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Vollkorn+SC:400,600,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>Enter OTP</h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<div class="login-agileits-top"> 	
						<form action="verify_exe.php" method="post"> 
							<p>Enter OTP</p>
							<input type="text" class="name" name="otp" required=""/>
							<input type="hidden" name="email" value="<?php echo $email?>"class="form-control" placeholder="Enter OTP" required="required" />
	   
							<input type="submit" value="Next"> 
						</form> 	
					</div> 
				
				<!--	<div class="login-agileits-bottom1"> 
						<h3>(or)</h3>

					</div> 
					<div class="social_icons agileinfo">
						<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
					</div>-->

				</div>  
			</div>  
		</div>	
		<!-- copyright -->
		<!--<div class="copyright">
			<p> © 2018 Blend  Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>-->
		<!-- //copyright --> 
	</div>	
	<!-- //main --> 
</body>
</html>