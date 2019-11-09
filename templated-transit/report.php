<?php

$don_amount_query="select sum(amount) from donations where date_done>=(SELECT DATE_SUB((SELECT CURDATE()), INTERVAL 15 DAY)) and date_done<=(SELECT CURDATE());";
$trans_amount_query="select sum(amount) from donations where date_done>=(SELECT DATE_SUB((SELECT CURDATE()), INTERVAL 15 DAY)) and date_done<=(SELECT CURDATE()) and trans_status='Yes';";
$don_query="SELECT donor,event_name,amount,date_done from donations WHERE date_done>=(SELECT DATE_SUB((SELECT CURDATE()), INTERVAL 15 DAY)) and date_done<=(SELECT CURDATE());";
$comp_query="select name,(rec_amount/req_amount) as percentage_completion from events where rec_amount<>req_amount;";


$dbConnection = mysqli_connect('localhost','root','','welfare_se');

$result1= mysqli_query($dbConnection,$don_amount_query);
$row1 = mysqli_fetch_array($result1);
 
$result2= mysqli_query($dbConnection,$trans_amount_query);
$row2 = mysqli_fetch_array($result2);

$result3= mysqli_query($dbConnection,$don_query);
$result4= mysqli_query($dbConnection,$comp_query);
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<h2 style="text-align:center;">Organization Report for the Last 15 Days</h2>
<form>
<h3>Total Donated Amount</h3>
  <input style="width:25%;" type="text" name="don_amount" value="<?php echo $row1[0];?>">
  </br></br>
<h3>Amount Transferred to Recepients </h3>
  <input style="width:25%;" type="text" name="trans_amount" value="<?php echo $row2[0];?>">
  </br></br>
</form>


<h3>Details of Ongoing Events</h3>
<div class="table-wrapper">
<table style='width:50%;'>
<thead>
<tr>
<th>Event Name</th>
<th>Completion</th>
</tr>
</thead>
<?php 
while ($row = $result4->fetch_assoc()) {
    $field1name = $row["name"];
    $field2name = $row["percentage_completion"];
	$field3name = (float)$field2name*100;
	$field3name = (string)$field3name.'%';
	echo '<tr> 
          <td>'.$field1name.'</td> 
          <td>'.$field3name.'</td>
		  </tr>';}
?>
</table>
</br></br>
</div>
<h3>Details of Donations Made by Donors</h3>
<table>
<thead>
<tr>
<th>Donor Name</th>
<th>Event Name</th>
<th>Amount Donated</th>
<th>Date</th>
</tr>
</thead>
<?php
while ($row = $result3->fetch_assoc()) {
    $field1name = $row["donor"];
    $field2name = $row["event_name"];
	$field3name = $row["amount"];
	$field4name = $row["date_done"];
	echo '<tr> 
          <td>'.$field1name.'</td> 
          <td>'.$field2name.'</td>
		  <td>'.$field3name.'</td> 
		  <td>'.$field4name.'</td> 
		  </tr>';}
?>
</table>
</body>
</html>