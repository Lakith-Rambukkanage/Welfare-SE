<?php session_start(); ?>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Welfare Organization - ViewDonors</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>

			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-xlarge.css" />

	</head>
    <body >

<!-- Header -->
<?php 
require('includes/header_recipient.php');
?>

<!-- Banner -->


        <?php
            require_once('includes/Database.php');
            $db = Database::getInstance();
            $con = $db->getConnection();
            $sql = "SELECT * FROM users";
            $result_set = mysqli_query($con, $sql);
            //$row = mysqli_fetch_assoc($result_set);
            //echo $row2['name'];
            //echo $result["name"];
            //$a=10;
            // if(true){
            // output data of each row
        ?>
        <div class="name" style="font-family: century gothic; padding-right: 50px; box-sizing: border-box;"><i class="fa fa-user-circle-o"></i>&nbsp </div>
        <?php
            if (mysqli_num_rows($result_set) > 0) {
            while($row = mysqli_fetch_assoc($result_set)) {
 
        ?>
                <div class="container">
                    <form method="POST" enctype="multipart/form-data"> 
                        <!-- <div class="row"> -->
                        <div class="col-sm-4" style="background-color:rgba(255, 255, 255, .8);">
                        <h4><?php echo $row['actualname'];?></h4><br>
                        
                        <label for="email"><b>Email:</b></label>
                        <?php echo $row['email']; ?><br>
                        </div>
                    </form> 
                    
                </div>
                <br>

        <?php } }else{?>
               
       
                <header>
                <div class="col-sm-4" style="background-color:rgba(255, 255, 255, .8);">
                <h3><?php echo 'Oops! We could not find any donors';?></h3></div><br><br>
                </header>
                <?php }
        

        ?>
                
        <style>
            body  {
            /* background-image: url("images/yellow.jpg"); */
            /* background-size: auto; */
            /* background-attachment: scroll; */
            background-color: #0E68AC;
            }
            *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
            /* .container {
            text-align:center;
            border-radius: 5px;
            background-color: #f2f2f29c;
            padding: 50px;
            width: 50%
            } */
            .col-sm-4 {
                text-align:Center;
                border-radius: 5px;
                background-color: #f2f2f29c;
                padding: 50px;
                width: 50%;
                margin: auto
                
            }
            
        </style>
			<?php 
			    require ('includes/footer.html');
			?>
    </body>
</html>
