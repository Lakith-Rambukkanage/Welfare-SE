<?php 

$event=$_GET['event'];
echo $event;

// include_once('includes/connection.php');
require_once('includes/Database.php');
$db = Database::getInstance();
$connection = $db->getConnection();


$amount= $_POST['amount'];
$name= $_POST['owner'];
$card_number= $_POST['card_number'];
$cvv= $_POST['cvv'];
$month= $_POST['month'];
$year= $_POST['year'];




$query = "INSERT INTO  `donors_card_details` (`name`, `amount`, `email`, `card_number`,`cvv`,`exp_month`,`exp_year`) VALUES('{$name}','{$amount}', '{$card_number}', '{$cvv}','{$month}','{$year}')";
mysqli_query($connection, $query);

header("location:show_events_to_adming.php?event=$event");




?>
