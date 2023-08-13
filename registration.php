<?php
// Database configuration
$dbHost = "localhost";  // Change to your database host
$dbUser = "root";   // Change to your database username
$dbPass = "";   // Change to your database password
$dbName = "mydbs1";   // Change to your database name

// Create a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if (isset($_POST['registerationsubmit'])) {
    $username = $_POST['username'];
    $phoneNumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, phonenumber, gender, email, age, password) 
            VALUES ('$username', '$phoneNumber', '$gender', '$email', '$age', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
