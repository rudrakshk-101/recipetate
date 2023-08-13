
// if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SUBMIT'])){
//     $conn= mysqli_connect('localhost','root','123456','mydbs1') or die("connection failed: " .mysqli_connect_error());
//     if(isset($_POST['username']) && isset($_POST['email'])&& isset($_POST['phonenumber'])&& isset($_POST['gender'])&& isset($_POST['age'])&& isset($_POST['password'])){
//         $name=$_POST['username'];
//         $email=$_POST['email'];
//         $phonenumber=$_POST['phonenumber'];
//         $gender=$_POST['gender'];
//         $age=$_POST['age'];
//         $password=$_POST['password'];

//         $sql= "INSERT INTO 'user' ('username','email','phonenumber','gender','age','password') VALUES ('$username','$email','$phonenumber','$gender','$age','$password') ";

//         $query = mysql_query($conn,$sql);
//         if($query) {
//             echo 'Entry Successfull';
//         }
//         else{
//             echo'Error Occurred';
//         }
//     }
// }

<?php
// Database configuration
$dbHost = "localhost";  // Change to your database host
$dbUser = "username";   // Change to your database username
$dbPass = "password";   // Change to your database password
$dbName = "database";   // Change to your database name

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
