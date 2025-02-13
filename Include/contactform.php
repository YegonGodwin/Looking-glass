<?php 
    include('dbconnect.php');


    if(isset($_POST['submit'])){
        $comment = $_POST['contactformcomment'];
        $user = $_POST['contactformname'];
        $emailAd = $_POST['contactformemail'];
        $phone = $_POST['contactformphone'];
        $country = $_POST['contactformcountry'];

        $_SESSION['user'] = $user;

        if (empty($user) && empty($email) && empty($phone)&& empty($comment)) {
            echo "All fields are required.";
        } else {
            $sql = "INSERT INTO `contact`(`Comment`, `username`, `email`, `Phone_number`, `Country`) VALUES ('$comment','$user','$emailAd','$phone','$country')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header('Location: ../Assets/about.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>