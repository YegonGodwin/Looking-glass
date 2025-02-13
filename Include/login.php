<?php

include('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    
    if (empty($email) && empty($pword)) {
        echo "All fields are required.";
    } else {
        $sql = "SELECT username, email, password FROM users WHERE password = $pword";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pword, $row['password'])) {
                $_SESSION['email'] = $email;
                header("Location: ../Assets/about.php");
            } else {
                echo "Invalid username or password.";
                header('location: /index.php');
            }
        } else {
            echo "No user found with this username.";
        }
    }
}

$conn->close();
?>
