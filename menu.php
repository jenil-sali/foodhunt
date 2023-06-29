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
    <title>Hunger's Place</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
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
    <br>
    <div class="menu">
        <h3>Delight your taste buds with a diverse menu that caters to every craving.</h3>
    </div>
    <br>
    <table class="table table-borderless; table-container" style="max-width: 100%; margin: 0 auto;">
      
      <tbody>
        <tr>
          <th scope="row">
            <div class="card" style="width: 18rem;">
              <img src="pizza.jpg" class="card-img-top" alt="pizza">
              <div class="card-body">
                <h5 class="card-title">Pizza</h5>
                <p class="card-text">From classic Margherita to gourmet specialties, our pizzas are sure to impress.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </th>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="burger.jpg" class="card-img-top" alt="Burger">
              <div class="card-body">
                <h5 class="card-title">Burger</h5>
                <p class="card-text">Burger Bliss: Unleash your cravings with our mouthwatering patties.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </td>
          <td><div class="card" style="width: 18rem;">
            <img src="noodels.jpg" class="card-img-top" alt="Noodels">
            <div class="card-body">
              <h5 class="card-title">Noodle</h5>
              <p class="card-text">Slurp your way to happiness with our irresistible noodle creations.</p>
              <a href="#" class="btn btn-primary">Explore More ...</a>
            </div>
          </div></td>
          
        </tr>
        <br><br><br>
        <tr>
          <th scope="row">
            <div class="card" style="width: 18rem;">
              <img src="pasta.jpg" class="card-img-top" alt="Pasta">
              <div class="card-body">
                <h5 class="card-title">Pasta</h5>
                <p class="card-text">Experience pasta like never before with our creative and unique combinations.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </th>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="chinese.jpg" class="card-img-top" alt="chinese">
              <div class="card-body">
                <h5 class="card-title">Chinese</h5>
                <p class="card-text">Immerse yourself in the exotic flavors of China right at your table.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </td>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="fries.jpg" class="card-img-top" alt="fries">
              <div class="card-body">
                <h5 class="card-title">Fries</h5>
                <p class="card-text">Crispy perfection in every bite: Dive into our flavorful and satisfying fries.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </td>
          
          <br><br><br>
        <tr>
          <th scope="row">
            <div class="card" style="width: 18rem;">
              <img src="paneer.jpg" class="card-img-top" alt="panner">
              <div class="card-body">
                <h5 class="card-title">Panner Items</h5>
                <p class="card-text">Paneer Paradise: Experience the rich and velvety texture of our exquisite paneer creation.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </th>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="bevrages.jpg" class="card-img-top" alt="bevrages">
              <div class="card-body">
                <h5 class="card-title">Bevrages</h5>
                <p class="card-text">Elevate your dining experience with our curated selection of premium beverages.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </td>
          <td>
            <div class="card" style="width: 18rem;">
              <img src="icecream.jpg" class="card-img-top" alt="icecream">
              <div class="card-body">
                <h5 class="card-title">Ice Creames</h5>
                <p class="card-text">Chill out and satisfy your sweet tooth with our heavenly ice cream flavors.</p>
                <a href="#" class="btn btn-primary">Explore More ...</a>
              </div>
            </div>
          </td>
        </tr>
        
      </tbody>
    </table>
</body>
</html>