<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Homepage</title>
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
			require ('includes/header.html');
			?>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Sign up as Admin</h2>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div>
							<div>
								<input name="user_name" id="user_name" value="" placeholder="User Name" type="text" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="password" id="password" value="" placeholder="Password" type="password" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="admin_code" id="admin_code" value="" placeholder="Admin code" type="text" style="margin-top:6px; margin-bottom:6px">
							</div>
							<div>
								<textarea name="description" id="description" placeholder="description" rows="6" style="margin-top:6px; margin-bottom:6px"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Done" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>
	</body>
</html>