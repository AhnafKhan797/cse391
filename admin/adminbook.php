<?php 
include '../dbcon/userinfo.php';
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])): 
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
<body style="background-color:skyblue">
<?php include 'adminnav.php' ;?>
<br>
<br>
<center><h1>All Bookings</h1></center>
<br>
<div class="container mt-5">
<table class="table">


<thead class="table-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">NID</th>
      <th scope="col">Number</th>
      <th scope="col">Car</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Driver</th>
    </tr>
  </thead>
  <tbody>
    <?php
include 'dbcon/userinfo.php';
error_reporting(0);
session_start();


$sql= "SELECT * from book";
$result= mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);



 if($total != 0){
    while(($show = mysqli_fetch_assoc($result))){
        echo "
        <tr>
        <td>" .$show['username']. " </td>
        <td>" .$show['email']. " </td>
        <td>" .$show['nid']. " </td>
        <td>" .$show['mobile']. " </td>
        <td>" .$show['car']. " </td>
        <td>" .$show['place']. " </td>
        <td>" .$show['tarikh']. " </td>
        <td>" .$show['driver']. " </td>
        ";

    }
 }
 else{
     echo "No Records Found";
 }

?>
    </tbody>
    </table>
    </div>

    <br>
    <br>
    
</body>
</html>