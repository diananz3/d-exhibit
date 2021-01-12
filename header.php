<?php include 'auth.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Exhibit</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
  
  <link rel="shortcut icon" type="image/jpg/png" href="assets1/img/icon.png"/>

  <!-- =======================================================
  * Template Name: MyPortfolio - v2.1.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container mb-3 mt-3 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <a class="navbar-brand" href="index.php">
        <img src="assets1/img/logo_45.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-md-12 col-lg-4 text-left text-lg-right" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Home</a>
          <a class="nav-item nav-link active" href="galeri.php">Galeri</a>
          <a class="nav-item nav-link active" href="events.php">Events</a>
          <a class="nav-item nav-link active" href="profil.php"><strong><?= $_SESSION["row"]["username"]; ?></strong></a>
        </div>
      </div>
  </div>
</nav>
