<?php 
require 'functions.php';

if( isset($_POST["signup"]) ) {

	if( tambah($_POST) > 0 ) {
		header("Location: login.php");
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets2/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="shortcut icon" type="image/jpg/png" href="assets2/images/icon.png"/>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets2/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>