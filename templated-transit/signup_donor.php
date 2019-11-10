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
		<title>Welfare Organization - Donor Sign Up</title>
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
			require ('includes/header_signup.html');
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
						<h2>Sign up as Donor</h2>
					</header>
				</div>
				<div class="container 75%">
					<form action="new_donor_process.php" method="post">
						<div>
							<div>
								<input name="user_name" id="user_name" value="" placeholder="User Name" type="text" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="actualname" id="actualname" value="" placeholder="Full name" type="text" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="email" id="email" value="" placeholder="Email" type="email" style="margin-top:6px; margin-bottom:6px">
							</div>

							<div>
								<input name="password" id="password" value="" placeholder="Password" type="password" style="margin-top:3px; margin-bottom:6px">
							</div>
							<div>
								<input name="repassword" id="repassword" value="" placeholder="Confirm Password" type="password" style="margin-top:3px; margin-bottom:6px">
							</div>
							<?php $instruction = "(Your Password should contain atleast a symbol, a digit and a block letter)"; ?>
			<p class = "instructions"><b><?php echo"{$instruction}";?></b></p>
							
									<p>Select Your preferences</p>

							<div class="row 150%" style="border-right: dotted;">

									<div class="2u 12u$(3)">
										<input type="checkbox" id="children" name="children">
										<label for="children">Children</label>
									</div>

									<div class="2u 12u$(3)">
										<input type="checkbox" id="animals" name="animals" >
										<label for="animals">Animals</label>
									</div>

									<div class="2	u 12u$(3)">
										<input type="checkbox" id="health" name="health">
										<label for="health">Health</label>
									</div>

									<div class="2u 12u$(3)">
										<input type="checkbox" id="disable" name="disable">
										<label for="disable">Disable</label>
									</div>

									<div class="2u 12u$(3)">
										<input type="checkbox" id="environment" name="environment" >
										<label for="environment">Environmet</label>
									</div>

									<div class="2	u 12u$(3)">
										<input type="checkbox" id="poverty" name="poverty">
										<label for="poverty">Poverty</label>
									</div>
							</div>

							<div>
								<textarea name="description" id="description" placeholder="description" rows="6" style="margin-top:6px; margin-bottom:6px"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Sign Up" class="special big" type="submit" name="submit"></li>
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
