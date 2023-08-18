<?php
header('Content-Type: application/json');



$servername = "localhost";   // Replace with your MySQL server name
$username = "root";         // Replace with your MySQL username
$password = "";         // Replace with your MySQL password
$dbname = "mydbs1";      // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recipe data from the database
$sql = "SELECT name,ingredients, instructions FROM recipe"; // Replace with your table name and column names
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
