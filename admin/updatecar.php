<?php 
include '../dbcon/userinfo.php';
session_start();
error_reporting(0);
if (!isset($_SESSION['id'])): 
    header('Location: adminindex.php');
endif;

if(isset($_POST['update'])){

  $id =  $_GET['id'];
  $price = $_POST['price'];
  $model = $_POST['model'];
  $stat = $_POST['stat'];
  $sql = "UPDATE carlist SET id=$id, price='$price', status='$stat' where id=$id ";

  $query_run = mysqli_query($conn, $sql);

  header('Location: admincar.php');

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

<div class="w-50 m-auto">
  <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
          <label>price</label>
          <Textarea class="form-control" name="price"></Textarea>
</div>  
  <div class="form-group">
          <label>Status</label>
          <Textarea class="form-control" name="stat"></Textarea>
    </div>
    <div class="form-group">
    <button type="submit" name="update" class="btn btn-primary ">Update
    </button>
    </div>
  </form>
</div>


</body>
</html>