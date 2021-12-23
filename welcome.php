<?php 
include 'dbcon/userinfo.php';
session_start();
error_reporting(0);

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
    <title>CarRent</title>
</head>
<body style="background-color:lightblue">
    <?php include 'nav.php' ;?>
    <br>
    <br>
   
<center><h1>Profile</h1></center> 
<br>
<br>
<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="image/no-image.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php echo "<h4>Hello " . $_SESSION['username'] . "</h4>"; ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <button type="file" name="upload" class="btn btn-primary ">Photo</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo " " . $_SESSION['username'] . ""; ?>
                    </div>
                   
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo " " . $_SESSION['email'] . ""; ?>
                    </div>
                    
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NID no.</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo " " . $_SESSION['mobile'] . ""; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h6>Member</h6>
                    </div>
                  </div>
                  <hr>
                  <hr>
                </div>
              </div>
              <div class="row gutters-sm">
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="card h-100">
                    <div class="card-body">
                      <h2>Star Rating</h2>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>
    </div>
</body>
</html>