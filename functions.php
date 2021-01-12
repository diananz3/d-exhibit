<?php
include 'connect.php';

$unameErr = $emailErr = $passwordErr = $confirmpassErr = "";
$username = $email = $password = $confirmpassword =  "";
$judulErr = $emailErr = $noteErr = $errmsg = "";
$judul = $email = $note = $gambar =  $res = "";
$penyelenggara = $mulai = $selesai = "";
$namaErr = $mulaiErr = $selesaiErr = "";

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    


	$query = "INSERT INTO user (username, email, password) 
    VALUES ('$username', '$email', '$password')";
	$conn->query($query);

	return $conn->affected_rows;
}

function pic($data) {
	global $conn;

	$judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);

	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
    $id = $_SESSION["row"]["id_user"];
	$query = "INSERT INTO karya (user, judul, email, data, note)
				VALUES
			  ( '$id', '$judul', '$email', '$gambar', '$note')
			";
	$conn->query($query);

	return $conn->affected_rows;
}


function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		$errmsg = "Pilih gambar terlebih dahulu";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		$errmsg = "Tipe harus jpg, jpeg, atau png";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 20000000 ) {
		$errmsg = "Gambar terlalu besar, max 20mb";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets1/img/' . $namaFileBaru);

	return $namaFileBaru;
}

function hapus($id) {
	global $conn;
	$query = ("DELETE FROM karya WHERE id_pic = $id");
	$conn->query($query);
	return $conn->affected_rows;
}

function eve($data) {
	global $conn;
	$judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
	
	$id_event = $_GET["id_eve"];
    $uname = $_SESSION["row"]["username"];
	$query = "INSERT INTO eve (id_event, user, judul, email, data)
				VALUES
			  ( '$id_event', '$uname', '$judul', '$email', '$gambar')
			";
	$conn->query($query);

	return $conn->affected_rows;
}

function tambah_event($data) {
	global $conn;

	$judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
	$penyelenggara = filter_input(INPUT_POST, 'penyelenggara', FILTER_SANITIZE_STRING);
	$mulai = filter_input(INPUT_POST, 'mulai', FILTER_SANITIZE_STRING);
	$selesai = filter_input(INPUT_POST, 'selesai', FILTER_SANITIZE_STRING);
	$note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);

	
	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
    $uname = $_SESSION["row"]["username"];
	$query = "INSERT INTO events (uploader, nama_event, penyelenggara, mulai, selesai, note, poster)
				VALUES
			  ( '$uname', '$judul', '$penyelenggara', '$mulai', '$selesai', '$note', '$gambar')
			";
	$conn->query($query);

	return $conn->affected_rows;
}