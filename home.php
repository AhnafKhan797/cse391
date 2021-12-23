<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>CarRent</title>
</head>
<body style="background-color:lightblue">
<?php include 'nav.php' ;?>
<br>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/Cheap-Rent-A-Car-in-Dhaka-Bangladesh-798x349.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption bg-primary">
        <h3>SUV</h3>
        <p>Get A car anywhere</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/new.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption bg-primary">
        <h3>Sedan</h3>
        <p>Anyplace you want</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/unnamed.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption bg-primary">
        <h3>MPV</h3>
        <p>All around the country</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/1_eY0kolIv3vFuyqK5LTZ3XA.png" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">We are CarRent</h2>
        <p class="py-3">We provide the best service all over the country. You call for our cars anywhere, anyplace.
          we also provide drivers if Needed. So have great journey with us.
        </p>
        <a href="contact.php" class="btn btn-primary">Know more</a>
      </div>
    </div>
  </div>
</section>
<section>
<div class="py-5">
    <h2 class="text-center">Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
<div class="clo-lg-4 col-md-4 col-12">
<div class="card">
  <img src="image/onlycar.jpg" height="228" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">cars</h5>
    <p class="card-text">We provide the best cars at a reasonable price in the country.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="clo-lg-4 col-md-4 col-12">
<div class="card">
  <img src="image/driwithcar.jpg" height="250" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">driver and Car</h5>
    <p class="card-text">we provide Car with driver if you need.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="clo-lg-4 col-md-4 col-12">
<div class="card">
  <img src="image/driver.png" height="250" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Driver</h5>
    <p class="card-text">we provide only driver if you need only driver in case.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
  </div>
</div>
</section>
<br>
<br>


<footer class="p-1 bg-primary">
  <div class="text-white">
  <h3 class="text-center">Our info:</h3>
  </div>
<div>
          <p class="text-center text-white">  +01234567789  </p>
          <p href="#" class="text-center text-white">  carrent@gmail.com  </p>
          <p href="#" class="text-center text-white">  Dhaka, Bangladesh </p>
          </div>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>