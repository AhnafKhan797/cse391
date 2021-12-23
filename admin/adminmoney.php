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
  
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>CarRent Admin</title> 
</head>
<body style="background-color:skyblue">
<?php include 'adminnav.php' ;?>
<br>
<br>
<center><h1>Payment Data</h1></center>
<br>
<br>
<br>

<div class="container mt-5">
<table class="table">


<thead class="table-dark">
    <tr>
      <th scope="col">Method</th>
      <th scope="col">Transection ID</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
    <?php
include 'dbcon/userinfo.php';
error_reporting(0);
session_start();


$sql= "SELECT * from payment";
$result= mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);


 if($total != 0){
    while(($show = mysqli_fetch_assoc($result))){
        echo "
        <tr>
        <td>" .$show['method']. " </td>
        <td>" .$show['tranid']. " </td>
        <td>" .$show['number']. " </td>
        ";

    }
 }
 else{
     echo "No transection Found";
 }

?>
  </tbody>
    </table>
</div>
    <br>
    <br>
</body>
</html>