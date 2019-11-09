<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php session_start(); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization</title>
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
	<body>

		<!-- Header -->
			<?php  
		require('includes/header_recipient.php');
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Recipient Sign Up Successful</h2>
						<a href="homepage_Donor.php">
							<i class="icon big rounded color9 fa-check-square"></i>
							<p>Continue to Homepage</p>
						</a>
					</header>					
				</div>
			</section>

		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>

	</body>
</html>