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
							$client_id = $record['client_id'];
							$email = $record['email'];
							$first_name = $record['first_name'];
							$last_name = $record['last_name'];
							$contact_number = $record['contact_number'];
							$current_user = new User($user_name,$email);
							$current_user->set_id($client_id);
							//break;
						}
					//}
				}
				else{
					$queryemployee = "SELECT employee_id, first_name, last_name, email, contact_number, password FROM employee where email = '{$email}'";
					$resultemployee = mysqli_query($connection,$queryemployee);
					//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
					if(mysqli_num_rows($resultemployee)==1){
						$valid_email = true;
						$recordemployee = mysqli_fetch_assoc($resultemployee);
						//if($recordemployee['email'] == $email){
						if($recordemployee['password']==sha1($password)){
							$valid_pwd = true;
							$employee_id = $recordemployee['employee_id'];
							$first_name = $recordemployee['first_name'];
							$last_name = $recordemployee['last_name'];
							$contact_number = $recordemployee['contact_number'];
							$email = $recordemployee['email'];
							$current_user = new Employee($first_name, $last_name, $email, $contact_number);
							$current_user->set_id($employee_id);
							//break;
						}
					}
					/*else{
						$valid_email = false;
						//header("Location:login.php?alert=".urlencode("Invalid e-mail address"));
					}*/
					//}
				}
				$_SESSION['current_user'] = $current_user;
				if(!$valid_email){
					$_SESSION['alert']="Invalid e-mail address";
					//echo "<script> window.history.back(); </script>";
					header("Location:homepage.php");
					//header("Location:homepage.php?alert=".urlencode("Invalid e-mail address"));
				}		
				elseif(!$valid_pwd){
					$_SESSION['alert']="Invalid password";
					header("Location:homepage.php");
					//header("Location:homepage.php?alert=".urlencode("Invalid password"));
				}
				else{
					if (isset($_SESSION['current_user'])){
						$_SESSION['logged_in'] = True;
					}
					echo "<script> window.history.back(); </script>";
					//header("Location:homepage.php");
				}
			} ?>
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