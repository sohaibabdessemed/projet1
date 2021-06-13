<?php
session_start();

extract($_POST);

try{

  require("database/connection.php");

  $catSQL = "select type from product  where status='1' group by type";
  $cat = $db->query($catSQL);


  }
catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0547f82a88.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="services.css">
    <title>Organizili</title>
</head>
<body class=" bg-white">
<!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
        <div class="container bg-white rounded">
          <!-- Brand -->
          <a style="color: #ffc93c;font-family: 'Rajdhani', sans-serif;" class="navbar-brand" href="./index.php">
            Organizili
          </a>
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Nav -->
            <ul class="navbar-nav mx-auto">
              <li class="nav-item ">
                <!-- Toggle -->
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item position-static">
                <!-- Toggle -->
                <a class="nav-link" href="grid.php">Events</a>
              </li>
              <li class="nav-item position-static">
                <!-- Toggle -->
                <a class="nav-link" href="ourservices.php">Our Services</a>
              </li>
            </ul>
            <!-- Nav -->
            <ul class="navbar-nav flex-row">
              <?php if(!isset($_SESSION["activeuser"])){ ?>
              <li class="nav-item ml-lg-n2  mr-sm-3">
                <a class="nav-link" href="login.php">
                    Login
                </a>
              </li>
              <li class="nav-item ml-lg-n2">
                <a class="nav-link" href="register.php">
                    Register
                </a>
              </li>
              <?php }  else {?>
              <li class="nav-item ml-lg-n4">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user"></i>
                </a>
              </li>
              <li class="nav-item ml-lg-n2 ml-3">
                <a class="nav-link" href="database/logout.php">
                    Logout
                </a>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
    </nav>
    <section>
      <div class="container py-5">


        <header class="text-center mb-5 text-white">
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <h1>Our Services</h1>
              <p>These Are Our Business Plans<br>
            </div>
          </div>
        </header>




        <div class="row text-center align-items-end">

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="bg-white p-5 rounded-lg shadow">
              <h1 class="h6 text-uppercase font-weight-bold mb-4">Basic</h1>


              <div class="custom-separator my-4 mx-auto bg-warning"></div>

              <ul class="list-unstyled my-5 text-small text-left">
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Sweet Menu</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> ORGANIZILI Team</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> DJ</li>
                <li class="mb-3 text-muted">
                  <i class="fa fa-times mr-2"></i>
                  <del>Savory Menu</del>
                </li>
                <li class="mb-3 text-muted">
                  <i class="fa fa-times mr-2"></i>
                  <del>Photographer</del>
                </li>
                <li class="mb-3 text-muted">
                  <i class="fa fa-times mr-2"></i>
                  <del>More Surprises And Bonuses</del>
                </li>
              </ul>

            </div>
          </div>
          <!-- END -->





          <!-- Pricing Table-->
          <div class="col-lg-6">
            <div class="bg-white p-5 rounded-lg shadow">
              <h1 class="h6 text-uppercase font-weight-bold mb-4">Premium</h1>


              <div class="custom-separator my-4 mx-auto bg-warning"></div>

              <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Sweet Menu</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> ORGANIZILI Team</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> DJ</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Savory Menu</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Photographer</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> More Surprises And Bonuses</li>
              </ul>

            </div>
          </div>
          <!-- END -->

        </div>
      </div>
    </section>
    <br>
    <section>
      <div class="container py-5">


        <header class="text-center mb-5 text-white">
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <h1>Our Menus</h1>
              <p>These Are Our Menus<br>
            </div>
          </div>
        </header>




        <div class="row text-center align-items-end">

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="bg-white p-5 rounded-lg shadow">
              <h1 class="h6 text-uppercase font-weight-bold mb-4">Sweet Menu</h1>


              <div class="custom-separator my-4 mx-auto bg-warning"></div>

              <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Pancakes</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Traditional Sweets</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mini Fruit Cakes</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Brownies And Cookies</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> DjouziaS</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mousse Au Chocolat</li>
              </ul>

            </div>
          </div>
          <!-- END -->





          <!-- Pricing Table-->
          <div class="col-lg-6">
            <div class="bg-white p-5 rounded-lg shadow">
              <h1 class="h6 text-uppercase font-weight-bold mb-4">Savory Menu</h1>


              <div class="custom-separator my-4 mx-auto bg-warning"></div>

              <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mini Burger</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mini Pizza</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mini Tacos</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Mini Bourek</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Traditional Dishes</li>
                <li class="mb-3">
                  <i class="fa fa-check mr-2 text-warning"></i> Any Specific Order Of Our Premium Customers</li>
              </ul>

            </div>
          </div>
          <!-- END -->

        </div>
      </div>
    </section>
    <br>
    <footer class="bg-dark text-left">
        <div class="border-bottom border-gray-700 pt-5 pb-5">
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                <!-- Heading -->
                <h4 class="mb-6 text-warning">ORGANIZILI</h4>
                <!-- Social -->
                <ul class="list-unstyled list-inline mb-7 mb-md-0">
                    <li class="list-inline-item">
                    <a href="#!" class="text-warning">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#!" class="text-warning">
                        <i class="fab fa-youtube"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#!" class="text-warning">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#!" class="text-warning">
                        <i class="fab fa-instagram"></i>
                    </a>
                    </li>
                </ul>
                </div>
                <div class="text-right col-6 col-sm">
                <!-- Heading -->
                <h4 class="mb-6 text-warning">
                    Contact
                </h4>
                <!-- Links -->
                <ul class="list-unstyled mb-0 text-light">
                    <li>+213699874562</li>
                    <li><a class="text-light" href="#">organizli@help.com</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="py-1">
            <div class="container">
            <div class="row">
                <div class="col">
                <!-- Copyright -->
                <p class="mb-3 mb-md-0 font-size-xxs text-white text-center">
                    2021 All rights reserved
                </p>
            </div>
            </div>
        </div>
    </footer>
