<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

			<?php
			
			$trans_pov_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Poverty';";
			$trans_dis_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Disables';";
			$trans_hel_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Health';";
			$trans_anim_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Animals';";
			$trans_child_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Children';";
			$trans_env_query="select donor,event_name,amount,date_done from donations left outer join events on donations.event_name=events.name where trans_status='No' and type='Environment';";
			
			$dbConnection = mysqli_connect('localhost','root','','welfare_se');

			$result_pov= mysqli_query($dbConnection,$trans_pov_query);
			$result_dis= mysqli_query($dbConnection,$trans_dis_query);
			$result_hel= mysqli_query($dbConnection,$trans_hel_query);
			$result_anim= mysqli_query($dbConnection,$trans_anim_query);
			$result_child= mysqli_query($dbConnection,$trans_child_query);
			$result_env= mysqli_query($dbConnection,$trans_env_query);
			
			$results=array($result_pov,$result_dis,$result_hel,$result_anim,$result_child,$result_env);
			$headings=array('Poverty','Disables','Health','Animals','Children','Evironment');
			
			function Poverty(){
				if(isset($result_pov)){
					
				}
			}
			
			for ($x = 0; $x <= 5; $x++) {
				if(mysqli_num_rows($results[$x])!=0){
					echo "<h3>".$headings[$x]."</h3>";
					echo "<table>
					<thead>
					<tr>
					<th>Donor Name</th>
					<th>Event Name</th>
					<th>Amount Donated</th>
					<th>Date</th>
					</tr>
					</thead>";
					while ($row = $results[$x]->fetch_assoc()) {
						$field1name = $row["donor"];
						$field2name = $row["event_name"];
						$field3name = $row["amount"];
						$field4name = $row["date_done"];
						echo '<tr> 
							<td>'.$field1name.'</td> 
							<td>'.$field2name.'</td>
							<td>'.$field3name.'</td> 
							<td>'.$field4name.'</td> 
							</tr>';
					}
					echo "</table>";
					echo "<input type='button' name='".$headings[$x]."' value='Transfer Funds' onclick='".$headings[$x]."'/>";
					echo "</br></br>";
				}
			}
			?>
		<!-- Footer -->
			<?php 
			require ('includes/footer.html');
			?>
	</div>
	</section>
	</body>
</html>