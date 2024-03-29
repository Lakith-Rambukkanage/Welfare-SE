
<?php session_start(); ?>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Add an event</title>
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
    <body >

        <!-- Header -->
        <?php 
        require('includes/header_recipient.php');
        ?>

        <br><br><br><br>
        <div class="col-sm-4" style="background-color:rgba(255, 255, 255, .8);">
        <form action="AddEventAction.php" method="POST" enctype="multipart/form-data">
            <div class="row uniform 50%">
                
                <div class="12u$">Name of event:<br><input type="text" name="event_name" required></div><br>
                
                <div class="12u$">Name of organisation (if any):<br><input type="text" name="org_name"></div><br>
                
                <div class="12u$">
                    Type of event:<br>
                    <div class="select-wrapper">
                        <select name="type" >
                        <option value="Children">Children</option>
                        <option value="Environment">Environment</option>
                        <option value="Disabled">Disabled</option>
                        <option value="Health">Health</option>
                        <option value="Animal">Animal</option>
                        <option value="Poverty">Poverty</option>
                        </select>
                    </div>
                </div>
                <div class="12u$">Description:<br><textarea placeholder="Type here" name="description" required></textarea></div><br>
                
                <div class="12u$">Amount required:<br><input type="text" name="req_amount" required></div><br><br>
                <div class="12u$"><input type="submit" name="submit" id="submit" value="Submit"></div><br><br>
            </div>
        </form><br><br>
        </div></div>
        <?php 
			require ('includes/footer.html');
        ?>

        <style>
            body  {
            /* background-image: url("images/yellow.jpg"); */
            /* background-size: auto; */
            /* background-attachment: scroll; */
            background-color: #0E68AC;
            }

            *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

            .col-sm-4 {
            text-align:Center;
            border-radius: 5px;
            background-color: #f2f2f29c;
            padding: 50px;
            width: 50%;
            margin: auto
                
            }
            
        </style>

    </body>
</html>



