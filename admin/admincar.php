<?php 
include '../dbcon/userinfo.php';
session_start();
error_reporting(0);

if (!isset($_SESSION['id'])): 
    header('Location: adminindex.php');
endif;

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
<center><div class="w-50 m-auto">
<div class="form-group">
<a href="insert.php"><button type="submit" name="upload" class="btn btn-primary "> Upload Cars
      </button></a>
</div>
</div></center>
<div class="container mt-5">
<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Car</th>
      <th scope="col">Brand</th>
      <th scope="col">Price per day</th>
      <th scope="col">Fuel Type</th>
      <th scope="col">Model</th>
      <th scope="col">License</th>
      <th scope="col">Details</th>
      <th scope="col">Status</th>
      <th scope="col">Edit Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include 'dbcon/userinfo.php';
    error_reporting(0);
    session_start();
    $sql= "SELECT * from carlist";
    $result= mysqli_query($conn, $sql);
    //$total = mysqli_num_rows($result);
    
    while($row= mysqli_fetch_array($result)){
      ?>
         <tr>
           <td> <?php echo $row['id']; ?> </td>
           <td> <?php echo $row['name']; ?> </td>
           <td> <?php echo $row['brand']; ?> </td>
           <td> <?php echo $row['price']; ?> </td>
           <td> <?php echo $row['fuel']; ?> </td>
           <td> <?php echo $row['model']; ?> </td>
           <td> <?php echo $row['plate']; ?> </td>
           <td> <?php echo $row['detail']; ?> </td>
           <td> <?php echo $row['status']; ?> </td>
           <td> 
          <button class="btn-primary btn"><a href="updatecar.php?id=<?php echo $row['id']; ?>" class="text-white">Edit Status</a></button>
          </td>
          </tr>
      <?php
        }
    
        ?>

    
  </tbody>
</table>

</div>
<br>
<br>
</body>
</html>