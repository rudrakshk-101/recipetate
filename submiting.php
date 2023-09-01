<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');


$message = "";
if (isset($_SESSION['username'])) {
    // User is logged in
    $message = $_SESSION['username'] ;
} else {
    // User is not logged in
    $message = "You are not logged in.";
}



// Database configuration
$dbHost = "localhost";  
$dbUser = "root";       
$dbPass = "";           
$dbName = "mydbs1";     

// Create a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if (isset($_POST['recipesubmit'])) {
    $userpost = $message;
    $name = $_POST['name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $image = $_FILES["image"]["tmp_name"];
    // $imageData = addslashes(file_get_contents($image));

    // Insert data into the database
    $sql = "INSERT INTO recipe (userpost, name, ingredients, instructions, img) 
            VALUES ('$userpost','$name', '$ingredients', '$instructions', '$imageData')";

if ($conn->query($sql) === TRUE) {
    header("Location: detailrenderpage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>
