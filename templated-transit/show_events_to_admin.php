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
                            
                            <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:100px; background-color:light blue;margin-left:40px;margin-top:0px;margin-bottom:0px;padding:10px,0px,10px" class="btn btn-primary btn-sm">
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

                require ('includes/footer.html');

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
            

<!-- Popup css and divs -->
<div id="modal-wrapper" class="modal">
  
    <form class="modal-content animate" action="postReview.php?a=2">
        
    
        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="images/hold_hand.jpg" alt="Avatar" class="avatar">
            <h1 style="text-align:center; ">Donate now</h1>
        </div>


        <!-- <div class="container2"> -->
                    
                <div class="creditCardForm">
                
                    <div class="payment">
                        <form>
                            <div class="form-group owner">
                                <label for="owner">Owner</label>
                                <input type="text" class="form-control" id="owner">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv">
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber">
                            </div>
                            <div class="form-group" id="expiration-date">
                                <label>Expiration Date</label>
                                <select>
                                    <option value="01">January</option>
                                    <option value="02">February </option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select>
                                    <option value="16"> 2016</option>
                                    <option value="17"> 2017</option>
                                    <option value="18"> 2018</option>
                                    <option value="19"> 2019</option>
                                    <option value="20"> 2020</option>
                                    <option value="21"> 2021</option>
                                </select>
                            </div>
                            <div class="form-group" id="credit_cards">
                                <img src="assets/images/visa.jpg" id="visa">
                                <img src="assets/images/mastercard.jpg" id="mastercard">
                                <img src="assets/images/amex.jpg" id="amex">
                            </div>
                            <div class="form-group" id="pay-now">
                                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            
        <!-- </div> -->
    
    </form>
  
</div>









<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text] {
    width: 90%;
    height:55%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
    background-color: transparent;
    
}

/* Set a style for all buttons */
button {
    background-color:rgb(67, 54, 122);
    color: white;
    padding: 10px 20px;
    margin: 10px 30px 5px 180px;
    border: none;
    cursor: pointer;
    width: 40%;
	font-size:20px;
    background-color: transparent;
    border:1px solid white;
}
button:hover {
    background-color: dodgerblue;
    border:none;


}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 0px 0 0 0;
    padding:15px;
    position: relative;
    height:30%;
   

}
.avatar {
    width: 100px;
	height:100px;
    border-radius: 50%;
  
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0%;
    width: 100%;
    height: 100%;
    overflow: auto;
    border:2px bold black;
    background-color: rgba(0,0,0,0.4);
    

}
.container2{
    margin:55px 0px 0px 0px;
    height:40%;


}
/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%;
    height:80%; 
    padding-bottom: 0px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* credit card */
.creditCardForm {
    max-width: 900px;
    background-color: #fff;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    margin-bottom: 10px;
}
.creditCardForm .heading h1 {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    color: #4c4e56;
}
.creditCardForm .payment {
    float: left;
    font-size: 18px;
    padding: 0px 0px;
    margin-top: 0px;
    /* margin:0px; */
    height:370px;

    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 40px;
    height: auto;
    padding: 0 16px;
}
.creditCardForm .owner {
    width: 63%;
    margin-right: 10px;
}
.creditCardForm .CVV {
    width: 35%;
}
.creditCardForm #card-number-field {
    width: 100%;
}
.creditCardForm #expiration-date {
    width: 49%;
}
.creditCardForm #credit_cards {
    width: 50%;
    margin-top: 25px;
    text-align: right;
}
.creditCardForm #pay-now {
    width: 100%;
    margin-top: 0px;
}
.creditCardForm .payment .btn {
    width: 100%;
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding: 10px;
    margin-right: 15px;
}
.transparent {
    opacity: 0.2;
}
@media(max-width: 650px) {
    .creditCardForm .owner,
    .creditCardForm .CVV,
    .creditCardForm #expiration-date,
    .creditCardForm #credit_cards {
        width: 100%;
    }
    .creditCardForm #credit_cards {
        text-align: left;
    }
}




</style>



<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>























        
    </body>
    



</html>