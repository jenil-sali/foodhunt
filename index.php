<?php
session_start();
error_reporting(0);
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Hunt</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="bg-img">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light bg-light; navbar">
        <a class="navbar-brand" style="font-size: 35px;">
        <img src="logo.png" width="70" height="70" class="d-inline-block align-top" alt="Food Hunt">
        &nbsp;&nbsp;&nbsp; <i><b>Food Hunt<b><i>
        </a>
        <div class="navi">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="reserve.php">Reservation</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="mainres">
        <h1><b>WELCOME !!</b></h1>
        
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="slider1.jpg" class="d-block w-100" alt="Burger" height="700">
          </div>
          <div class="carousel-item">
            <img src="slider2.jpeg" class="d-block w-100" alt="Indian Style Food" height="700">
          </div>
          <div class="carousel-item">
            <img src="slider3.jpeg" class="d-block w-100" alt="Pizza" height="700">
          </div>
          <div class="carousel-item">
            <img src="slider4.jpg" class="d-block w-100" alt="Pizza" height="700">
          </div>
          <div class="carousel-item">
            <img src="slider5.jpg" class="d-block w-100" alt="Pizza" height="700">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>          
</body>
</html>