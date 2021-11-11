<?php
$server = "localhost";
$username="root";
$pass = "";
$database = "aaagyms";
$conn = new mysqli($server,$username,$pass,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>