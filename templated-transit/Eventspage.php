<html>
    <head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Eventspage</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
    <body>
        <?php 
		    require('includes/header.html');
        ?>
        <?php
            require_once('includes/Database.php');
            $db = Database::getInstance();
            $con = $db->getConnection();
            $sql = "SELECT * FROM events";
            $result_set = mysqli_query($con, $sql);
            //$row = mysqli_fetch_assoc($result_set);
            //echo $row2['name'];
            //echo $result["name"];
            //$a=10;
            if(true){
            // output data of each row
                ?><div class="name" style="font-family: century gothic"><i class="fa fa-user-circle-o"></i>&nbsp </div><?php
                while($row = mysqli_fetch_assoc($result_set)) {
                    ?><div class="text1" style="font-family: century gothic">
                    <?php    echo "<span class='usernameClass'>"  .'</span>'."<br>"
                        ?><i class="   fa fa-star"> &nbsp</i><?php  echo $row["name"]."<br>"."<br>"?><?php
                        ?><div class="text2" style="font-family:Century Gothic;"><i class="fas fa-money-bill-wave"> &nbsp<?php  echo $row["req_amount"]?></i></div>
                        <div style="font-size: 15px; display:inline;"><i class="far fa-check-circle" ></i><?php echo $row["type"]  ?></div><?php
                    ?></div><?php
                    ?><div class="hr"><hr></div><?php

                
                }
            } else {
                    echo "No Events Yet!";
            }
                
        ?>

        <button onclick="Open()">Add Event</button>

        <?php 
			require ('includes/footer.html');
        ?>
    </body>
<style>
.text1{
    padding:0px;
    margin-left:35%;
    width:30%;
    color:white;
    height:20%;
    border:1px solid black;
    background-color: #445;
    text-align:center;
    border-radius:11px
}
</style>
</html>
<script>
    function Open(){
        window.open("AddEvent.php");
    }
</script>

