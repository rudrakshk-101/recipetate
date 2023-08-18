<?php error_reporting(E_ALL); ini_set('display_errors', 1);
?>


<?php



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
$sql = "SELECT userpost, name,ingredients, instructions FROM recipe"; // Replace with your table name and column names
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Recipe Cards</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="recipedetailpagestyle.css">
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
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="submission.html">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="recipedetail.html">Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.html">Register</a>
              </li>
            </ul>
          </div>
        </nav>
    <!-- Your navbar HTML here -->

    <div class="outest">
        <?php
        // Fetch data using the PHP script
        $recipes = $data;

        
        // Loop through recipes and render the cards
        if (is_array($recipes)) {
            foreach ($recipes as $recipe) {
            }
        } else {
            echo "Error: Failed to retrieve valid data.";
        }
        if (is_array($recipes)) {
            $recipeCount = count($recipes);
            
            for ($i = 0; $i < $recipeCount; $i++) {
                $recipe = $recipes[$i];
                // echo $recipe['name'];
            ?>




            <div class="outer">
            <div class="speakerCard">
              <div class="image">
                <img src="images/paneer tikka.jpeg" alt="kevin" width="285px"!important />
                <h1 class="recipename"><?php  echo $recipe['name'];  ?></h1>
              </div>
              <div class="info">
                <p class="ingredients">
                  <h4 class="infoheading">INGREDIENTS</h4>
                  <?php echo $recipe['ingredients']; ?>
                </p>
                <div class="instructions">
                  <h4 class="infoheading">INSTRUCTIONS</h4>
                  <?php echo $recipe['instructions']; ?>
                </div>
                <p class="infodown"></p>

                <div class="userPostName">
                <p class="userpostnamep" >Recipe By: <?php echo $recipe['userpost']; ?></p>
                </div>
              </div>
            </div>
          </div>

              <?php $i++ ; ?>
              <!-- outer 2 -->

              <div class="outer2">
            <div class="speakerCard">
              <div class="image2">
                <img src="images/paneer tikka.jpeg" alt="kevin" width="285px"!important />
                <h1 class="recipename"><?php  echo $recipe['name'];  ?></h1>
              </div>
              <div class="info">
                <p class="ingredients">
                  <h4 class="infoheading">INGREDIENTS</h4>
                  <?php echo $recipe['ingredients']; ?>
                </p>
                <div class="instructions">
                  <h4 class="infoheading">INSTRUCTIONS</h4>
                  <?php echo $recipe['instructions']; ?>
                </div>
                <p class="infodown"></p>

                <div class="userPostName">
                  <p class="userpostnamep" >Recipe By: <?php echo $recipe['userpost']; ?></p>
                </div>
              </div>
            </div>
          </div>

        <?php
        }
    } else {
        echo "Error: Failed to retrieve valid data.";
    }
        ?>
    </div>

</body>
</html>
