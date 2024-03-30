<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sreeparvathy_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>
        
       
        <?php if(!isset($_SESSION["loginuser"])){?>
          <li class="nav-item">
          <a class="nav-link" href="registration.php">REGISTRATION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>
     <?php } else{ ?>
      <li class="nav-item">
          <a class="nav-link" href="account.php">ACCOUNT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart-design.php">CART</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
      <?php } ?>
      
         </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

