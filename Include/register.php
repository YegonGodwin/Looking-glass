<?php

include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['name'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];

    $_SESSION['user'] =  $user;
/*
    $query = "INSERT INTO `client_register`(`Username`, `Email`, `Password`) VALUES ('$name','$email','$pword')";

        if($conn -> query($query)){
            header('location: ../Article/page.php');
        }
        else{
            echo "Error".$query."<br>".$conn -> error;
        }
    }
    */
    if (empty($username) && empty($email) && empty($password)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pword')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('Location: ../Assets/about.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
