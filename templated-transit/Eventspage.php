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

        <?php 
            
            require('includes/user.php');
            require_once('includes/Database.php');
            $db = Database::getInstance();
            $con = $db->getConnection();
            $fakeuser=new User('yoshani','Yoshani Ranaweera','yoshani@gmail.com','Recipient');
            $user=$fakeuser->get_user_name();
            // $sql= "select * from events";
            $sql = "SELECT event_name,org_name,req_amount,rec_amount,event_type,description FROM events WHERE username='{$user}'";
           
            $result_set = mysqli_query($con, $sql);
            
           

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
                        <h4><?php echo $row['event_name'];?></h4><br>
                        
                        <label for="org_name"><b>Organisation:</b></label>
                        <?php echo $row['org_name']; ?><br>
                        <label for="event_type"><b>Type of event:</b></label>
                        <?php echo $row['event_type']; ?><br>
                        <label for="req_amount"><b>Amount required:</b></label>
                        <?php $req_amount=$row['req_amount'];
                         echo $req_amount; ?><br>
                        <label for="rec_amount"><b>Amount received:</b></label>
                        <?php $rec_amount=$row['rec_amount'];
                         echo $rec_amount; ?><br>
                        <label for="details"><b>Description :</b></label>
                        <?php echo $row['description']; ?><br>
                        <?php $progress= ($rec_amount/$req_amount)*100?>
                        <label for="percentage_completion"><b>Progress :</b></label>
                        <progress id="progressBar" max="100" value="<?php echo round($progress,1); ?>"></progress>
                        </div>

                    
                    </form> 
                    
                </div>
                <br>

                <?php } }else{?>
               
       
               <header>
               <div class=container>
               <h3><?php echo 'You have not added any events yet';?></h3></div>
               </header>
               <?php }
                require ('includes/footer.html');

                ?>

        <!-- <button class="button" onclick="Open()">Add Event</button> -->
        <style>
            body  {
            /* background-image: url("images/yellow.jpg"); */
            /* background-size: auto; */
            /* background-attachment: scroll; */
            background-color: #FEF964;
            }
            *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
            /* .container {
            text-align:justify;
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
            progress {
                display:inline-block;
                width:190px;
                height:20px;
                padding:15px 0 0 0;
                margin:0;
                background:none;
                border: 0;
                border-radius: 15px;
                text-align: left;
                position:relative;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 0.8em;
            }
            progress::-webkit-progress-bar {
                height:11px;
                width:150px;
                margin:0 auto;
                background-color: #CCC;
                border-radius: 15px;
                box-shadow:0px 0px 6px #777 inset;
            }
            progress::-webkit-progress-value {
                display:inline-block;
                float:left;
                height:11px;
                margin:0px -10px 0 0;
                background: #F70;
                border-radius: 15px;
                box-shadow:0px 0px 6px #777 inset;
            }
            progress:after {
                margin:-26px 0 0 -7px;
                padding:0;
                display:inline-block;
                float:left;
                content: attr(value) '%';
            }

            
        </style>

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

