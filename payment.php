<?php 
include 'dbcon/userinfo.php';
session_start();
error_reporting(0);


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['finish']))
{
  
  $method = $_POST['method'];
  $tran = $_POST['tran'];
  $num = $_POST['num'];

  
  $sql= "INSERT INTO payment (method, tranid, number) VALUES ('$method','$tran','$num')";
  
  $query_run = mysqli_query($conn, $sql);
  if( $query_run){
  echo "<script>alert('Your Car have been book. Thank you for being with us.')</script>";

}else{
  echo "<script>alert('An error occured. Please try again')</script>";
}

   
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
<br>
<center>
<h1>payment</h1>
<h2>Please send the money to the account number:</h2>
<h3>For Bkash:01711223344 and For Nogod:01711223344</h3>
<br>
<br>
<div class="w-50 m-auto">
    <form action="" method="POST">
    <div class="form-group">
         <p>Select payment method</p>
        <input type="radio" id="Bkash" name="method" value="Bkash">
        <label for="bkash">bkash </label>
        <input type="radio" id="Nogod" name="method" value="Nogod">
        <label for="nogod">Nogod</label><br>
        </div>
      <div class="form-group">
            <label>Transection ID</label>
            <input type="text" name="tran" class="form-control"  required>
      </div>
      <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="num" class="form-control"  required>
      </div>
      <div class="form-group">
      <button type="submit" name="finish" class="btn bg-primary">Finish</button>
      </div>
    </form>
  </div>  
  </center>



</body>
</html>