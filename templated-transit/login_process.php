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
			if ( (!isset($_SESSION['logged_in'])) or $_SESSION['logged_in']==false){
				$user_name = $_POST['user_name'];
				$password = $_POST['password'];
				$query = "SELECT username, email, password, type FROM users where username = '{$user_name}'" ;
				$result = mysqli_query($connection, $query);
				$valid_user = false;
				$valid_pwd = false;
				if(mysqli_num_rows($result)==1){
					$valid_user = true;
					$record = mysqli_fetch_assoc($result);
						if($record['password']==sha1($password)){					
							$valid_pwd = true;
							$type = $record['type'];
							$email = $record['email'];
							$current_user = new User($user_name,$email,$type);
						}
				}
				$_SESSION['current_user'] = $current_user;
				if(!$valid_user){
					$_SESSION['alert']="Invalid Username";
					echo "<script> window.history.back(); </script>";
					//header("Location:login.php");
					//header("Location:homepage.php?alert=".urlencode("Invalid e-mail address"));
				}		
				elseif(!$valid_pwd){
					$_SESSION['alert']="Invalid password";
					//header("Location:homepage.php");
					echo "<script> window.history.back(); </script>";
					//header("Location:homepage.php?alert=".urlencode("Invalid password"));
				}
				else{
					if (isset($_SESSION['current_user'])){
						$_SESSION['logged_in'] = True;
					}
					//echo "<script> window.history.back(); </script>";
					//header("Location:homepage.php");
				}
			} ?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<?php var_dump($_SESSION['current_user']); ?>
				</div>
			</section>

		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>

	</body>
</html>