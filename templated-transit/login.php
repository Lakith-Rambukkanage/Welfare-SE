<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php session_start(); ?>
<?php $_SESSION['logged_in']=false; ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Log In</title>
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
			require ('includes/header_login.php');
			?>

		<!-- Banner -->
		<div style="height: 100px">
			<section id="banner" >
				
			</section>
		</div>
		
		<!-- Three -->
			<section id="three" class="wrapper style3 special" >
				<div class="container">
					<header class="major">
						<h2>Log In</h2>
					</header>
				</div>
				<div class="container 75%">
					<form action="login_process.php" method="post">
						<div>
							<div>
								<input name="user_name" id="user_name" value="" placeholder="User Name" type="text" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="password" id="password" value="" placeholder="Password" type="password" style="margin-top:3px; margin-bottom:6px">
							</div>
							<br>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Log In" class="special big" type="submit" name="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

<!--alert-->

<?php if (isset($_SESSION["alert"])): ?>
	<script type="text/javascript">
		alert("<?php echo ($_SESSION["alert"]); ?>");
	</script>
	<?php unset($_SESSION["alert"]); ?>
<?php endif; ?>

		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>
	</body>
</html>
