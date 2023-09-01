<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "mydbs1";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        if (password_verify($password, $storedPassword)) {
            session_start();
            $user_id=2;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username']=$username;
            session_write_close();
            ob_start(); // Start output buffering
            header("Location: submitrecipe.php");
            ob_end_flush();
            exit();
        } else {
            $error = "Incorrect username or password.";
            echo "invalid Credentials";
        }
    } else {
        $error = "User not found.";
    }
}

$conn->close();
?>
