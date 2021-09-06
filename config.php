<?php 

error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "file_upload_tutorial";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('เชื่อมต่อไม่สำเร็จ.')</script>");
}
?>