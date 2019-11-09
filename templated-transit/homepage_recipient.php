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
		require('includes/header_recipient.php');
		?>
		
		<!-- Banner -->
		<div style="height: 100px">
			<section id="banner" >
				
			</section>
		</div>
		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<!-- <header class="major">
						<h2>Events around the world</h2>
						<p>Walkthrough Charity events and help make them better! </p>
					</header> -->
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="Eventspage.php"><i class="icon big rounded color1 fa-user"></i>
								<h3>My Events</h3></a>
								<p>View the progress of your events</p>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="AddEvent.php">
								<i class="icon big rounded color9 fa-plus"></i>
								<h3>Add Event</h3>
								</a>
								<p>Create new event and raise funds</p>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<a href="#">
								<i class="icon big rounded color6 fa-child"></i>
								<h3>View Donors</h3>
								</a>
								<p>View a list of donors who may help</p>
							</section>
						</div>
					</div>
				</div>
			</section>
			

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Help Us Improve</h2>
						<p>Let us know how we can be better :)</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
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