<?php include 'includes/php-connection.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap PHP Project</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>

  
    <header>
      <nav class="navbar navbar-expand-sm navbar-dark bg-secondary p-2">
        <div class="container">
          <a class="navbar-brand text-lg" href="http://localhost/index.php">
            <h3>Logo</h3>
          </a>
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="http://localhost/includes/classes.php" target="_blank" class="nav-link fs-5">Classes</a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/includes/schedule.php" target="_blank" class="nav-link fs-5">Schedule</a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/includes/contact.php" target="_blank" class="nav-link fs-5">Contact Us</a>
            </li> -->
          </ul>
          <div class="row  w-25 text-center flex justify-center align-item-center">
              <a class="fs-5 col text-light p-1 nav-link" href="http://localhost/signIn.php" class="nav-link">Sign In</a>
              <a class="fs-5 col bg-warning text-dark p-1 nav-link" href="http://localhost/signUp.php" class="nav-link">Sign Up</a>
              <!-- <button class="btn btn-dark">Join Gym</button> -->
          </div>
        </div>
      </nav>
    </header>