<?php 


include 'dbcon/userinfo.php';

error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

if (isset($_POST['comp']))
{
  
  $name = $_POST['user'];
  $email = $_POST['email'];
  $comment = $_POST['comments'];

  
  $sql= "INSERT INTO complain (username, email, comment) VALUES ('$name','$email','$comment')";
  
  $query_run = mysqli_query($conn, $sql);
  if( $query_run){
  echo "<script>alert('Your Car have been recorded. Thank you for being with us.')</script>";
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
<br>
<br>
   
<center><?php echo "<h1>Hello " . $_SESSION['username'] . "</h1>"; ?></center> 
<center><h3>Please fill this if you have any Complain or Query</h3></center> 
<section>
<br>
<br>
  <div class="w-50 m-auto">
    <form action="" method="POST">
      <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control">
      </div>
      <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
            <label>Comment</label>
            <Textarea class="form-control" name="comments"></Textarea>
      </div>
      <div class="form-group">
      <button type="submit" name="comp" class="btn btn-primary ">Submit
      </button>
      </div>
    </form>
  </div>
</section>
<br>
<br>

</body>
</html>