<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UMSL Hospital
    </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
  </head>
  <body style="background-image: linear-gradient(to bottom right,#ff9933 0%, #ffff66 100%);">
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar navbar-static-top">
          <a href="index.php" class="navbar-brand">🏥 UMSL Hospital</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="https://goo.gl/maps/vHJcUSoNrsJ7HY1k9" target="_blank"> Address: 1 University Blvd, St. Louis, MO 63121</a>
              </li>
              <li class="nav-item">
                <a href="">Ambulance Number: 911</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="logout.php" style="align-items: right;"> <button class="btn btn-danger" >Logout
                  </button></a>';
                }
              ?>
            </ul>
        </nav>
        </div>
