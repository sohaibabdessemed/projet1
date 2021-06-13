<?php
session_start();
extract($_GET);
if(isset($id)){
  try{

    require("database/connection.php");

    $sql = "select * from product where id=$id";
    $r = $db->query($sql);
    $record = $r->fetch();

    }
  catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
  }
}
else {
  die("error!!");
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

<!-- car single -->
    <div class="row row-cols-1 row-cols-lg-2 m-3">
        <div id="carouselExampleCaptions" class="carousel slide col" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/<?php echo $record["id"];?>/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/<?php echo $record["id"];?>/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/<?php echo $record["id"];?>/3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="card text-center col">
            <div class="card-body">
              <h5 class="card-title font-weight-bold"><?php echo $record["type"]; ?></h5>
              <p class="card-text"> <?php echo $record["choice"]." ".$record["salle"]." ".$record["year"]?> </p>
              <div class="card text-left">
                <div class="card-body">
                    <h5 class="card-title">Event Details</h5>
                    <div class="pl-4">
                      <p class="card-text"><strong>Menu: </strong><?php echo $record["Menu"]; ?></p>
                      <p class="card-text"><strong>Number of guests: </strong><?php echo $record["people"]; ?></p>
                      <p class="card-text"><strong>Price: </strong><?php echo $record["price"]; ?> DA</p>
                    </div>
                </div>
              </div>
              <div class="mt-5">

                <a href="book.php?id=<?php echo $record["id"];?>" class="btn btn-warning btn-header btn-md btn-block">Book Event</a>
              </div>
            </div>
        </div>
    </div>
</body>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
