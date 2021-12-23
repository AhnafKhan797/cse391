<?php 
include '../dbcon/userinfo.php';
session_start();
error_reporting(0);
if (!isset($_SESSION['id'])): 
    header('Location: adminindex.php');
endif;

if (isset($_POST['upload']))
{
  
  $car = $_POST['car'];
  $brand = $_POST['brand'];
  $price = $_POST['price'];
  $fuel = $_POST['fuel'];
  $model = $_POST['model'];
  $lic = $_POST['license'];
  $detail = $_POST['detail'];
  $stat = $_POST['stat'];
  $file = $_FILES['image'];
  
  $filename = $file['name'];
  $fileerror = $file['error'];
  $filetmp = $file['tmp_name'];

  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));

  $fileextstored = array('png','jpg','jpeg');

  if(in_array($filecheck, $fileextstored)){
    $destinationfile = 'admin/images/'.$filename;
    move_uploaded_file($filetmp, $destinationfile);

    $sql= "INSERT INTO carlist (name, brand, price, fuel, model, plate, detail, status, image) VALUES ('$car','$brand','$price','$fuel','$model','$lic','$detail', '$stat', '$destinationfile')";
    $query_run = mysqli_query($conn, $sql);
    if( $query_run){

      move_uploaded_file($_FILES['image']['tmp_name'], "$file" );
      echo "<script>alert('Car have been uploaded.')</script>";
    
  }else{
    echo "<script>alert('An error occured. Please try again')</script>";
   }
 }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>CarRent Admin</title> 
</head>
<body  style="background-color:skyblue">
<?php include 'adminnav.php' ;?>
<br>
<br>
<center><h1>Enter Cars</h1></center>
<br>
<br>
<section>
<br>
<br>
  <div class="w-50 m-auto">
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
            <label>Car name</label>
            <input type="text" name="car" class="form-control">
      </div>
      <div class="form-group">
            <label>Brand</label>
            <input type="text" name="brand" class="form-control">
      </div>
      <div class="form-group">
            <label>Price per day</label>
            <input type="text" name="price" class="form-control">
      </div>
      <div class="form-group">
            <label>Fuel Type</label>
            <input type="text" name="fuel" class="form-control">
      </div>
      <div class="form-group">
            <label>Model</label>
            <input type="text" name="model" class="form-control">
      </div>
      <div class="form-group">
            <label>License</label>
            <input type="text" name="license" class="form-control">
      </div>
      <div class="form-group">
            <label>Car Details</label>
            <Textarea class="form-control" name="detail"></Textarea>
      </div>
      <div class="form-group">
            <label>Status</label>
            <Textarea class="form-control" name="stat"></Textarea>
      </div>
      <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
      </div>
      <div class="form-group">
      <button type="submit" name="upload" class="btn btn-primary ">Upload
      </button>
      </div>
    </form>
  </div>
</section>
<br>
<br>
    
</body>
</html>