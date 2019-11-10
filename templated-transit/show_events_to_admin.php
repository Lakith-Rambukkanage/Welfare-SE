<?php $event=$_GET['event'];

 ?>



<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welfare Organization - Homepage</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        
		<noscript>
			<!-- <link rel="stylesheet" href="css/skel.css" /> -->
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>



	</head>
	<body class="landing">
    <?php 
		require('includes/header_donor.php');
        ?>
        <!-- Banner -->
		<div style="height: 100px">
			<section id="banner" >
				
			</section>
		</div>
            <section id="one" class="wrapper style1 special">
				<div id="event_title">
                    <header class="major" style="margin-top:0%;padding:0%">
                    
                    <?php
                       

                        switch ($event) {
                            case "Health":
                                echo "<i class=\"icon big rounded color1 fa-plus-square\"></i>";
                                break;
                            case "Animals":
                                
                                echo "<i class=\"icon big rounded color1 fa-paw\"></i>";

                                break;
                            case "Children":
                                echo "<i class=\"icon big rounded color1 fa-child\"></i>";
                                break;

                            case "Disables":
                                echo "<i class=\"icon big rounded color7 fa-wheelchair\"></i>";
                                break;
                            case "Environment":
                                echo "<i class=\"icon big rounded color10 fa-tree\"></i>";
                                break;
                            case "Poverty":
                                echo "<i class=\"icon big rounded color2 fa-money\"></i>";
                                break;
                            
                        }
                    ?>

                        <h2> <?php echo $event;?> events around the world</h2>
						<p>Walkthrough Charity events and help make them better! </p>
					</header>
	            </div>
				
			

   
        <?php
        
        $event=strtolower($event);
    
            require_once('includes/Database.php');
            $db = Database::getInstance();
            $con = $db->getConnection();
            $sql = "SELECT * FROM events where type='$event'";
            $result_set = mysqli_query($con, $sql);
            
        ?>
        <div class="name" style="font-family: century gothic; padding-right: 50px; box-sizing: border-box;"><i class="fa fa-user-circle-o"></i>&nbsp </div>
        <section id="one" class="wrapper style1 special" style="height:1150px;background-color:#212852;padding:20px,0px,0px,0px" >
            <!-- <div class="container"> -->
                  
                <?php
                    if (mysqli_num_rows($result_set) > 0) {
                    while($row = mysqli_fetch_assoc($result_set)) {

                ?>

            
                
					<!-- <div class="" style="width:40%;margin-left:30%;height:240px;padding:0px,0px,0px,200px;margin-bottom:200px"> -->
                    
                        <section class="box" style="background-color:#2122; margin-left:30%;width:40%;height:250px;padding:20px,0px,0px,0px">
                            <div class="" style="background-color:white;width:100%;border-radius:5px; height:90%; padding:5px; margin:10px">
                                <h4><?php echo $row['name'];?></h4><br>
                                <label for="event_type"><b>Type of event:</b></label>
                                <?php echo $row['type']; ?><br>
                            </div>
                            
                            <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:100px; background-color:light blue;margin:0px,0px,0px,0px;padding:0px,0px,0px,0px" class="btn btn-primary btn-sm">
                                  Add Donate</button>
                        </section>


                        

                        
                    <!-- </div> -->
                    
                  
							
              

                     
                        <!-- <div class="row"> -->
                       

                    
                    
                    
                
                <br>

                <?php } }else{?>
               
       
               <header>
               <div class=container>
               <h3><?php echo 'You have not added any events yet';?></h3></div>
               </header>

               <!-- </div>  -->
               
            
        </section >

               <?php }

                // require ('includes/footer.html');

                ?>

        <!-- <button class="button" onclick="Open()">Add Event</button> -->
        <style>
            /* body  {
            
            background-color:rgba(0,0,0,0.1);
            } */
            /* *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;} */
            .container1 {
            text-align:center;
            border-radius: 5px;
            background-color: rgba(10,0,0,0.1);
            padding: 50px;
            width: 50%;
            border:10px solid black;
            }
            .col-sm-4 {
                text-align:center;
                border-radius: 5px;
                background-color: rgba(0,0,10,0.1);
                padding: 50px;
                width: 50%;
                margin: auto
                
            }
          

            
        </style>

    







		
		
		
		<!-- One -->
		
			

		<!-- Three -->
			<!-- <section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Help Us Improve</h2>
						<p>Let us know how we can be better :)</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section> -->

        <!-- Footer -->
        <?php 

// require ('includes/footer.html');

?> 
            
        
    </body>
    



</html>