<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php session_start() ?>
<?php 
require('includes/user.php');
include_once('includes/connection.php');?>

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
	<body>

		<!-- Header -->
			<?php  
		require('includes/header.html');
		?>

		<!-- Process -->
			<?php
	if (isset($_POST['submit']) and $_SESSION['logged_in']==false) {		
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$description = $_POST['description'];
		$password = sha1($_POST['password']);
		$type = 'donor';
		//$repassword = sha1($_POST['repassword']);
		$input1 = $_POST["password"];
		$input2 = $_POST["repassword"];
		$pattern = '/^(?=.*[!@#$%^&*+=\/><.,:;])(?=.*[0-9])(?=.*[A-Z]).{5,}$/';
		$querydonor = "SELECT username FROM users where username = '{$user_name}'";
		$resultdonor = mysqli_query($connection,$querydonor);

		// $queryclient = "SELECT email FROM client WHERE email = '{$email}'";
		// $resultclient = mysqli_query($connection, $queryclient);





///made any change


		if(mysqli_num_rows($resultdonor)==0){
				
				//if($recordemployee['email'] == $email){
			if ($input1==$input2 && !preg_match('/\s/',$input1)){
				if (preg_match($pattern, $input1)){
					/*$query = "INSERT INTO employee (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
			
					mysqli_query($connection,$query);*/
					$current_user = new User($user_name, $email);
					$_SESSION['current_user'] = $current_user;
					$_SESSION['password'] = $password;


					//SQL INPUT to users
					$user_type='donor';
					$query = "INSERT INTO users (username, email, password,type) VALUES('{$user_name}', '{$email}', '{$password}','{$user_type}')";
					mysqli_query($connection, $query);
					if (isset($_SESSION['current_user'])){
						$_SESSION['logged_in'] = True;
					}


					//  SQL to donor pref




					$list = array();
					if (isset($_POST['children'])){
					array_push($list, 'children'); // Displays value of checked checkbox.
					$type='children';
					$preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					mysqli_query($connection, $preQ);
					}

					if (isset($_POST['animals'])){
					array_push($list, 'animals'); // Displays value of checked checkbox.
					$type='animals';
					 $preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					 mysqli_query($connection, $preQ);
					}

					if (isset($_POST['health'])){
					array_push($list, 'health'); // Displays value of checked checkbox.
					$type='health';
					 $preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					 mysqli_query($connection, $preQ);
					}

					if (isset($_POST['disable'])){
					array_push($list, 'disable'); // Displays value of checked checkbox.
					 $type='disable';
					 $preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					 mysqli_query($connection, $preQ);
					}

					if (isset($_POST['environment'])){
					array_push($list, 'environment'); // Displays value of checked checkbox.
					$type='environment';
					 $preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					mysqli_query($connection, $preQ);
				    }

					if (isset($_POST['poverty'])){
					array_push($list,'poverty'); // Displays value of checked checkbox.
					$type='poverty';
					 $preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$user_name}','{$type}')";
					 mysqli_query($connection, $preQ);
					}
					
					//print_r($list );	

					 //$preQ = "INSERT INTO `donor_pref`(`username`, `event_type`) VALUES ('{$username}','{$type}')"





					/*$querydonor = "SELECT username FROM user where email = '{$email}'";
					$resultdonor = mysqli_query($connection, $queryclient);
					if(mysqli_num_rows($resultdonor)==1){
						$recorddonor = mysqli_fetch_assoc($resultdonor);
						$client_id = $recordclient['client_id'];
						$current_user->set_id($client_id);
					}*/
					//echo "<script> window.history.go(-3); </script>";
					//header("Location:homepage.php");














					header("Location: new_donor_success.php");
							// Method to go to next page - email verification page
				}
				else{
					$error = "Your Password should contain atleast a symbol, a digit and a block letter. Should have 5 or more characters without whitespaces";
					$_SESSION['alert']=$error;
					echo "<script> window.history.back(); </script>";
					//header("Location:newemployee.php");
					//header("Location:newemployee.php?alert=".urlencode($error));
				}
			}
			else{
				$error ="Password confirmation doesn't match";
				$_SESSION['alert']=$error;
				echo "<script> window.history.back(); </script>";
				//header("Location:newemployee.php");
				//header("Location:newemployee.php?alert=".urlencode($error));
			}
		}
		else{
			$error ="There's an account created with this Username. Use a different Username or login with your existing account.";
			$_SESSION['alert']=$error;
			echo "<script> window.history.back(); </script>";
			//header("Location:newemployee.php");
			//header("Location:newemployee.php?alert=".urlencode($error));
		}		
	}
	else{
		//header("Location: homepage.php");
	}
	?>




			<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>

	</body>
</html>