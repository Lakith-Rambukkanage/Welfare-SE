	<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php 
require('includes/user.php');
include_once('includes/connection.php');
session_start();
?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Generic</title>
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
		require('includes/header.html');
		?>
		<!-- sa -->
		<?php
			$_SESSION['logged_in']=false;
			unset($_SESSION['current_user']);
			//session_unset();
			//session_destroy();
			header("Location: homepage.php");
		?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
				</div>
			</section>

		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>

	</body>
</html>