<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');


$message = "";
$message = $_SESSION['username'] ;
if (isset($_SESSION['username'])) {
    // User is logged in
    $message = $_SESSION['username'] ;
} else {
    // User is not logged in
    $message = "You are not logged in.";
    header("Location: login.html");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Submission Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/submissionstyles.css">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"><img src="images/recipetate-logo-removebg-preview.png" alt="Logo" width="100rem"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="submitrecipe.php">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="detailrenderpage.php">Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.html">Register</a>
              </li>
            <li class="nav-item">
                <h2 class="usernamed"><?php echo $message; ?></h2>
              </li>
            </ul>
          </div>
        </nav>
    <div class="container">
        <h1>Submit Your Recipe</h1>
        <form enctype="multipart/form-data" action="submiting.php" method="post" >
            <label for="recipeName">Recipe Name:</label>
            <input type="text" id="recipeName" name="name" required>

            <label for="ingredients">Ingredients:</label>
            <textarea id="ingredients" name="ingredients" rows="4" required></textarea>

            <label class="instruct" for="instructions">Instructions:</label>
            <textarea id="instructions" name="instructions" rows="8" required></textarea>

            <label class="recimg" for="image">Recipe Image (optional):</label>
            <input type="file" id="image" name="image" accept="image/*">

            <!-- <a href="recipedetail.html"><button type="submit">Submit Recipe</button></a> -->
            <button name="recipesubmit" type="submit" >Submit Recipe</button>
        </form>
    </div>
</body>
</html>
