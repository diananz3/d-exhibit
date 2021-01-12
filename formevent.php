<?php include 'functions.php';
include 'auth.php'; 

if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( eve($_POST) > 0 ) {
            header("refresh:3;events.php");
	} else {
		header("Location: formpic.php");
	}


}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Karya</title>

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
                        <h2 class="form-title">Upload Karya</h2>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul"></label>
                                <input type="text" name="judul" id="judul" placeholder="Judul Karya"/>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="file" name="gambar" id="gambar"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div>
                        <p>Ketentuan Gambar</p>
                        <ol>
                            <li>Ekstensi file .jpg .jpeg atau .png</li>
                            <li>Ukuran dibawah 20MB</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>