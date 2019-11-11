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

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="js/jquery.payform.min.js" charset="utf-8"></script>
        <!-- <script src="js/donor_donates.js"></script> -->



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
                    
                        <section class="box" style="background-color:#2122; margin-left:30%;width:40%;height:350px;padding:20px,0px,0px,0px">
                            <div class="" style="background-color:white;width:100%;border-radius:5px; height:70%; padding:5px; margin:10px">
                                <h4><?php echo $row['name'];?></h4><br>
                                <label for="event_type"><b>Type of event:</b></label>
                                <?php echo $row['type']; ?><br>
                            </div>
                            
                            <button onclick="document.getElementById('modal-wrapper').style.display='block'"  style="margin-left:10%;font-color:white;font-weight : bold ;border:1px solid gold;background-color:rgba(53,140,227,0.15);color:white;" class="button alt">
                                  Add Donate</button>
                        </section>

                        <!-- <a href="#" class="button alt">Default</a> -->
                        

                        
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

    







		
		
	
        <?php 

// require ('includes/footer.html');

?> 
            

<!-- Popup css and divs -->
<div id="modal-wrapper" class="modal">
  
    <div class="modal-content animate" id="model_donate">
        
    
        <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="images/hold_hand.jpg" alt="Avatar" class="avatar" style="margin-top:100px;">
            <h1 style="text-align:center; ">Donate now</h1>
        </div>


        <!-- <div class="container2"> -->
			
                    
                <div class="creditCardForm">
                
                    <div class="payment">
                        <form  action="submit_donation.php?event=<?php echo $event ?>" method="post">


                            <div class="form-group amount">
                                <label for="amount" style="margin-right:0px;margin-bottom:0;padding-right:360px;">Amount</label>
                                <input type="text" class="form-control" id="owner" name="amount">
                            </div>

                            <div class="form-group owner">
                                <label for="owner" style="margin-right:0px;margin-bottom:0;padding-right:370px;">Owner</label>
                                <input name="owner" type="text" class="form-control" id="owner">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv" style="margin-bottom:0;">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" >
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber" style="margin-left:0px;margin-bottom:0;padding-right:320px;">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" name="card_number">
                            </div>
                            <div class="form-group" id="expiration-date">
                                <label style="margin-right:0px;margin-right:0px;margin-bottom:0;padding-right:200px;">Expiration Date</label>
                                <select name="month">
                                    <option value="JANUARY">January</option>
                                    <option value="fEBRUARY">February </option>
                                    <option value="MARCH">March</option>
                                    <option value="APRIL">April</option>
                                    <option value="MAY">May</option>
                                    <option value="JUNE">June</option>
                                    <option value="JULY">July</option>
                                    <option value="AUGUST">August</option>
                                    <option value="SEPTEMBER">September</option>
                                    <option value="OCTOMBER">October</option>
                                    <option value="NOVEMBER">November</option>
                                    <option value="DECEMBER">December</option>
                                </select>
                                <select name="year">
                                    <option value="2019"> 2019</option>
                                    <option value="2020"> 2020</option>
                                    <option value="2021"> 2021</option>
                                    <option value="2022"> 2022</option>
                                    <option value="2023"> 2023</option>
                                    <option value="2024"> 2024</option>
                                </select>

     
                            </div>
                            <div class="form-group" id="credit_cards">
                                <img src="images/visa.jpg" id="visa">
                                <img src="images/mastercard.jpg" id="mastercard">
                                <img src="images/amex.jpg" id="amex">
                            </div>
                            <div class="form-group" id="pay-now" style="margin-left:21%;margin-top:4%;">
                                <button  class="btn btn-default" id="confirm-purchase" style="margin-left:10%;">Confirm</button>
                            </div>
                        </form>
                    </div>
                    
                </div>

        
            
        <!-- </div> -->
    
    </div>
  
</div>









<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text] {
    width: 90%;
    height:10%;
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
    margin: 5px 0 0 0;
    padding-bottom:15px;
    position: relative;
    height:30%;
   

}
.avatar {
    width: 175px;
	height:175px;
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
    width: 50%;
    height:85%; 
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
    margin: 10px auto;
    height:80%;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
.creditCardForm label {
    width: 100%;
    height:30%;
    margin-top:10pz;
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
    margin-top: 80px;
    /* margin:0px; */
    height:270px;

    position: relative;
}
.creditCardForm .payment .form-group {
    float: left;
    margin-bottom: 15px;
}
.creditCardForm .payment .form-control {
    line-height: 25px;
    height: auto;
    padding: 0 16px;
    margin-top:0px;
}
.creditCardForm .amount {
    width: 70%;
    margin-left: 0px;
   padding:0px;
}
.creditCardForm .owner {
    width: 70%;
    margin-left: 0px;
   
    padding:0px;
}
.creditCardForm .CVV {
    width: 15%;
    margin-left: 65px;
}
.creditCardForm #card-number-field {
    width: 70%;
    /* margin-left:0px; */
}
.creditCardForm #expiration-date {
    width: 49%;
    margin-left:25px;
}
.creditCardForm #credit_cards {
    width: 35%;
    margin-top: 15px;
    margin-left: 40px;
    margin-right:0px;
    margin-bottom:0px;
    padding-left:0px;
    text-align: center;
}
.creditCardForm #pay-now {
    width: 60%;
    margin-right: 300px;
}
.creditCardForm .payment .btn {
    width: 80%;
    /* margin:10px,10px,10px,10px; */
    margin-top: 3px;
    font-size: 24px;
    background-color: #2ec4a5;
    color: white;
}
.creditCardForm .payment select {
    padding-top: 10px;
    margin-top:10px;
    margin-right: 15px;
    
  
   overflow: hidden;
   background: url(new_arrow.png) no-repeat right #ddd;
   border: 1px solid #ccc;
   
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