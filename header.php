<?php 

 $DBConnect = mysqli_connect("localhost", "root", "", "ecommerce");
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <style type="text/css">
    body{
      font-family: serif;
    }
  </style>
</head>
<!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-md-2">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="images/logo-01.png.png" alt="" width="100%" class="me-5" height="30"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-2">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light " href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light" href="productform.php">Seller</a>
          </li>
          <li class="nav-item">
               <a class="nav-link fs-4 fw-light" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light" href="contactus.html">Contact</a>
          </li>
      </div>
        <li class="nav-item">
            <a class="nav-link fs-4 fw-light ps-5" href="#"><i class="bi bi-search"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light ps-5" href="#"><i class="bi bi-cart"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 fw-light ps-5" href="#"><i class="bi bi-heart"></i></a>
          </li>
      </ul>
    </div>
    </div>

  </nav>