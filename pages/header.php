<?php include 'DB/connection.php'?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MENAJIVI GAUSHALA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="assets/images/logo-w.png" type="image/gif" sizes="40x40">

  <!-- style sheet  -->
  <link rel="stylesheet" href="css/style.css">
  <!-- font link  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Frank+Ruhl+Libre&family=Open+Sans:wght@400;500&family=Poppins&display=swap"
    rel="stylesheet">

    <!-- slick slider styel sheet  -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    


  <!-- banner peragraph font style link  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Frank+Ruhl+Libre&display=swap"
    rel="stylesheet">
  <!-- second   -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Frank+Ruhl+Libre&display=swap"
    rel="stylesheet">

  <!-- icon style link  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <!-- navigation bar  -->
  <header class="" >
    <section class="navigation_bar">
      <nav class="navbar navbar-expand-lg bg-light py-0 " style="background-color: transparent;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <div class="logo_banner">
              <img src="img/logo.png" alt="" class="img-fluid">
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="about-us.php">About Us</a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mx-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item me-5" href="product-details.php">Ghee</a></li>
                    <!-- <li><a class="dropdown-item" href="product-details.php">Milk</a></li> -->
                    <!-- <li><a class="dropdown-item" href="product-details.php">desi-ghee</a></li> -->
                </ul>
             </li>



              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>
            </ul>
            <!-- Button trigger modal -->

            <div class="header_icon ">
              
              <a href="login.php"><i class="bi bi-person-circle mx-4"></i></a>
              <a href="cart.php"><i class="bi bi-basket-fill "></i></a>
             <a href="wishlist.php"> <i class="bi bi-heart-fill mx-4 "style="z-index:1;"></i></a>
             <a style="z-index:3;" href=""data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-search "></i></a>


             <!-- MODAL SECTION  -->
            

            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Find Your Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" name="search" placeholder="what are you looking for?"
                        aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </section>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" style="z-index:3;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Search Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary">search</button>
      </div>
    </div>
  </div>
</div>

