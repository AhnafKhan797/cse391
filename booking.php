<?php 


include 'dbcon/userinfo.php';

error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

if (isset($_POST['booking']))
{
  
  $name = $_POST['name'];
  $mail = $_POST['email'];
  $nid = $_POST['NID'];
  $mobile = $_POST['mobile'];
  $car = $_POST['car'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $driver = $_POST['driver'];

  
  $sql= "INSERT INTO book (username, email, nid, mobile, car, place, tarikh, driver) VALUES ('$name','$mail', '$nid','$mobile','$car','$location','$date', '$driver')";
  
  $query_run = mysqli_query($conn, $sql);
  if( $query_run){
  echo "<script>alert('Your Car have been booked. Thank you for booking.')</script>";
  header("Location: payment.php");
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
   
<center><h1>Book Your Car</h1></center> 
<br>
<br>
<div class="w-50 m-auto">
    <form action="" method="POST">
      <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  value="<?php echo $name; ?>" required>
      </div>
      <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control"  value="<?php echo $email; ?>" required>
      </div>
      <div class="form-group">
            <label>NID or PASSPOST</label>
            <input type="text" name="NID" class="form-control"  value="<?php echo $nid; ?>" required>
      </div>
      <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control"  value="<?php echo $mobile; ?>" required>
      </div>
      <div class="form-group">
            <label>Car Type and Details</label>
            <input type="text" name="car" class="form-control"  value="<?php echo $car; ?>" required>
      </div>
      <div class="form-group">
            <label>Location</label>
            <input type="text" name="location" class="form-control"  value="<?php echo $location; ?>" required>
      </div>
      <div class="form-group">
            <label>Date & Time</label>
            <input type="datetime-local" name="date" class="form-control" value="<?php echo $date; ?>" required>
      </div>
      <div class="form-group">
      <p>Driver</p>
        <input type="radio" id="yes" name="driver" value="yes">
        <label for="yes">yes </label>
        <input type="radio" id="No  " name="driver" value="No">
        <label for="no">no</label>
      </div>
      <div class="form-group">
      <button type="submit" name="booking" class="btn bg-primary">Book</button>
      </div>
    </form>
  </div>
	</div>
  <br>
  <br>
</body>
</html>