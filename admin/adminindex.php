<?php 
require '../dbcon/userinfo.php'; 
error_reporting(0);
session_start();


if(isset($_POST['login']));
{
    $user = $_POST['username'];
    $pass = $_POST['password']; 

    $usr =  mysqli_real_escape_string($conn, $user);
    $pas =  mysqli_real_escape_string($conn, $pass);

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$usr' AND password='$pas'") or die(mysqli_error($conn));
    
    $row = mysqli_fetch_array($query);
    $name= $row['username'];
    $counter= mysqli_num_rows($query);
    $id = $row['id'];

    if($counter !== 0){
        $_SESSION['id']=$id;
        $_SESSION['username']=$name;

        header("Location: adminhome.php");
        
    }
    else{
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/design.css">

	<title>Admin Login</title>
</head>
<body style="background-color:skyblue">
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  required>
			</div>
			<div class="input-group">
				<button name="login" class="btn bg-primary">Login</button>
			</div>
		</form>
	</div>
	
</body>
</html>