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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipies

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="SpeakerComponentStyle.css">
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
            <li class="nav-item">
                <h2 class="usernamed"><?php echo $message; ?></h2>
              </li>
            </ul>
          </div>
        </nav>

      <h1 class="recipitatelogo">RECIPITATE</h1>


    <div class="outest">
        <div class="outer">
            <div class="speakerCard">
              <div class="image">
                <img src="images/paneer tikka.jpeg" alt="kevin" width="285px"!important />
                <h1>Paneer tikka</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>


          <div class="outer2">
            <div class="speakerCard">
              <div class="image2">
                <img src="images/shwarma.jpeg" alt="kevin" width="285px" />
                <h1>shwarma</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>




          <div class="outer">
            <div class="speakerCard">
              <div class="image">
                <img src="images/pavbhaji.jpeg" alt="kevin" width="285px" />
                <h1>Pav Bhaji</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>





          <div class="outer2">
            <div class="speakerCard">
              <div class="image2">
                <img src="images/noodles.jpeg" alt="kevin" width="285px" />
                <h1>Noodles</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>





          <div class="outer">
            <div class="speakerCard">
              <div class="image">
                <img src="images/gulabjamun.jpeg" alt="kevin" width="285px" />
                <h1>Gulab Jamun</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>





          <div class="outer2">
            <div class="speakerCard">
              <div class="image2">
                <img src="images/hotdog.jpeg" alt="kevin" width="285px" />
                <h1>Hot Dog</h1>
              </div>
              <div class="info">
                <p class="infoup">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, molestiae quaerat at pariatur perspiciatis iste perferendis ratione excepturi rem vel facilis, blanditiis iusto architecto harum corrupti exercitationem! Suscipit, numquam porro.
                </p>
                <p class="infodown"></p>
              </div>
            </div>
          </div>
    </div>
</body>
</html>