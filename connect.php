<?php

$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "exhibit";

$conn = new mysqli($servername, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}