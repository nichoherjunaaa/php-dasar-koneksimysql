<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum_platform";
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal dibangun: " . $conn->connect_error);
}
?>