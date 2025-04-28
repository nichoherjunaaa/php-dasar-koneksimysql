<?php

include "connection.php";

if (isset($_POST['nama']) && isset($_POST['jkel']) && isset($_POST['email']) && isset($_POST['alamat']) && isset($_POST['kota']) && isset($_POST['pesan'])) {
    $vnama = $_POST['nama'];
    $vjkel = $_POST['jkel'];
    $vemail = $_POST['email'];
    $valamat = $_POST['alamat'];
    $vkota = $_POST['kota'];
    $vpesan = $_POST['pesan'];

    $sql = "insert into kontak set nama=?, jkel=?, email=?, alamat=?, kota=?, pesan=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $vnama, $vjkel, $vemail, $valamat, $vkota, $vpesan);
    $stmt->execute();

    if ($stmt->error) {
        die("Proses simpan ke database gagal: " . $stmt->error);
    }

    $stmt->close();
} else {
    die("Data tidak lengkap");
}

$conn->close();
header("location:kontak.php");
?>
