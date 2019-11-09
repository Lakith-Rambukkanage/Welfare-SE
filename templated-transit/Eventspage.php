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
                    ?><div class="text" style="font-family: century gothic">
                    <?php    echo "<span class='usernameClass'>"  .'</span>'."<br>"
                        ?><i class="   fa fa-star"> &nbsp</i><?php  echo $row["event_name"]."<br>"."<br>"?><?php
                        ?><div class="text2" style="font-family:Century Gothic;"><i class="fa fa-user-circle-o"> &nbsp<?php  echo $row["org_name"]?></i></div>
                        <div style="font-size: 15px; display:inline;"><i class="fa fa-calendar" >&nbsp &nbsp</i><?php echo $row["event_type"]  ?></div><?php
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
</html>
<script>
    function Open(){
        window.open("AddEvent.php");
    }
</script>