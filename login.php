<?php 
require 'functions.php';

if( isset($_POST["signin"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = $conn->query("SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( $result->num_rows === 1 ) {
            // verifikasi password
        $row = $result->fetch_assoc();
		if( password_verify($password, $row["password"]) ) {
			session_start();
            $_SESSION["row"] = $row;
            header("Location: index.php");
        }
	}

	$error = true;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="shortcut icon" type="image/jpg/png" href="assets2/images/icon.png"/>
</head>
<body>

    
<section class="sign-in">
    <div class="container pt-3">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="assets2/images/signin-image.jpg" alt="sing up image"></figure>
                <a href="signup.php" class="signup-image-link">Create an account</a>
            </div>
            <div class="signin-form">
                <h2 class="form-title">Log In</h2>
                <form method="POST" action="" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="username" id="username" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
