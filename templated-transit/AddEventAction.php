<?php
// session_start();
// $con=mysqli_connect('localhost','root','');
// mysqli_select_db($con,'welfare_se');

    if(isset($_POST['submit'])){
        require_once 'includes/database.php';
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $event_name=$_POST['event_name'];
        $org_name=$_POST['org_name'];
        $event_type=$_POST['type'];
        $req_amount=$_POST['req_amount'];
        $description=$_POST['description'];

        $query = mysqli_query($conn,"INSERT INTO  events(event_name,org_name,event_type,req_amount,rec_amount,description) VALUES ('$event_name','$org_name','$event_type','$req_amount','0.00','$description')");
        // if ($conn->query($query) == TRUE) {
            echo "<script type=\"text/javascript\" charset=\"utf-8\">window.self.close()</script>";
        // }else {
        //     echo "Error: " . $query . "<br>" . $conn->error;
        // }
        mysqli_close($conn);
    }
?> 