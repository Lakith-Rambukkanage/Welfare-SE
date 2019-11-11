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
		require('includes/header_donor.php');
		?>

		<?php
		$Health="Health";
		$Animal="Animals";
		$Child="Children";
		$Dis="Disables";
		$Env="Environment";
		$Pov="Poverty";
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
						<h2>Events around the world</h2>
						<p>Walkthrough Charity events and help make them better! </p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
						
							<?php echo '<a href="show_events_to_admin.php?event='.$Health.'">
										<section class="box">
											<i class="icon big rounded color1 fa-plus-square"></i>
											<h3>Health</h3>
											<p>Health is a state of physical, mental and social well-being in which disease and infirmity are absent. Help a person in need.</p>
										</section>
									</a>' ;?>
						</div>
						<div class="4u 12u$(medium)">
						
							<?php echo '<a href="show_events_to_admin.php?event='.$Animal.'">
										<section class="box">
											<i class="icon big rounded color9 fa-paw"></i>
											<h3>Animals</h3>
											<p>Are you a pet lover? Then here\'s your chance to help save an animal in need of your love. </p>
										</section>
									</a>' ?>
						</div>
						<div class="4u$ 12u$(medium)">
							<?php	echo '<a href="show_events_to_admin.php?event='.$Child.'">
									<section class="box">
										<i class="icon big rounded color6 fa-child"></i>
										<h3>Children</h3>
										<p>Thousands of children are in need of your love and care. Donate a little and help a lot. They are waiting for you.</p>
									</section>
								</a>' ?>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<?php	echo '<a href="show_events_to_admin.php?event='.$Dis.'">
										<section class="box">
											<i class="icon big rounded color7 fa-wheelchair"></i>
											<h3>Disables</h3>
											<p>You can now help a differently abled person to achieve his dreams. Your contribution is all they need.</p>
										</section>
									</a>' ?>
						</div>
						<div class="4u 12u$(medium)">
							<?php   echo '<a href="show_events_to_admin.php?event='.$Env.'">
										<section class="box">
											<i class="icon big rounded color10 fa-tree"></i>
											<h3>Environment</h3>
											<p>We survive upon our environment. Protecting it is our prime duty as a human-being. Let\'s donate a little towards the environment.</p>
										</section>
								</a>' ?>
						</div>
						<div class="4u$ 12u$(medium)">
							<?php	echo '<a href="show_events_to_admin.php?event='.$Pov.'">
										<section class="box">
											<i class="icon big rounded color2 fa-money"></i>
											<h3>Poverty</h3>
											<p>You are lucky that as long as you have food on your table and a roof over your head. But not everyone is that fortunate. Save them. The choice is yours.</p>
										</section>
									</a>' ?>
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