<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Sign Up</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
		<?php 
		require('includes/header_signup.html');
		?>
		<!-- Banner -->
		<div style="height: 100px">
			<section id="banner" >
				
			</section>
		</div>
		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Choose Your Account Type</h2>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<a href="signup_donor.php">
							<section class="box">
								<i class="icon big rounded color1 fa-money"></i>
								<h3>Donor</h3>
								<p>Sign Up and donate money to Charity Organizations</p>
							</section>
							</a>
						</div>
						<div class="4u 12u$(medium)">
							<a href="signup_recipient.php">
							<section class="box">
								<i class="icon big rounded color9 fa-child"></i>
								<h3>Recipient</h3>
								<p>Sign up to promote your charity events and recieve donations</p>
							</section>
						</a>
						</div>
						<div class="4u$ 12u$(medium)">							
							<a href="signup_admin.php">
							<section class="box">
								<i class="icon big rounded color6 fa-laptop"></i>
								<h3>Admin</h3>
								<p>Initiate your account here if you are authorized as an Admin</p>
							</section>
							</a>
						</div>
					</div>
				</div>
			</section>
		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>
	</body>
</html>