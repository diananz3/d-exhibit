<?php 
include 'connect.php';
$judulErr = $emailErr = $noteErr = $errmsg = "";
$judul = $email = $note = $gambar =  "";

if(isset($_POST['submit'])) {
    if (empty($_POST["judul"])) {
        $judulErr = "Name is required";
    } else {
        $judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    }

    if (empty($_POST["note"])) {
        $noteErr = "Description is required";
    } else {
        $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
    }

    $namaFile = $_FILES['gambar']['name'];
    $type = $_FILES['gambar']['type'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $path="assets1/img/" .$namaFile; //set upload folder path
  
    if(empty($namaFile)){
        $errmsg="Please Select Image";
    }
    else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') { 
        if(!file_exists($path)) {
            if($size < 5000000) //check file size 5MB
            {
                move_uploaded_file($tmpName, "assets1/img/" .$namaFile); //move upload file temperory directory to your upload folder
            }
            else {
                $errmsg="Gambar minimal 5MB"; //error message file size not large than 5MB
            }
        }
    }
    else {
        $errmsg="Upload JPG , JPEG , PNG & GIF File Formate"; //error message file extension
    }
  
    if(!isset($errmsg)) {
    $stmt=$conn->prepare('INSERT INTO karya (judul, email, note, data) VALUES(:judul,:email, :note, :namaFile)'); //sql insert query     
    $stmt = $conn->prepare($sql);
  
        if($stmt->execute()) {
            echo $insertMsg="File Upload Successfully........"; //execute query success message
            header("refresh:3;galeri.php"); //refresh 3 second and redirect to index.php page
        }
    }
    else{
	  echo $errmsg;
    }
}